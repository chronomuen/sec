<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Transaction;
use App\Log;

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
        Transaction::create([
            'transaction_id' => $request['transaction_id'],
            'type' => $request['type'],
            'client' => $request['client'],
            'status' => 'New',
            'date_submitted' => $request['date_submitted']
        ]);

        Log::create([
            'user_id' => $request['user_id'],
            'username' => $request['username'],
            'email' => $request['email'],
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'department' => $request['department'],
            'job_title' => $request['job_title'],
            'password' => $request['password'],
            'status' => 'Active',
            'user_type' => 'Processor'
        ]);

        return redirect('superadmin/process_transactions')->withMessage('Successfully created transaction!');
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
    public function update($id)
    {
        //
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
