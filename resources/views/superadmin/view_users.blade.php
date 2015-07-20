@extends('default')
<!-- User Sidebar -->
{!! View::make('superadmin/_sidebar', array('authuser' => $authuser))->render() !!}

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
@stop

@section('content')
<div id="users" style="padding-right:20px; padding-left:20px">
    <div class="row">
        <div class="panel">
			<table class="table table-list-search">
				<thead>
					<tr>
						<th class="col-md-1"><center>ID</center></th>
						<th class="col-md-2"><center>Name</center></th>
						<th class="col-md-4"><center>Department</center></th>
						<th class="col-md-2"><center>Job Title</center></th>
						<th class="col-md-1"><center>Status</center></th>
						<thclass="col-md-2"><center></center></th>
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
							{!! Form::model($user, ['method' => 'PATCH', 'route' =>  ['user.update', $user->user_id] ])!!}
								<a href="{{ route('superadmin.edit', $user->user_id) }}" class="btn btn-default" name="edit"><i class="glyphicon glyphicon-edit"></i></a>

								@if($user->user_type != "Superadmin")
									@if($user->status == "Active")
										{!! Form::hidden('status', 'Inactive', array('id' => 'status')) !!}
									@else
										{!! Form::hidden('status', 'Active', array('id' => 'status')) !!}
									@endif
									<button type="submit" class="btn btn-default inline" name="deactivate"><i id="icon" class="glyphicon glyphicon-remove"></i></button>
								@endif
							{!! Form::close() !!}
						</center></td>
					</tr>
				    @endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<div id="deactivateModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

	<div class="modal-content">
	  <div class="modal-header alert-info">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Activate/Deactivate User</h4>
	  </div>
	  <div class="modal-body">
		  {{ Session::get('flash_message') }}
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  </div>
	</div>

  </div>
</div>
@stop

@section('javascript')
	<script src="/js/department.js" type="text/javascript"></script>
	<script src="/js/match.js" type="text/javascript"></script>

	@if (Session::has('flash_message'))
	      <script>
	        $(function() {
	            $('#deactivateModal').modal('show');
	          });
	      </script>
    @endif
@stop
