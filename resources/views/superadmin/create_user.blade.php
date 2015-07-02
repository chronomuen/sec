@extends('default')
<!-- User Sidebar -->
@include('superadmin/_sidebar')

@section('header')
Create New User
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-11">
      <div class="panel">
        <div class="panel-body">
          <div class="col-lg-6">
            <div class="form-group">
              
              @include('forms/_new_user')
              <div class="row" >
                <br/>
                {!! Form::submit('Create User', ['class' => 'btn btn-default', 'data-toggle' => 'modal', 'data-target' => '#openModal']) !!}
				<!-- Modal -->
				<div id="openModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">User</h4>
					  </div>
					  <div class="modal-body">
						<p>Successfully created transaction </p>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>

				  </div>
				</div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
