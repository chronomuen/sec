<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $users = array(
            ['id' => 1, 'user_id' => '201201034', 'username' => 'julianfelipe', 'email' => 'jfelipe@yahoo.com', 'password' => 'jfelipepass', 'firstname' => 'Julian', 'lastname' => 'Felipe', 'department' => 00020, 'job_title' => 'Frontliner', 'user_type' => 'Processor', 'status' => 'Active'],
            ['id' => 2, 'user_id' => '201201030', 'username' => 'josepalma', 'email' => 'jpalma@yahoo.com', 'password' => 'jpalmapass', 'firstname' => 'Jose', 'lastname' => 'Palma', 'department' => null, 'job_title' => null, 'user_type' => 'SuperAdmin', 'status' => 'Active']
        );

        //// Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
}
