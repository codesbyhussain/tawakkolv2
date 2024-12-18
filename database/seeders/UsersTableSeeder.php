<?php
namespace App\Models;
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $user = new User;
        $user->name = "Hussain";
        $user->email = "avenger.hussain14@gmail.com";
        $user->password = Hash::make('admin');
        $user->is_admin = true;
        $user->save();
    }
}