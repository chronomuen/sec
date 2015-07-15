@extends('default')
<!-- User Sidebar -->
{!! View::make('superadmin/_sidebar', array('authuser' => $authuser))->render() !!}

@section('header')

Transaction List

@stop

@section('javascript')
<script src="/js/table.js" type="text/javascript"></script>
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
		<div id="panel" class="panel" style="display: none">
			<table  id="transactions" class="table table-list-search" style="display: none">
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
						<td>{!! $log->transaction_number !!}</td>
						<td>{!! $log->status !!}</td>
						<td>{!! $log->remarks !!}</td>
						<td>{!! $log->processor_name !!}</td>
						<td>{!! $log->date_received !!}</td>
						<td>{!! $log->date_released !!}</td>
						<td>{!! $log->next_processor !!}</td>
					</tr>
				    @endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop
