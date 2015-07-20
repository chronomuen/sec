<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Session;
use Redirect;
use App\User;
use App\Processor;

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
            'user_id' => 'required|unique:users',
            'username' => 'required|unique:users',
            'email' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'department' => 'required',
            'job_title' => 'required',
            'password' => 'required'
        ]);

        Processor::create([
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

        Session::flash('flash_message', 'User successfully created!');

        return redirect('superadmin/create_user');
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
        //
        $user = User::findOrFail($id);

        if(Input::has('edit'))
        {
            if ($user->username != $request['username']){
                $this->validate($request, [
                    'username' => 'required|unique:users',
                    'email' => 'required',
                    'firstname' => 'required',
                    'lastname' => 'required',
                    'department' => 'required',
                    'job_title' => 'required',
                ]);
            }
            else{
                $this->validate($request, [
                    'email' => 'required',
                    'firstname' => 'required',
                    'lastname' => 'required',
                    'department' => 'required',
                    'job_title' => 'required',
                ]);
            }

            $input = $request->all();

            $user->fill($input)->save();

            Session::flash('flash_message', 'User successfully edited!');
        }
        else{
            # code...
            $input = $request->all();

            $user->fill($input)->save();

            Session::flash('flash_message', 'User successfully activated/deactivated!');
        }


        return redirect()->back();

        /*if(Input::has('edit'))
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
        return redirect('superadmin/view_users');*/
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
