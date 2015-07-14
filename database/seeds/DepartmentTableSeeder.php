<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DepartmentTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('departments')->delete();

        $departments = array(

            ['id' => 1, 'department_id' => 00001, 'name' => 'Administration Department'],

            ['id' => 2, 'department_id' => 00002, 'name' => ' Markets and Securities Regulation Department'],

            ['id' => 3, 'department_id' => 00003, 'name' => ' Corporate Governance and Finance Department'],

            ['id' => 4, 'department_id' => 00004, 'name' => ' Enforcement and Investor Protection Department'],

            ['id' => 5, 'department_id' => 00005, 'name' => ' Company Registration and Monitoring Department'],

            ['id' => 6, 'department_id' => 00006, 'name' => ' Information and Communications Technology Department'],

            ['id' => 7, 'department_id' => 00007, 'name' => 'Human Resource and Administration Department'],

            ['id' => 8, 'department_id' => 00008, 'name' => ' Economic Research and Training Department']
        );

        //// Uncomment the below to run the seeder
        DB::table('departments')->insert($departments);
    }
}
