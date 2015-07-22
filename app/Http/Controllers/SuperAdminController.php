<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App;
use Auth;
use App\User;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use App\Transaction;
use App\Department;
use App\Log;
use DB;

class SuperadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
		//
		$input =  Input::get('search');
		$logs = Log::where('transaction_id', '=', $input)->get();
        $authuser = Auth::user();
		$transactions = Transaction::where('client', '=', $input)->get();
		$transactionPass =  Transaction::where('transaction_id', '=', $input)->get();
		$tick = Input::get('choice');
		
        return view('superadmin.index', array('authuser' => $authuser, 'logs' => $logs, 'transactions' => $transactions, 'tick' => $tick, 'transactionPass' => $transactionPass));
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

    public function create_user()
    {
        $authuser = Auth::user();
        $depts = Department::lists('name', 'department_id');
        return view('superadmin.create_user', array('authuser' => $authuser, 'depts' => $depts));
    }

    public function edit_user($id)
    {
        $user = User::findOrFail($id);
        $authuser = Auth::user();
        return view('superadmin.edit_user', array('authuser' => $authuser, 'user' => $user));
    }

    public function create_transaction()
    {
        $authuser = Auth::user();
        $transactionID = Session::get('transactionID');
        return view('superadmin.new_transaction', array('transactionID' => $transactionID, 'authuser' => $authuser));
    }

    public function process_transactions()
    {
        $authuser = Auth::user();
        return view('superadmin.processes', array('authuser' => $authuser));
    }

    public function process()
    {
        $transactionID =  Input::get('transactionID');
        $transaction = Transaction::where('transaction_id', '=', $transactionID)->first();
        $logs = Log::where('transaction_id', '=', $transactionID)->get();
        $recentLog = Log::where('transaction_id', '=', $transactionID)->orderBy('date_received', 'desc')->first();


        if(Input::has('create'))
        {
            // Redirect to different route / URI
            return Redirect::route('superadmin/create_transaction')->with('transactionID', $transactionID);


            // Alternatively, you could process action 1 here
        }

        elseif(Input::has('update'))
        {
            // Process action 2
            return Redirect::route('superadmin/update_transaction')
                ->with( 'transaction', $transaction )
                ->with( 'logs', $logs )
                ->with( 'recentLog', $recentLog );
        }


        elseif(Input::has('out'))
        {
            // Process action 3
            return Redirect::route('superadmin/out_transaction')
                ->with( 'transaction', $transaction )
                ->with( 'logs', $logs )
				->with('users','')
                ->with( 'recentLog', $recentLog );
        }
    }

	public function view_users()
    {
        $authuser = Auth::user();
        $users = User::all();
		
        return view('superadmin.view_users', array('users' => $users, 'authuser' => $authuser));
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

        return view('superadmin.update_transaction', array('authuser' => $authuser, 'transaction' => $transaction, 'logs' => $logs, 'recentLog' => $recentLog, 'flag' => $flag));
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

        return view('superadmin.out_transaction', array('authuser' => $authuser, 'transaction' => $transaction, 'logs' => $logs, 'recentLog' => $recentLog, 'users' => $users, 'flag' => $flag));
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
        else
        {
            Session::flash('message', "error");
        }
        return Redirect::route('superadmin/process_transactions');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
        return view('superadmin.success');
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
        $authuser = Auth::user();
        $user = User::findOrFail($id);
        $depts = Department::lists('name', 'department_id');

        return view('superadmin.edit_user', array('authuser' => $authuser, 'user' => $user, 'depts' => $depts));
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
