<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App;
use App\User;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        return view('superadmin.index');
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
        //
        return view('superadmin.create_user');
    }

    public function edit_user()
    {
        //
        //$userID = Session::get('transactionID');
        $userID = Input::get('edit_userID');
        return view('superadmin.edit_user', array('userID' => $userID));
    }

    public function create_transaction()
    {
        //
        $transactionID = Session::get('transactionID');
        return view('superadmin.new_transaction', array('transactionID' => $transactionID));
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

        if(Input::has('create'))
        {
            // Redirect to different route / URI
            return Redirect::route('superadmin/create_transaction')->with('transactionID', $transactionID);


            // Alternatively, you could process action 1 here
        }

        elseif(Input::has('update'))
        {
            // Process action 2
            return Redirect::route('superadmin/update_transaction')->with('transactionID', $transactionID);
        }


        elseif(Input::has('out'))
        {
            // Process action 3
            return Redirect::route('superadmin/out_transaction')->with('transactionID', $transactionID);
        }
    }

	public function view_users()
    {
        //
        $user = User::find(1);
        return view('superadmin.view_users', array('user' => $user));
    }

	public function	update_transaction()
    {
        //
        $transactionID = Session::get('transactionID');
        return view('superadmin.update_transaction', array('transactionID' => $transactionID));
    }

	public function	out_transaction()
    {
        //
        $transactionID = Session::get('transactionID');
        return view('superadmin.out_transaction', array('transactionID' => $transactionID));
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
