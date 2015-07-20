<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Auth;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use App\Transaction;
use DB;
use View;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $transaction = Session::get('transaction');
        $message = Session::get('message');
         return view('customer.index', array( 'transaction' => $transaction, 'message' => $message));
		//$transactionID = Input::get('transactionID');
		//$transaction = Transaction::where('transaction_id', '=', $transactionID)->get();

	/*	if (Auth::attempt([
            'transaction_id' => Input::get('transactionID'),
            'password' =>  Input::get('transactionPass')
        ]))
		{
            // Authentication passed...
			return Redirect::back()->withMessage(' ', array('transaction' => $transaction));
        }
        return Redirect::back()->withMessage('Invalid credentials');*/
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
          $id = Input::get('transaction_id');
          $pw =  Input::get('password');
        //  $transaction = Transaction::find($id);
          $transaction = Transaction::where('transaction_id', '=', $id)->first();

          if ($transaction == null) {
              return Redirect::route('customer')
                  ->with( 'transaction', $transaction )
                  ->with( 'message', 'Invalid Transaction ID or Password' );
          }
          else{
              $transpas = $transaction->password;
             if($transpas == $pw){
                 return Redirect::route('customer')
                     ->with( 'transaction', $transaction )
                     ->with( 'message', 'Transaction found' );
            }
             else{
                 return Redirect::route('customer')
                     ->with( 'transaction', $transaction )
                     ->with( 'message', 'Invalid Transaction ID or Password' );
             }
        }

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
