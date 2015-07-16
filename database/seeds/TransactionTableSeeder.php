<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TransactionTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('transactions')->delete();

        $transactions = array(
<<<<<<< HEAD
			['id' => 1, 'password' => '00001', 'transaction_id' => '00001', 'type' => 'Company Registration', 'client' => 'Cerquit', 'status' => 'Completed', 'date_submitted' => '01/01/15'],

			['id' => 2, 'password' => '00002', 'transaction_id' => '00002', 'type' => 'Market and Security Regulation', 'client' => 'Avanti', 'status' => 'In process', 'date_submitted' => '01/02/15'],

			['id' => 3, 'password' => '00003', 'transaction_id' => '00003', 'type' => 'Investor Protection', 'client' => 'DoodlePress', 'status' => 'In process', 'date_submitted' => '01/03/15'],

			['id' => 4, 'password' => '00004', 'transaction_id' => '00004', 'type' => 'Investor Protection', 'client' => 'Virtual Done Well', 'status' => 'New', 'date_submitted' => '01/04/15'],

			['id' => 5, 'password' => '00005', 'transaction_id' => '00005', 'type' => 'Financial Management', 'client' => 'IdeyaTech', 'status' => 'New', 'date_submitted' => '01/05/15']
=======
			['id' => 1, 'password' => '00001', 'transaction_id' => '00001', 'type' => 'Company Registration', 'client' => 'Cerquit', 'status' => 'Completed', 'date_submitted' => '01-01-15'],

			['id' => 2, 'password' => '00002', 'transaction_id' => '00002', 'type' => 'Market and Security Regulation', 'client' => 'Avanti', 'status' => 'In process', 'date_submitted' => '01-02-15'],

			['id' => 3, 'password' => '00003', 'transaction_id' => '00003', 'type' => 'Investor Protection', 'client' => 'DoodlePress', 'status' => 'In process', 'date_submitted' => '01-03-15'],

			['id' => 4, 'password' => '00004', 'transaction_id' => '00004', 'type' => 'Investor Protection', 'client' => 'Virtual Done Well', 'status' => 'New', 'date_submitted' => '01-04-15'],

			['id' => 5, 'password' => '00005', 'transaction_id' => '00005', 'type' => 'Financial Management', 'client' => 'IdeyaTech', 'status' => 'New', 'date_submitted' => '01-05-15']
>>>>>>> 0a21391f5a3dcb37a9f007fe8ced8f64462828d8
        );

        // Uncomment the below to run the seeder
        DB::table('transactions')->insert($transactions);
    }

}
