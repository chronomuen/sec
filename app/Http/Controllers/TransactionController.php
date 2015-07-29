<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Transaction;
use App\Log;
use Auth;
use DateTime;
use Input;
use App\User;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'transaction_id' => 'required|unique:transactions',
            'type' => 'required',
            'client' => 'required',
            'password' => 'required',
            'date_submitted' => 'required'
        ]);
		//$input = $request->all();
		//$transaction->fill($input)->save();
		//$transaction->save();

        $user = Auth::user();
        $date = new DateTime($request['date_submitted']);

        Transaction::create([
            'transaction_id' => $request['transaction_id'],
            'type' => $request['type'],
            'client' => $request['client'],
            'password' => $request['password'],
            'status' => 'New',
            'date_submitted' => $date
        ]);

		$date = new DateTime();

        Log::create([
            'transaction_id' => $request['transaction_id'],
            'processor_name' => $user->firstname.' '.$user->lastname,
            'status' => 'New',
            'remarks' => $request['remarks'],
            'date_received' => $date,
            'date_released' => '',
            'next_processor' => '-'
        ]);

        if($user->user_type = "Processor")
        {
            return redirect('processor/process_transactions')->withMessage('success create');
        }
        else{
            return redirect('superadmin/process_transactions')->withMessage('success create');
        }
    }

    public function process()
    {
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $transaction = Transaction::findOrFail($id);
        $authuser = Auth::user();

        //Update transaction
        if(Input::has('update'))
        {
            $this->validate($request, [
                'remarks' => 'required'
            ]);

            $input = $request->all();
            $transaction->fill($input)->save();
            $transaction->status = "In process";
            $transaction->save();

            //Log
            $recentLog = Log::where('transaction_id', '=', $transaction->transaction_id)->orderBy('date_received', 'desc')->first();

            $firstname = $authuser->firstname;
            $lastname = $authuser->lastname;

			$date = new DateTime();
			Log::create([
				'transaction_id' => $transaction->transaction_id,
				'processor_name' => $authuser->firstname.' '.$authuser->lastname,
				'status' => 'In process',
				'remarks' => $request['remarks'],
				'date_received' => $date,
				'date_released' => '',
				'next_processor' => '-'
			]);

            if($authuser->user_type == "Processor")
            {
                return redirect('processor/process_transactions')->withMessage('success update');
            }
            else{
                return redirect('superadmin/process_transactions')->withMessage('success update');
            }
        }

        //Log out transaction
        if(Input::has('out'))
        {
            //Log
            //if processor of recent log is the auth user, update log
            $recentLog = Log::where('transaction_id', '=', $transaction->transaction_id)->orderBy('date_received', 'desc')->first();

            $firstname = $authuser->firstname;
            $lastname = $authuser->lastname;

            $complete = (Input::has('completed')) ? true : false;
            //completed transaction should only be forwarded to customer or to '-'
            if($complete){
				$transaction->status = "Completed";
				$transaction->save();

                if($request['next_processor'] != "Customer"){
                    $nextprocessor = "-";
                }
                else{
                    $nextprocessor = $request['next_processor'];
                }
				//create log
                $date = new DateTime();
                Log::create([
                    'transaction_id' => $transaction->transaction_id,
                    'processor_name' => $authuser->firstname.' '.$authuser->lastname,
                    'remarks' => $request['remarks'],
                    'date_received' => $date,
                    'date_released' => $date,
                    'status' => 'Completed',
                    'next_processor' => $nextprocessor
                ]);
            }
            else {
				$nextprocessor = $request['next_processor'];
				if($recentLog->status == 'Completed')
				{
					$transaction->status = "In process";
					$transaction->save();
					$date = new DateTime();
					Log::create([
						'transaction_id' => $transaction->transaction_id,
						'processor_name' => $authuser->firstname.' '.$authuser->lastname,
						'status' => 'In process',
						'remarks' => $request['remarks'],
						'date_received' => $recentLog->date_released,
						'date_released' => $date,
						'next_processor' => $nextprocessor
					]);
				}
				else {
					//add date_released
					$date = new DateTime();
					$recentLog->date_released = $date;
					$recentLog->remarks = $request['remarks'];
					$recentLog->next_processor = $nextprocessor;
					$recentLog->save();
				}
            }

            if($authuser->user_type == "Processor")
            {
                return redirect('processor/process_transactions')->withMessage('success out');
            }
            else{
                return redirect('superadmin/process_transactions')->withMessage('success out');
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
