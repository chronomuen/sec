<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Input;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $transactionID = Session::get('transactionID');
        return view('customer.index', array('transactionID' => $transactionID));
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
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

    public function showTransaction(){
      //  $transaction = Transaction::find($id);
        $transactionID = Input::get('transactionID');
         return Redirect::route('customer')->with('transactionID', $transactionID);
    }

    public function show($id)
    {
      //  $transaction = Transaction::find($id);
        $transaction = "1";
         return View::make('customer.index', array('transaction' => $transaction));
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
