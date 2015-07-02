@extends('default')
<!-- User Sidebar -->
@include('admin/_sidebar')

@section('header')
<div>
	<div style="float: left">Transaction List</div>

	 <div style="padding-left:710px">
		<form action="#" method="get">
			<div class="input-group">
				<input class="form-control" id="system-search" name="q" placeholder="Search for">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
				</span>
			</div>
		</form>
	</div>
</div>
@stop

@section('javascript')
<script src="/js/department.js" type="text/javascript"></script>
<script src="/js/match.js" type="text/javascript"></script>
@stop

@section('content')
<div id="transactions" class="container">
	<div class="row">
		<div class="panel" style="width:1000px">
			<table class="table table-list-search">
				<tbody>
					<tr>
						<td>
						<a href="#" class="list-group-item" data-toggle="modal" data-target="#transactionModal" data-transaction-id="transactionID1">
							<b>Transaction1</b><br/>
							Transaction ID<br/>
							Customer<br/>
							Transaction Type<br/>
							Transaction Stage
						</a>
						</td>
					</tr>
					<tr>
						<td>
						<a href="#" class="list-group-item " data-toggle="modal" data-target="#transactionModal" data-transaction-id="transactionID2">
							<b>Transaction2</b><br/>
							Transaction ID<br/>
							Customer<br/>
							Transaction Type<br/>
							Transaction Stage
						</a>
						</td>
					</tr>
					<tr>
						<td>
						<a href="#" class="list-group-item " data-toggle="modal" data-target="#transactionModal" data-transaction-id="transactionID3">
							<b>Transaction3</b><br/>
							Transaction ID<br/>
							Customer<br/>
							Transaction Type<br/>
							Transaction Stage
						</a>
						</td>
					</tr>
					<tr>
						<td>
						<a href="#" class="list-group-item " data-toggle="modal" data-target="#transactionModal" data-transaction-id="transactionID4">
							<b>Transaction4</b><br/>
							Transaction ID<br/>
							Customer<br/>
							Transaction Type<br/>
							Transaction Stage
						</a>
						</td>
					</tr>
					<tr>
						<td>
						<a href="#" class="list-group-item " data-toggle="modal" data-target="#transactionModal" data-transaction-id="transactionID5">
							<b>Transaction5</b><br/>
							Transaction ID<br/>
							Customer<br/>
							Transaction Type<br/>
							Transaction Stage
						</a>
						</td>
					</tr>
					<tr>
						<td>
						<a href="#" class="list-group-item " data-toggle="modal" data-target="#transactionModal" data-transaction-id="transactionID6">
							<b>Transaction6</b><br/>
							Transaction ID<br/>
							Customer<br/>
							Transaction Type<br/>
							Transaction Stage
						</a>
						</td>
					</tr>
					<tr>
						<td>
						<a href="#" class="list-group-item " data-toggle="modal" data-target="#transactionModal" data-transaction-id="transactionID7">
							<b>Transaction7</b><br/>
							Transaction ID<br/>
							Customer<br/>
							Transaction Type<br/>
							Transaction Stage
						</a>
						</td>
					</tr>
					<tr>
						<td>
						<a href="#" class="list-group-item " data-toggle="modal" data-target="#transactionModal" data-transaction-id="transactionID8">
							<b>Transaction8</b><br/>
							Transaction ID<br/>
							Customer<br/>
							Transaction Type<br/>
							Transaction Stage
						</a>
						</td>
					</tr>
					<tr>
						<td>
						<a href="#" class="list-group-item " data-toggle="modal" data-target="#transactionModal" data-transaction-id="transactionID9">
							<b>Transaction9</b><br/>
							Transaction ID<br/>
							Customer<br/>
							Transaction Type<br/>
							Transaction Stage
						</a>
						</td>
					</tr>
					<tr>
						<td>
						<a href="#" class="list-group-item " data-toggle="modal" data-transaction-id="transactionID10" data-target="#transactionModal">
							<b>Transaction10</b><br/>
							Transaction ID<br/>
							Customer<br/>
							Transaction Type<br/>
							Transaction Stage
						</a>
						</td>
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
