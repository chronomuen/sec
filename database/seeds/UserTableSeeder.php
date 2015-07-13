<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $users = array(
            ['id' => 1, 'user_id' => '201201034', 'username' => 'julianfelipe', 'email' => 'jfelipe@yahoo.com', 'password' => bcrypt('jfelipepass'), 'firstname' => 'Julian', 'lastname' => 'Felipe', 'department' => 00020, 'status' => 'Active', 'job_title' => 'Frontliner', 'user_type' => 'Processor'],

            ['id' => 2, 'user_id' => '201201030', 'username' => 'josepalma', 'email' => 'jpalma@yahoo.com', 'password' => bcrypt('jpalmapass'), 'firstname' => 'Jose', 'lastname' => 'Palma', 'department' => null, 'status' => 'Active', 'job_title' => null, 'user_type' => 'Superadmin']
        );

        //// Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
}
