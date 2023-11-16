<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = new User();
        $user->name="pepe";
        $user->username="pepe23";
        $user->email="pepe23@gmail.com";
        $user->password= bcrypt("12345");
        $user->role_id= 1;
        $user->save();
    }
}
