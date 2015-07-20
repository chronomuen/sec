<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $users = array(
            ['id' => 1, 'user_id' => '201201030', 'username' => 'superadmin', 'email' => 'jpalma@yahoo.com', 'password' => bcrypt('jpalmapass'), 'firstname' => 'Jose', 'lastname' => 'Palma', 'department' => 00001, 'status' => 'Active', 'job_title' => 'Super Administrator', 'user_type' => 'Superadmin'],

            ['id' => 2, 'user_id' => '201201034', 'username' => 'julianfelipe', 'email' => 'jfelipe@yahoo.com', 'password' => bcrypt('jfelipepass'), 'firstname' => 'Julian', 'lastname' => 'Felipe', 'department' => 00002, 'status' => 'Active', 'job_title' => 'Frontliner', 'user_type' => 'Processor'],

			['id' => 3, 'user_id' => '201201031', 'username' => 'joserizal', 'email' => 'jrizal@yahoo.com', 'password' => bcrypt('jrizalpass'), 'firstname' => 'Jose', 'lastname' => 'Rizal', 'department' => 00003, 'status' => 'Active', 'job_title' => 'Consultant', 'user_type' => 'Processor'],

			['id' => 4, 'user_id' => '201284191', 'username' => 'juanluna', 'email' => 'jluna@yahoo.com', 'password' => bcrypt('jlunapass'), 'firstname' => 'Juan', 'lastname' => 'Luna', 'department' => 00004, 'status' => 'Active', 'job_title' => 'Frontliner', 'user_type' => 'Processor'],

			['id' => 5, 'user_id' => '201270012', 'username' => 'apolinariomabini', 'email' => 'amabini@yahoo.com', 'password' => bcrypt('amabinipass'), 'firstname' => 'Apolinario', 'lastname' => 'Mabini', 'department' => 00005, 'status' => 'Active', 'job_title' => 'Secretary', 'user_type' => 'Processor']

        );

        //// Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
}
