@extends('default')
<!-- User Sidebar -->
@include('superadmin/_sidebar')

@section('header')
<div class="row" style="padding-right:20px; padding-left:20px">
	User List
	<form action="#" method="get" style="float:right">
		<div class="input-group" style="width:290px">
			<input class="form-control" id="system-search" name="q" placeholder="Search for">
			<span class="input-group-btn">
				<button type="submit" class="btn btn-default" ><i class="glyphicon glyphicon-search"></i></button>
			</span>
		</div>
	</form>
</div>
@stop

@section('javascript')
<script src="/js/department.js" type="text/javascript"></script>
<script src="/js/match.js" type="text/javascript"></script>
<script src="/js/user.js" type="text/javascript"></script>
@stop

@section('content')
<div id="users" style="padding-right:20px; padding-left:20px">
    <div class="row">
        <div class="panel">
			<table class="table table-list-search">
				<thead>
					<tr>
						<th class="col-md-1"><center>ID</center></th>
						<th class="col-md-3"><center>Name</center></th>
						<th class="col-md-2.5"><center>Department</center></th>
						<th class="col-md-2"><center>Job Title</center></th>
						<th class="col-md-1"><center>Status</center></th>
						<th><center></center></th>
					</tr>
				</thead>

				<tbody>
					@foreach ($users as $user)
					<tr>
						<td>{!! $user->user_id !!}</td>
						<td>{!! $user->lastname !!}, {!! $user->firstname !!}</td>
						<td>{!! $user->department()->first()->name !!}</td>
						<td>{!! $user->job_title !!}</td>
						<td>{!! $user->status !!}</td>
						<td><center>
							<button type="submit" class="btn btn-default editUserButton"><i class="glyphicon glyphicon-edit"></i></button>
							<button type="submit"  data-toggle="modal" data-target="#deactivateModal"  class="btn btn-default deactivateButton" ><i id="icon" class="glyphicon glyphicon-remove"></i></button>
						</center></td>
					</tr>
				    @endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Hidden form for edit user -->
{!! Form::open(array('action' => 'SuperadminController@edit_user')) !!}
{!! Form::hidden('edit_userID', 'value', array('id' => 'edit_userID')) !!}
{!! Form::submit('Submit', ['class' => 'btn btn-default', 'id' => 'submitEdit', 'style' => 'display:none;']) !!}
{!! Form::close() !!}
<!-- end of edit form -->

<!-- Modal -->
<div id="deactivateModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">User Status</h4>
      </div>
      <div class="modal-body">
				<p id="modalMessage"></p>
				<!--name is now an active/inactive-->
			</div>
	    <div class="modal-footer">
				{!! Form::open([
						'route' => 'user.update', 'method' => 'put'
				]) !!}
				  {!! Form::hidden('userID', 'value', array('id' => 'userID')) !!}
					{!! Form::hidden('option', 'value', array('id' => 'option')) !!}
				{!! Form::submit('Submit', ['class' => 'btn btn-default', 'id' => 'submitDeactivate', 'name' => 'deactivate', 'style' => 'display:none;']) !!}
				{!! Form::close() !!}

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	    </div>
	  </div>

  </div>
</div>






@stop
