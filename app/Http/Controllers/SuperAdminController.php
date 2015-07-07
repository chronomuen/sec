<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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

    public function create_transaction()
    {
        //
        return view('superadmin.new_transaction');
    }

    public function assign_stages()
    {
        //
        return view('superadmin.assign_stages');
    }
	
	public function view_users()
    {
        //
        return view('superadmin.view_users');
    }
	
	public function	update_transaction()
    {
        //
        return view('superadmin.update_transaction');
    }
	
	public function	out_transaction()
    {
        //
        return view('superadmin.out_transaction');
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
