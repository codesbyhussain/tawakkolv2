<?php

    namespace App\Http\Controllers;

    use Auth;
    use App\Models\User;
    use Validator;
    use App\Mail\contactuser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
    use Illuminate\Support\Facades\Hash;

    class UserController extends Controller
    {   
        function login(Request $req){
            $user= User::where(['email'=>$req->email])->first();
            if(!$user || !(Hash::check($req->password,$user->password))){
                return "username or password is not matched";
            }
            else{
                $req->session()->put('user',$user);               
                return redirect('/');
            }
        }

        public function index()  // displays all user with orders
        {
        $id=auth()->guard('user')->user()->id;    
        return view()->with(User::find($id)->with(['orders'])->get());
        }

        /*public function login(Request $request)  // authenticates the user
        {
            $status = 401;
            $response = ['error' => 'Unauthorised'];

            if (Auth::attempt($request->only(['email', 'password']))) {
                return view('user.dashboard');
            }

            return redirect()->back();
        }*/

        public function register(Request $request)  //create user account
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:10',
                'email' => 'required|email',
                'password' => 'required|min:2',
                'c_password' => 'required|same:password',
            ]);

            if ($validator->fails()) {
                //return redirect()->back()->withErrors();
            }

            $data = $request->only(['name', 'email', 'password']);
            $data['password'] = Hash::make($data['password']);

            $user = User::create($data);
            $user->is_admin = 0;
            $user->save();

            return redirect("/login");
        }

        public function contact(Request $req){
            //Use SwiftMailer here
            $validator = Validator::make($request->all(),[
                'email' => 'required|email'
            ]);

            if($validator->fails()){
                return new JsonResponse(
                    [
                        'success' => false, 
                        'message' => $validator->errors()
                    ], 422
                );
            }
            $email = $request->all()['email'];
            
                Mail::to("avenger.hussain14@gmail.com")->send(new contactuser($email));
            
            return redirect("/");
        }

        public function show(User $user)  // fetch details of users
        {
            return response()->json($user);
        }

        public function showOrders(User $user)  // fetch the orders of the users
        {
            return response()->json($user->orders()->with(['product'])->get());
        }

    }