@extends('default')
<!-- User Sidebar -->
@include('superadmin/_sidebar')

@section('header')

Update Transaction

@stop

@section('javascript')
	<script src="/js/radio.js" type="text/javascript"></script>
@stop

@section('content')
	{!! Form::open(array('action' => 'SuperAdminController@store_transaction')) !!}
	{!! View::make('forms/_out_transaction', array('transactionID' => $transactionID, 'processorName' => 'Jose Palma'))  !!}
	<!-- form close in form itself -->
@stop
