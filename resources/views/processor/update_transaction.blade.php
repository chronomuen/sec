@extends('default')
<!-- User Sidebar -->
{!! View::make('processor/_sidebar', array('authuser' => $authuser))->render() !!}

@section('header')

Update Transaction

@stop

@section('javascript')
	<script src="/js/radio.js" type="text/javascript"></script>
@stop

@section('content')
	@if(!empty($transaction))
		{!! Form::model($transaction, ['method' => 'PATCH', 'route' =>  ['transaction.update', $transaction->transaction_id] ]) !!}
		{!! View::make('forms/_update_transaction', array('transaction' => $transaction, 'logs' => $logs, 'recentLog' => $recentLog, 'flag' => $flag, 'remarks' => $remarks))->render()  !!}
	@else
		<div style="padding-right:20px; padding-left:20px">
			<div class="row">
				<div class="panel">
					<div class="panel-body">
						<div class="alert alert-danger">
							Transaction not found!
						</div>
					</div>
				</div>
			</div>
		</div>
	@endif
	<!-- form close in form itself -->
@stop
