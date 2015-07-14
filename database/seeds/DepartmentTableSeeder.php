<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DepartmentTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('departments')->delete();

        $departments = array(
            ['id' => 1, 'department_id' => 00020, 'name' => 'Company Registration and Monitoring Department'],

            ['id' => 2, 'department_id' => 00001, 'name' => 'Administration Department']
        );

        //// Uncomment the below to run the seeder
        DB::table('departments')->insert($departments);
    }
}
