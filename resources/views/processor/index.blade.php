@extends('default')
<!-- User Sidebar -->
{!! View::make('processor/_sidebar', array('authuser' => $authuser))->render() !!}

@section('header')

Transaction List

@stop

@section('content')
<div class="panel" >
	<div align="center">
		<h3 style="center">Search Transaction</h3>
		<form action="#" method="get" style="width: 300px">
			<div class="input-group">
				<div>
					{!! Form::open(['route' => 'superadmin.index']) !!}
					{!! Form::text('search', null, array('id' => 'search', 'class' => 'form-control', 'placeholder' => 'Enter ID')) !!}<br/>
				</div>
				<span class="input-group-btn">
					<button type="submit" id="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
				</span>
			</div>
			<div align="center" class="form-group">
				{!! Form::radio('choice', 'Transaction')!!} Transaction
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				{!! Form::radio('choice', 'Client') !!} Client
			</div>
		</form>
	</div>

	<br>

	@if($tick == "Transaction")
		<div style="padding-right:20px; padding-left:20px">
			<h4><b>Transaction Password:</b>
			@foreach ($transactionPass as $tp)
				{!! $tp->password !!}
			@endforeach
			</h4>
			<div class="row">
				@if($logs->isEmpty())
				@else
				<div id="panel" class="panel" >
					<table id="logs" class="table table-list-search">
						<thead>
								<tr>
								<th class="col-md-1"><center>Transaction ID</center></th>
								<th class="col-md-1"><center>Status</center></th>
								<th class="col-md-2"><center>Remarks</center></th>
								<th class="col-md-2"><center>Processor</center></th>
								<th class="col-md-1"><center>Date Received</center></th>
								<th class="col-md-1"><center>Date Released</center></th>
								<th class="col-md-2"><center>Next Processor</center></th>
								</tr>
						</thead>
						<tbody>
							@foreach ($logs as $log)
							<tr>
								<td>{!! $log->transaction_id !!}</td>
								<td>{!! $log->status !!}</td>
								<td>{!! $log->remarks !!}</td>
								<td>{!! $log->processor_name !!}</td>
								<td>{!! substr($log->date_received,0,10) !!}</td>
								<td>@if($log->date_released != "0000-00-00 00:00:00"){!! substr($log->date_released,0,10) !!}@endif</td>
								<td>{!! $log->next_processor !!}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				@endif
			</div>
		</div>

	@elseif($tick == "Client")
		<div style="padding-right:20px; padding-left:20px">
			<div class="row">
				@if($transactions->isEmpty())
				@else
				<div id="panel" class="panel" >
					<table id="transactions" class="table table-list-search">
						<thead>
								<tr>
								<th class="col-md-1"><center>Client</center></th>
								<th class="col-md-1"><center>Transaction ID</center></th>
								<th class="col-md-1"><center>Password</center></th>
								<th class="col-md-2"><center>Type</center></th>
								<th class="col-md-1"><center>Date Received</center></th>
								<th class="col-md-2"><center>Status</center></th>
								</tr>
						</thead>
						<tbody>
							@foreach ($transactions as $transaction)
							<tr>
								<td>{!! $transaction->client !!}</td>
								<td>{!! $transaction->transaction_id !!}</td>
								<td>{!! $transaction->password !!}</td>
								<td>{!! $transaction->type !!}</td>
								<td>{!! substr($transaction->date_submitted,0,10) !!}</td>
								<td>{!! $transaction->status !!}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				@endif
			</div>
		</div>
	@endif
</div>
@stop
