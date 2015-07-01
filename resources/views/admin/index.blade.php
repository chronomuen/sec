@extends('default')
<!-- User Sidebar -->
@include('admin/_sidebar')

@section('header')
<div>
	<div style="float: left">Transaction List</div>

	 <div class="input-group" style="padding-left:550px">
	 <div></div>
		<input class="form-control" id="system-search" name="q" placeholder="Search for" required>
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
		</span>
	</div>
</div>
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
