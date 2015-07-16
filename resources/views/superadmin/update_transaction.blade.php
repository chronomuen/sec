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
	{!! Form::model($transaction, ['method' => 'PATCH', 'route' =>  ['transaction.update', $transaction->transaction_id] ]) !!}
	{!! View::make('forms/_update_transaction', array('transaction' => $transaction, 'logs' => $logs))->render()  !!}
	<!-- form close in form itself -->
@stop
