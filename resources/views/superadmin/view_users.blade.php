@extends('default')
<!-- User Sidebar -->
@include('superadmin/_sidebar')

@section('header')
<div>
	<div style="float: left">User List</div>

	 <div style="padding-left:710px">
		<form action="#" method="get">
			<div class="input-group">
				<input class="form-control" id="system-search" name="q" placeholder="Search for">
				<span class="input-group-btn">
					<button type="submit" data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
				</span>
			</div>
		</form>
	</div>
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
						<th class="col-md-2"><center>Department</center></th>
						<th class="col-md-2"><center>Job Title</center></th>
						<th class="col-md-2"><center>Admin</center></th>
						<th><center>Set Admin</center></th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>31256</td>
						<td>Jackson, Percy</td>
						<td>Half-Blood</td>
						<td>God</td>
						<td id="percy">Admin</td>
						<td><center>
							<button type="submit" data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default" onclick="changeAdmin('percy')"><i class="fa fa-gavel"></i></button>
						</center></td>
					</tr>
					<tr>
						<td>21563</td>
						<td>Chase, Annabeth</td>
						<td>Half-Blood</td>
						<td>Olympian</td>
						<td id="annabeth">Non-admin</td>
						<td><center>
							<button type="submit" data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default" onclick="changeAdmin('annabeth')"><i class="fa fa-gavel"></i></button>
						</center></td>
					</tr>
					<tr>
						<td>08352</td>
						<td>Castellan, Luke</td>
						<td>Half-Blood</td>
						<td>Leader</td>
						<td id="luke">Non-admin</td>
						<td><center>
							<button type="submit" data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default" onclick="changeAdmin('luke')"><i class="fa fa-gavel"></i></button>
						</center></td>
					</tr>

					<tr>
						<td>12672</td>
						<td>Grace, Jason</td>
						<td>Jupiter</td>
						<td>Praetor</td>
						<td id="jason">Admin</td>
						<td><center>
							<button type="submit" data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default" onclick="changeAdmin('jason')"><i class="fa fa-gavel"></i></button>
						</center></td>
					</tr>
					<tr>
						<td>57126</td>
						<td>Ramírez-Arellano, Reyna</td>
						<td>Jupiter</td>
						<td>Praetor</td>
						<td id="reyna">Non-admin</td>
						<td><center>
							<button type="submit" data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default" onclick="changeAdmin('reyna')"><i class="fa fa-gavel"></i></button>
						</center></td>
					</tr>
					<tr>
						<td>86734</td>
						<td>Zhang, Frank</td>
						<td>Jupiter</td>
						<td>Centurion</td>
						<td id="frank">Non-admin</td>
						<td><center>
							<button type="submit" data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default" onclick="changeAdmin('frank')"><i class="fa fa-gavel"></i></button>
						</center></td>
					</tr>

					<tr>
						<td>02351</td>
						<td>Valdez, Leo</td>
						<td>Festus</td>
						<td>Captain</td>
						<td id="leo">Admin</td>
						<td><center>
							<button type="submit" data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default" onclick="changeAdmin('leo')"><i class="fa fa-gavel"></i></button>
						</center></td>
					</tr>
					<tr>
						<td>02157</td>
						<td>McLean, Piper</td>
						<td>Festus</td>
						<td>Charm</td>
						<td id="piper">Non-admin</td>
						<td><center>
							<button type="submit" data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default" onclick="changeAdmin('piper')"><i class="fa fa-gavel"></i></button>
						</center></td>
					</tr>

					<tr>
						<td>18256</td>
						<td>Di Angelo, Nico</td>
						<td>Underworld</td>
						<td>Death</td>
						<td id="nico">Admin</td>
						<td><center>
							<button type="submit" data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default" onclick="changeAdmin('nico')"><i class="fa fa-gavel"></i></button>
						</center></td>
					</tr>
					<tr>
						<td>54312</td>
						<td>Levesque, Hazel</td>
						<td>Underworld</td>
						<td>Keeper</td>
						<td id="hazel">Non-admin</td>
						<td><center>
							<button type="submit" data-toggle="modal" data-target="#setAdminModal"  class="btn btn-default" onclick="changeAdmin('hazel')"><i class="fa fa-gavel"></i></button>
						</center></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Modal -->
<div id="setAdminModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Set/Remove Admin Privileges</h4>
      </div>
      <div class="modal-body">

			</div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	    </div>
	  </div>

  </div>
</div>






@stop
