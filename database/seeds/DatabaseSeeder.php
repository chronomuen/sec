<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');

        $this->call('DepartmentTableSeeder');
        $this->command->info('Department table seeded!');

		$this->call('TransactionTableSeeder');
        $this->command->info('Transaction table seeded!');
		
		$this->call('LogTableSeeder');
        $this->command->info('Log table seeded!');


        //Model::reguard();
    }
}
