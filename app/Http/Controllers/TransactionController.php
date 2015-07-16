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
        $user = Auth::user();
        $date = new DateTime($request['date_submitted']);
        Transaction::create([
            'transaction_id' => $request['transaction_id'],
            'type' => $request['type'],
            'client' => $request['client'],
            'status' => 'New',
            'date_submitted' => $date
        ]);

        Log::create([
            'transaction_id' => $request['transaction_id'],
            'processor_name' => $user->firstname.' '.$user->lastname,
            'status' => 'New',
            'remarks' => $request['remarks'],
            'date_received' => $date,
            'date_released' => '',
            'next_processor' => ''
        ]);

        return redirect('superadmin/process_transactions')->withMessage('success create');
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
        //Update transaction
        $transaction = Transaction::findOrFail($id);

        $this->validate($request, [
            'status' => 'required',
            'remarks' => 'required'
        ]);

        $input = $request->all();
        $transaction->fill($input)->save();

        //Log
        //if processor of recent log is the auth user, update log
        $recentLog = Log::where('transaction_id', '=', $transaction->transaction_id)->orderBy('date_received', 'desc')->first();

        $authuser = Auth::user();
        $firstname = $authuser->firstname;
        $lastname = $authuser->lastname;

        if($recentLog->processor_name = $firstname.' '.$lastname)
        {
            //update log
            $input = $request->all();
            $recentLog->fill($input)->save();
        }
        else {
            //create log
            $date = new DateTime();
            Log::create([
                'transaction_id' => $transaction->transaction_id,
                'processor_name' => $authuser->firstname.' '.$authuser->lastname,
                'status' => $request['status'],
                'remarks' => $request['remarks'],
                'date_received' => $date,
                'date_released' => '',
                'next_processor' => ''
            ]);
        }

        return redirect('superadmin/process_transactions')->withMessage('success update');

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
