<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use App\User;
use App\Log;
use Auth;
use DB;
use App\Transaction;

class ProcessorController extends Controller
{
    //var $authuser = Auth::user();
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
		$transactionID =  Input::get('search');

		$logs = Log::where('transaction_id', '=', $transactionID)->get();
        $authuser = Auth::user();
        return view('processor.index', array('authuser' => $authuser, 'logs' => $logs ));
    }

    public function create_transaction()
    {
        //
        $authuser = Auth::user();
        $transactionID = Session::get('transactionID');
        return view('processor.new_transaction', array('transactionID' => $transactionID, 'authuser' => $authuser));
    }

    public function process_transactions()
    {
        //
        $authuser = Auth::user();
        return view('processor.processes', array('authuser' => $authuser));
    }

    public function process()
    {
        //
        $transactionID =  Input::get('transactionID');
        $transaction = Transaction::where('transaction_id', '=', $transactionID)->first();
        $logs = Log::where('transaction_id', '=', $transactionID)->get();
        $recentLog = Log::where('transaction_id', '=', $transactionID)->orderBy('date_received', 'desc')->first();


        if(Input::has('create'))
        {
            // Redirect to different route / URI
            return Redirect::route('processor/create_transaction')->with('transactionID', $transactionID);


            // Alternatively, you could process action 1 here
        }

        elseif(Input::has('update'))
        {
            // Process action 2

            return Redirect::route('processor/update_transaction')
                ->with( 'transaction', $transaction )
                ->with( 'logs', $logs )
                ->with( 'recentLog', $recentLog );
        }


        elseif(Input::has('out'))
        {
            // Process action 3
            return Redirect::route('processor/out_transaction')
                ->with( 'transaction', $transaction )
                ->with( 'logs', $logs )
                ->with( 'recentLog', $recentLog );
        }
    }

	public function view_users()
    {
        //
        $authuser = Auth::user();
        return view('processor.view_users', array('authuser' => $authuser));
    }

	public function	update_transaction()
    {
        $authuser = Auth::user();
		$transaction = Session::get('transaction');
        $logs = Session::get('logs');

        $recentLog = Session::get('recentLog');

		$firstname = $authuser->firstname;
		$lastname = $authuser->lastname;

        $flag = "no";
        if($recentLog != null){
            if($recentLog->next_processor == $firstname.' '.$lastname || ($recentLog->processor_name == $firstname.' '.$lastname  && ($recentLog->next_processor == '-' || $recentLog->next_processor == 'Customer'))) {
    			$flag = "yes";
    		} else {
    			$flag = "no";
    		}
        }
        return view('processor.update_transaction', array('authuser' => $authuser, 'transaction' => $transaction, 'logs' => $logs, 'recentLog' => $recentLog, 'flag' => $flag));

    }

	public function	out_transaction()
    {
        $authuser = Auth::user();
        $users = User::selectRaw('CONCAT(firstname, " ", lastname) as fullname, user_id')->lists('fullname', 'fullname');
        $transaction = Session::get('transaction');
        $logs = Session::get('logs');
        $recentLog = Session::get('recentLog');

		$firstname = $authuser->firstname;
		$lastname = $authuser->lastname;

        $flag = "no";
        if($recentLog != null){
            if($recentLog->next_processor == $firstname.' '.$lastname || ($recentLog->processor_name == $firstname.' '.$lastname  && ($recentLog->next_processor == '-' || $recentLog->next_processor == 'Customer'))) {
    			$flag = "yes";
    		} else {
    			$flag = "no";
    		}
        }
        return view('processor.out_transaction', array('authuser' => $authuser, 'transaction' => $transaction, 'logs' => $logs, 'recentLog' => $recentLog, 'users' => $users, 'flag' => $flag));
    }

    public function store_transaction()
    {
        //
        if(Input::has('create'))
        {
            Session::flash('message', "success create");
        }
        elseif(Input::has('update'))
        {
            Session::flash('message', "success update");

        }
        elseif(Input::has('out'))
        {
            Session::flash('message', "success out");

        }
        else {
            Session::flash('message', "error");
        }
        return Redirect::route('processor/process_transactions');
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
