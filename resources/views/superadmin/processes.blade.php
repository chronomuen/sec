@extends('default')
<!-- User Sidebar -->
@include('superadmin/_sidebar')

@section('header')
Search Transaction
@stop

@section('content')
<div style="padding-right:20px; padding-left:20px">
    <div class="row">
        <div class="panel">
            <div class="panel-body">
                <div class="col-md-12" align="center">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <h2 >Enter Transaction ID</h2>
                        {!! Form::open(array('action' => 'SuperAdminController@process')) !!}
                        {!! Form::text('transactionID', null, array('id' => 'transactionID', 'class' => 'form-control', 'required' => 'required')) !!}<br/>
                        <div class="row">
                            {!! Form::submit('Create Transaction', ['class' => 'btn btn-success btn-block', 'name' => 'create']) !!}
                            {!! Form::submit('Update Transaction', ['class' => 'btn btn-primary btn-block', 'name' => 'update']) !!}
                            {!! Form::submit('Out', ['class' => 'btn btn-warning btn-block', 'name' => 'out']) !!}
                        </div>
                        {!! Form::close() !!}
                        <br/><br/>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
