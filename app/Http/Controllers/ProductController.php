<?php

    namespace App\Http\Controllers;

    use App\Models\Product;
    use App\Models\Cart;
    use App\Models\Order;
    use Illuminate\Http\Request;
    use Session;
    use Illuminate\Support\Facades\DB;

    class ProductController extends Controller
    {
        public function index()  // fetch all products
        {
            return response()->json(Product::all(),200);
        }

        public function detail($id)
        {
            $data =Product::find($id);
            return view('detail', ['product' => $data]);
        }

        function search(Request $req){
            
            $data = Product::where('name','like','%'.$req->input('query').'%')->get();

            return view('search',['products' => $data]);
        }

        function addToCart (Request $req){
            
            if($req->session()->has('user')){
                $cart = new Cart;
                $cart->user_id=$req->session()->get('user')['id'];
                $cart->product_id=$req->product_id;
                $cart->save();
                return redirect("/shop");
            }
            else{
                return redirect('/login');
            }
        }

        static function cartItem(){
            $userid=Session::get('user')['id'];
            return Cart::where('user_id',$userid)->count();
        }

        function cartList(){
            if(Session::has('user')){
            $userId=Session::get('user')['id'];
            $products = DB::table('cart')->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->select('products.*','cart.id as cart_id')
            ->get();

            return view('cartList',['products'=>$products]);
            }
            else{
                return redirect('/login');
            }
        }

        function removeCart($id){
            Cart::destroy($id);
            return redirect("/cartlist");
        }

        function orderNow(){
            $userId=Session::get('user')['id'];

            $total = DB::table('cart')->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->sum('products.price');

            $products = DB::table('cart')->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->select('products.*','cart.id as cart_id')
            ->get();
            

            return view("ordernow",[
                'pay'=>$total,
                'products'=>$products
            ]);
        }

        function orderPlace(Request $req){
            $userId=Session::get('user')['id'];
            $allCart=Cart::where('user_id',$userId)->get();
    foreach($allCart as $cart){
        $order = new Order;
        $order->product_id=$cart['product_id'];
        $order->user_id=$cart['user_id']; 
        $order->address=$req->address;
        $order->save();
        Cart::where('user_id',$userId)->delete();
    }
    return redirect("/shop");
        }

            function myOrders(){

                
                $userId=Session::get('user')['id'];
                $orders = DB::table('orders')
                ->join('products','orders.product_id','=','products.id')
                ->where('orders.user_id',$userId)
                ->get();

                return view('myorders',[
                    'orders'=>$orders
                ]);
            }

        function allOrders(){
            
            if(Session::has('user')){
                if(Session::get('user')['is_admin']){
                $orders = DB::table('orders')
                ->join('products','orders.product_id','=','products.id')
                ->get();


                return view('allorders', [
                    'orders'=> $orders
                ]);
            }
            
                else{
                return redirect("/");
                }
            }
            else{
                return redirect("/login");
            }
        }

        public function store(Request $request)  // creates a new product
        {
            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'quantity' => $request->units,
                'price' => $request->price,
                'image' => $request->image
            ]);

            return response()->json([
                'status' => (bool) $product,
                'data'   => $product,
                'message' => $product ? 'Product Created!' : 'Error Creating Product'
            ]);
        }

        public function show(Product $product)
        {
            return response()->json($product,200); 
        }

        public function uploadFile(Request $request)  //upload the product image and fetch the image URL
        {
            if($request->hasFile('image')){
                $name = time()."_".$request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('images'), $name);
            }
            return response()->json(asset("images/$name"),201);
        }

        public function update(Request $request, Product $product)  //Update the Product
        {
            $status = $product->update(
                $request->only(['name', 'description', 'units', 'price', 'image'])
            );

            return response()->json([
                'status' => $status,
                'message' => $status ? 'Product Updated!' : 'Error Updating Product'
            ]);
        }

        public function Quantity(Request $request, Product $product)  //Adds the product quantity
        {
            $product->quantity = $product->quantity + $request->get('quantity');
            $status = $product->save();

            return response()->json([
                'status' => $status,
                'message' => $status ? 'Units Added!' : 'Error Adding Product Units'
            ]);
        }

        public function destroy(Product $product)  //deletes the product
        {
            $status = $product->delete();

            return response()->json([
                'status' => $status,
                'message' => $status ? 'Product Deleted!' : 'Error Deleting Product'
            ]);
        }
    }