@extends('default')
<!-- User Sidebar -->
@include('superadmin/_sidebar')

@section('header')
<div>
	<div style="float: left">User List</div>
	<form action="#" method="get" style="padding-left:710px">
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
<div id="users" class="container">
	<div class="row">
		<div class="panel" style="width:1000px">
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
					<tr>
						<td>31256</td>
						<td>Jackson, Percy</td>
						<td>Half-Blood</td>
						<td>God</td>
						<td>Active</td>
						<td><center>
							<button type="submit"  data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default setAdminButton" ><i class="glyphicon glyphicon-edit"></i></button>
							<button type="submit"  data-toggle="modal" data-target="#deactivateModal"  class="btn btn-default deactivateButton" ><i id="icon" class="glyphicon glyphicon-remove"></i></button>
						</center></td>
					</tr>
					<tr>
						<td>21563</td>
						<td>Chase, Annabeth</td>
						<td>Half-Blood</td>
						<td>Olympian</td>
						<td>Active</td>
						<td><center>
							<button type="submit"  data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default setAdminButton" ><i class="glyphicon glyphicon-edit"></i></button>
							<button type="submit"  data-toggle="modal" data-target="#deactivateModal"  class="btn btn-default deactivateButton" ><i id="icon" class="glyphicon glyphicon-remove"></i></button>
							
						</center></td>
					</tr>
					<tr>
						<td>08352</td>
						<td>Castellan, Luke</td>
						<td>Half-Blood</td>
						<td>Leader</td>
						<td>Active</td>
						<td><center>
							<button type="submit"  data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default setAdminButton" ><i class="glyphicon glyphicon-edit"></i></button>
							<button type="submit"  data-toggle="modal" data-target="#deactivateModal"  class="btn btn-default deactivateButton" ><i id="icon" class="glyphicon glyphicon-remove"></i></button>
						</center></td>
					</tr>

					<tr>
						<td>12672</td>
						<td>Grace, Jason</td>
						<td>Jupiter</td>
						<td>Praetor</td>
						<td>Active</td>
						<td><center>
							<button type="submit"  data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default setAdminButton" ><i class="glyphicon glyphicon-edit"></i></button>
							<button type="submit"  data-toggle="modal" data-target="#deactivateModal"  class="btn btn-default deactivateButton" ><i id="icon" class="glyphicon glyphicon-remove"></i></button>
						</center></td>
					</tr>
					<tr>
						<td>57126</td>
						<td>Ramírez-Arellano, Reyna</td>
						<td>Jupiter</td>
						<td>Praetor</td>
						<td>Inactive</td>
						<td><center>
							<button type="submit"  data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default setAdminButton" ><i class="glyphicon glyphicon-edit"></i></button>
							<button type="submit"  data-toggle="modal" data-target="#deactivateModal"  class="btn btn-default deactivateButton" ><i id="icon" class="glyphicon glyphicon-remove"></i></button>
						</center></td>
					</tr>
					<tr>
						<td>86734</td>
						<td>Zhang, Frank</td>
						<td>Jupiter</td>
						<td>Centurion</td>
						<td>Inactive</td>
						<td><center>
							<button type="submit"  data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default setAdminButton" ><i class="glyphicon glyphicon-edit"></i></button>
							<button type="submit"  data-toggle="modal" data-target="#deactivateModal"  class="btn btn-default deactivateButton" ><i id="icon" class="glyphicon glyphicon-remove"></i></button>
						</center></td>
					</tr>

					<tr>
						<td>02351</td>
						<td>Valdez, Leo</td>
						<td>Festus</td>
						<td>Captain</td>
						<td>Inactive</td>
						<td><center>
							<button type="submit"  data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default setAdminButton" ><i class="glyphicon glyphicon-edit"></i></button>
							<button type="submit"  data-toggle="modal" data-target="#deactivateModal"  class="btn btn-default deactivateButton" ><i id="icon" class="glyphicon glyphicon-remove"></i></button>
						</center></td>
					</tr>
					<tr>
						<td>02157</td>
						<td>McLean, Piper</td>
						<td>Festus</td>
						<td>Charm</td>
						<td>Inactive</td>
						<td><center>
							<button type="submit"  data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default setAdminButton" ><i class="glyphicon glyphicon-edit"></i></button>
							<button type="submit"  data-toggle="modal" data-target="#deactivateModal"  class="btn btn-default deactivateButton" ><i id="icon" class="glyphicon glyphicon-remove"></i></button>
						</center></td>
					</tr>

					<tr>
						<td>18256</td>
						<td>Di Angelo, Nico</td>
						<td>Underworld</td>
						<td>Death</td>
						<td>Inactive</td>
						<td><center>
							<button type="submit"  data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default setAdminButton" ><i class="glyphicon glyphicon-edit"></i></button>
							<button type="submit"  data-toggle="modal" data-target="#deactivateModal"  class="btn btn-default deactivateButton" ><i id="icon" class="glyphicon glyphicon-remove"></i></button>
						</center></td>
					</tr>
					<tr>
						<td>54312</td>
						<td>Levesque, Hazel</td>
						<td>Underworld</td>
						<td>Inactive</td>
						<td>Keeper</td>
						<td><center>
							<button type="submit"  data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default setAdminButton" ><i class="glyphicon glyphicon-edit"></i></button>
							<button type="submit"  data-toggle="modal" data-target="#deactivateModal"  class="btn btn-default deactivateButton" ><i id="icon" class="glyphicon glyphicon-remove"></i></button>
						</center></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

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
				{!! Form::submit('Submit', ['class' => 'btn btn-default', 'id' => 'submitDeactivate', 'style' => 'display:none;']) !!}
				{!! Form::close() !!}

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	    </div>
	  </div>

  </div>
</div>






@stop
