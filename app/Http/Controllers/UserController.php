<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Session;
use Redirect;

class UserController extends Controller
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
     protected function create()
     {
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
            'user_id' => 'required',
            'username' => 'required',
            'email' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'department' => 'required',
            'job_title' => 'required',
            'password' => 'required',
        ]);

        return User::create([
            'user_id' => $request['user_id'],
            'username' => $request['username'],
            'email' => $request['email'],
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'department' => $request['department'],
            'job_title' => $request['job_title'],
            'password' => bcrypt($request['password']),
            'status' => 'Active',
            'user_type' => 'Processor'
        ]);

        Session::flash('flash_message', 'User successfully created!');

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
        if(Input::has('edit'))
        {
            Session::flash('message', "success edit");
        }
        elseif(Input::has('deactivate'))
        {
            Session::flash('message', "success deactivate");

        }
        else
        {
            Session::flash('message', "error");
        }
        return Redirect::route('superadmin/view_users');
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
