@extends('default')
<!-- User Sidebar -->
@include('processor/_sidebar')

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
			<input class="form-control" id="system-search" name="q" placeholder="Enter ID">
			<span class="input-group-btn">
				<button type="button" id="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
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
					<th class="col-md-1"><center>Receive Date</center></th>
					<th class="col-md-1"><center>Release Date</center></th>
					<th class="col-md-2"><center>Next Processor</center></th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>00001</td>
						<td>new</td>
						<td>Validated document</td>
						<td>Percy Jackson</td>
						<td>01/01/15</td>
						<td>01/03/15</td>
						<td>Annabeth Chase</td>
					</tr>
					<tr>
						<td>00001</td>
						<td>in-process</td>
						<td>Evaluated document</td>
						<td>Annabeth Chase</td>
						<td>01/03/15</td>
						<td>01/03/15</td>
						<td>Piper McLean</td>
					</tr>
					<tr>
						<td>00001</td>
						<td>in-process</td>
						<td>Encoded document</td>
						<td>Piper McLean</td>
						<td>01/03/15</td>
						<td>01/04/15</td>
						<td>Jason Grace</td>
					</tr>
					<tr>
						<td>00001</td>
						<td>completed</td>
						<td>Approved document</td>
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
@stop
