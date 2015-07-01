@extends('default')

@section('header')
<div style="display:inline-block">
	<div style="float:left">Transaction List</div>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div id="custom-search-input">
					<div class="input-group col-md-14">
						<input type="text" class="form-control input-lg" placeholder="Search" />
						<span class="input-group-btn">
							<button class="btn btn-info btn-lg" type="button">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('user_info')
<!-- user info -->
<p>First Lastname</p>
<!-- job title -->
<a href="#"><i class="fa fa-circle text-success"></i> Processor</a>
@stop

@section('sidebar')
  <li class="active">
      <a href="processor_index"><i class="fa fa-fw fa-reorder"></i>View Transactions</a>
  </li>
  <li>
      <a href="#"><i class="fa fa-fw fa-plus-square"></i>Create Transaction</a>
  </li>
@stop

@section('javascript')
<script src="/js/department.js" type="text/javascript"></script>
@stop
@section('content')
<div id="transactions" class="panel panel-primary">
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#openModal">Transaction1</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#openModal">Transaction2</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#openModal">Transaction3</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#openModal">Transaction4</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#openModal">Transaction5</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#openModal">Transaction6</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#openModal">Transaction7</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#openModal">Transaction8</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#openModal">Transaction9</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#openModal">Transaction10</a>
</div>

<!-- Modal -->
<div id="openModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>






@stop
