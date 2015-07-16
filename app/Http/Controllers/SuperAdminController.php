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
		$transactionID =  Input::get('search');

		$logs = Log::where('transaction_id', '=', $transactionID)->get();
		//$logs = DB::table('logs')->where('transaction_id', '00001');
		//$logs = Log::all();
        $authuser = Auth::user();
        return view('superadmin.index', array('authuser' => $authuser, 'logs' => $logs ));
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
        $depts = Department::lists('name', 'department_id');
        return view('superadmin.create_user', array('depts' => $depts));
    }

    public function edit_user($id)
    {
        $user = User::findOrFail($id);

        return view('superadmin.edit_user', array('user' => $user));
    }

    public function create_transaction()
    {
        //
        $authuser = Auth::user();
        $transactionID = Session::get('transactionID');
        return view('superadmin.new_transaction', array('transactionID' => $transactionID, 'authuser' => $authuser));
    }

    public function process_transactions()
    {
        //
        return view('superadmin.processes');
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
                ->with( 'recentLog', $recentLog );
        }
    }

	public function view_users()
    {
        $authuser = Auth::user();
        $users = User::all();
        //var_dump(Department::find(1));
        //var_dump(DB::getQueryLog());
        //$user = DB::table('users')->where('user_id', '=', 201201034)->first();
        return view('superadmin.view_users', array('users' => $users, 'authuser' => $authuser));

        //$user = Auth::user();
        //var_dump(Department::find(1));
        //var_dump(DB::getQueryLog());
        //$user = DB::table('users')->where('user_id', '=', 201201034)->first();


    }

	public function	update_transaction()
    {
        //
        $transaction = Session::get('transaction');
        $logs = Session::get('logs');
        $recentLog = Session::get('recentLog');
        return view('superadmin.update_transaction', array('transaction' => $transaction, 'logs' => $logs, 'recentLog' => $recentLog));
    }

	public function	out_transaction()
    {
        //
        $transaction = Session::get('transaction');
        $logs = Session::get('logs');
        $recentLog = Session::get('recentLog');
        return view('superadmin.out_transaction', array('transaction' => $transaction, 'logs' => $logs, 'recentLog' => $recentLog));
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
        $user = User::findOrFail($id);
        $depts = Department::lists('name', 'department_id');

        return view('superadmin.edit_user', array('user' => $user, 'depts' => $depts));
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
