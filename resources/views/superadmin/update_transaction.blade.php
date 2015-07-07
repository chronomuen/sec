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
<div class="panel">
	<table class="table table-list-search">
		<tbody>
			<tr>
				<td>
					<p>
						<b>Transaction Type:</b> Reserve Company Name
					</p>
					<p>
						<b>Customer Name:</b> Hershel Layton
					</p>
					<p id="current_processor">
						<b>Processor:</b> Jason Grace
					</p>
					<p>
						<b>Date Submitted:</b> 01/02/15
					</p>
					<p>
						<b>Status:</b> In-process
					</p>
					<p>
						<b>Remarks:</b> Validated document
					</p>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<div class="panel">
	<table class="table table-list-search">
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
			<tr>
				<td>00001</td>
				<td>new</td>
				<td>Validated</td>
				<td>Percy Jackson</td>
				<td id="1">01/01/15</td>
				<td>01/03/15</td>
				<td>Annabeth Chase</td>
			</tr>
			<tr>
				<td>00001</td>
				<td>in-process</td>
				<td>Validated</td>
				<td>Annabeth Chase</td>
				<td id="1">01/03/15</td>
				<td>01/03/15</td>
				<td>Piper McLean</td>
			</tr>
			<tr>
				<td>00001</td>
				<td>in-process</td>
				<td>Validated</td>
				<td>Piper McLean</td>
				<td>01/03/15</td>
				<td>01/04/15</td>
				<td>Jason Grace</td>
			</tr>
			<tr id="tr" style="display:none">
				<td >00001</td>
				<td >in-process</td>
				<td >Validate</td>
				<td >Jason Grace</td>
				<td >01/03/15</td>
				<td >01/04/15</td>
				<td >-</td>
			</tr>
		</tbody>
	</table>
</div>

<div class="panel">
	<table class="table table-list-search">
		<tbody>
			<tr>
				<td>
					<form>
						{!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
						<br>
						{!! Form::radio('status', 'new', false, ['id' => 'button']) !!} New
						<br>
						{!! Form::radio('status', 'in-process', false, ['id' => 'button']) !!} In-process
						<br>
						{!! Form::radio('status', 'completed', false, ['id' => 'button']) !!} Completed
						<br><br>
					</form>	
					{!! Form::label('data', 'Remarks', ['class' => 'control-label']) !!}
					<br>
					{!! Form::textarea('data', null, ['id' => 'area3', 'rows' => 10, 'cols' => 80]) !!}
					<br><br>
					{!! Form::submit('Submit', ['id' => 'submit', 'class' => 'btn btn-primary btn-md']) !!}
				</td>
			</tr>
		</tbody>
	</table>

	

</div>



@stop