@extends('default')
<!-- User Sidebar -->
{!! View::make('processor/_sidebar', array('authuser' => $authuser))->render() !!}

@section('header')

Transaction List

@stop

@section('content')
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
	</form>
</div>


<br>
<div style="padding-right:20px; padding-left:20px">
	<div class="row">
		@if($logs->isEmpty())
		@else
		<div id="panel" class="panel" >
			<table  id="transactions" class="table table-list-search" >
				<thead>
					<tr>
					<th class="col-md-1"><center>Transaction ID</center></th>
					<th class="col-md-1"><center>Status</center></th>
					<th class="col-md-2"><center>Remarks</center></th>
					<th class="col-md-2"><center>Processor</center></th>
					<th class="col-md-1"><center>Receive Date</center></th>
					<th class="col-md-1"><center>Release Date</center></th>
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
						<td>{!! substr($log->date_released,0,10) !!}</td>
						<td>{!! $log->next_processor !!}</td>
					</tr>
				    @endforeach
				</tbody>
			</table>
		</div>
		@endif
	</div>
</div>
@stop
