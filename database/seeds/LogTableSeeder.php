<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class LogTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('logs')->delete();

        $logs = array(
			['id' => 1, 'transaction_id' => 00001, 'processor_name' => 'Jose Palma', 'status' => 'New', 'remarks' => 'Validated document', 'next_processor' => 'Julian Felipe', 'date_received' => '01/01/15', 'date_released' => '01/01/15'],
			['id' => 2, 'transaction_id' => 00001, 'processor_name' => 'Julian Felipe', 'status' => 'In process', 'remarks' => 'Evaluated document', 'next_processor' => 'ose Rizal', 'date_received' => '01/01/15', 'date_released' => '01/02/15'],
			['id' => 3, 'transaction_id' => 00001, 'processor_name' => 'Jose Rizal', 'status' => 'In process', 'remarks' => 'Encoded document', 'next_processor' => 'Juan Luna', 'date_received' => '01/02/15', 'date_released' => '01/03/15'],
			['id' => 4, 'transaction_id' => 00001, 'processor_name' => 'Juan Luna', 'status' => 'New', 'remarks' => 'Approved document', 'next_processor' => '-', 'date_received' => '01/03/15', 'date_released' => '01/04/15'],

			['id' => 5, 'transaction_id' => 00002, 'processor_name' => 'Jose Palma', 'status' => 'New', 'remarks' => 'Validated document', 'next_processor' => 'Julian Felipe', 'date_received' => '01/01/15', 'date_released' => '01/01/15'],
			['id' => 6, 'transaction_id' => 00002, 'processor_name' => 'Julian Felipe', 'status' => 'In process', 'remarks' => 'Evaluated document', 'next_processor' => 'ose Rizal', 'date_received' => '01/01/15', 'date_released' => '01/02/15'],
			['id' => 7, 'transaction_id' => 00002, 'processor_name' => 'Jose Rizal', 'status' => 'In process', 'remarks' => 'Encoded document', 'next_processor' => 'Juan Luna', 'date_received' => '01/02/15', 'date_released' => '01/03/15'],
			['id' => 8, 'transaction_id' => 00002, 'processor_name' => 'Juan Luna', 'status' => 'New', 'remarks' => 'Approved document', 'next_processor' => '-', 'date_received' => '01/03/15', 'date_released' => '01/04/15'],

			['id' => 9, 'transaction_id' => 00003, 'processor_name' => 'Jose Palma', 'status' => 'New', 'remarks' => 'Validated document', 'next_processor' => 'Julian Felipe', 'date_received' => '01/01/15', 'date_released' => '01/01/15'],
			['id' => 10, 'transaction_id' => 00003, 'processor_name' => 'Julian Felipe', 'status' => 'In process', 'remarks' => 'Evaluated document', 'next_processor' => 'ose Rizal', 'date_received' => '01/01/15', 'date_released' => '01/02/15'],
			['id' => 11, 'transaction_id' => 00003, 'processor_name' => 'Jose Rizal', 'status' => 'In process', 'remarks' => 'Encoded document', 'next_processor' => 'Juan Luna', 'date_received' => '01/02/15', 'date_released' => '01/03/15'],
			['id' => 12, 'transaction_id' => 00003, 'processor_name' => 'Juan Luna', 'status' => 'New', 'remarks' => 'Approved document', 'next_processor' => '-', 'date_received' => '01/03/15', 'date_released' => '01/04/15'],

			['id' => 13, 'transaction_id' => 00004, 'processor_name' => 'Jose Palma', 'status' => 'New', 'remarks' => 'Validated document', 'next_processor' => 'Julian Felipe', 'date_received' => '01/01/15', 'date_released' => '01/01/15'],
			['id' => 14, 'transaction_id' => 00004, 'processor_name' => 'Julian Felipe', 'status' => 'In process', 'remarks' => 'Evaluated document', 'next_processor' => 'ose Rizal', 'date_received' => '01/01/15', 'date_released' => '01/02/15'],
			['id' => 15, 'transaction_id' => 00004, 'processor_name' => 'Jose Rizal', 'status' => 'In process', 'remarks' => 'Encoded document', 'next_processor' => 'Juan Luna', 'date_received' => '01/02/15', 'date_released' => '01/03/15'],
			['id' => 16, 'transaction_id' => 00004, 'processor_name' => 'Juan Luna', 'status' => 'New', 'remarks' => 'Approved document', 'next_processor' => '-', 'date_received' => '01/03/15', 'date_released' => '01/04/15']
        );

        //// Uncomment the below to run the seeder
        DB::table('logs')->insert($logs);
    }
}