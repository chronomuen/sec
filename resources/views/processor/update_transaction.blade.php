@extends('default')
<!-- User Sidebar -->
@include('processor/_sidebar')

@section('header')

Update Transaction

@stop

@section('javascript')
	<script src="/js/radio.js" type="text/javascript"></script>
@stop

@section('content')
	{!! Form::open(array('action' => 'ProcessorController@store_transaction')) !!}
	{!! View::make('forms/_update_transaction', array('transactionID' => $transactionID, 'processorName' => 'Julian Felipe'))  !!}
	<!-- form close in form itself -->
@stop
