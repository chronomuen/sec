<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DepartmentTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('departments')->delete();

        $departments = array(

            ['id' => 1, 'department_id' => 00001, 'name' => 'Administration Department', 'acronym' => 'AD'],

            ['id' => 2, 'department_id' => 00002, 'name' => 'Markets and Securities Regulation Department', 'acronym' => 'MSRD'],

            ['id' => 3, 'department_id' => 00003, 'name' => 'Corporate Governance and Finance Department', 'acronym' => 'CGFD'],

            ['id' => 4, 'department_id' => 00004, 'name' => 'Enforcement and Investor Protection Department', 'acronym' => 'EIPD'],

            ['id' => 5, 'department_id' => 00005, 'name' => 'Company Registration and Monitoring Department', 'acronym' => 'CRMD'],

            ['id' => 6, 'department_id' => 00006, 'name' => 'Information and Communications Technology Department', 'acronym' => 'ICTD'],

            ['id' => 7, 'department_id' => 00007, 'name' => 'Human Resource and Administration Department', 'acronym' => 'HRAD'],

            ['id' => 8, 'department_id' => 00008, 'name' => 'Economic Research and Training Department', 'acronym' => 'ERTD']
        );

        //// Uncomment the below to run the seeder
        DB::table('departments')->insert($departments);
    }
}
