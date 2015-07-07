@extends('default')
<!-- User Sidebar -->
@include('superadmin/_sidebar')

@section('header')

Transaction List

@stop

@section('javascript')
<script src="/js/department.js" type="text/javascript"></script>
<script src="/js/match.js" type="text/javascript"></script>
@stop

@section('content')

<div align="center">
	<h3 style="center">Search Transaction</h3>
	<form action="#" method="get" style="width: 300px">
		<div class="input-group">
			<input class="form-control" id="system-search" name="q" placeholder="Search for">
			<span class="input-group-btn">
				<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
			</span>
		</div>
	</form>
</div>


<br>
<div id="transactions" class="container">
	<div class="row">
		<div class="panel" style="width:1000px">
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
						<td>01/01/15</td>
						<td>01/03/15</td>
						<td>Annabeth Chase</td>
					</tr>
					<tr>
						<td>00001</td>
						<td>in-process</td>
						<td>Validated</td>
						<td>Annabeth Chase</td>
						<td>01/03/15</td>
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
					<tr>
						<td>00001</td>
						<td>completed</td>
						<td>Validated</td>
						<td>Jason Grace</td>
						<td>01/04/15</td>
						<td>01/05/15</td>
						<td>-</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Modal -->
<div id="transactionModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">
					Process Transaction
					<b><p id="transaction_title"></p></b>
				</h4>
      </div>
      <div class="modal-body">
				<label>Send transaction to: </label>
        <div class="form-group">
					<select id="select" class="form-control">
						<option disabled selected> -- select department -- </option>
						<option>department1</option>
						<option>department2</option>
						<option>department3</option>
						<option>department4</option>
						<option>department5</option>
					</select>
				</div>
				<p>
				Proceed to
				<b>
				<class id="department">

				</class>
				</b>
				at room something something database.
				</p>
      </div>
      <div class="modal-footer">
				{!! Form::open(array('url' => '/transaction/process')) !!}
				  {!! Form::hidden('transactionID', 'value', array('id' => 'transaction_id')) !!}
					{!! Form::hidden('deptName', 'value', array('id' => 'deptName')) !!}
				{!! Form::submit('Submit', ['class' => 'btn btn-default']) !!}

        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				{!! Form::close() !!}
      </div>
    </div>

  </div>
</div>






@stop
