@extends('default')
<!-- User Sidebar -->
{!! View::make('processor/_sidebar', array('authuser' => $authuser))->render() !!}

@section('header')

Logout Transaction

@stop

@section('javascript')
	<script src="/js/radio.js" type="text/javascript"></script>
@stop

@section('content')
	{!! Form::open(array('action' => 'ProcessorController@store_transaction')) !!}
	{!! View::make('forms/_out_transaction', array('transactionID' => $transactionID, 'processorName' => 'Julian Felipe'))  !!}
	<!-- form close in form itself -->
@stop
