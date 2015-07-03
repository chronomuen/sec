@extends('default')
<!-- User Sidebar -->
@include('superadmin/_sidebar')

@section('header')
Create New User
@stop

@section('content')
<div class="container">
  <div class="row">
      <div class="panel" style="width:1000px">
        <div class="panel-body">
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::open([
                  'route' => 'user.store'
              ]) !!}
              @include('forms/_new_user')
              <div class="row" >
                <br/>
                {!! Form::submit('Create User', ['class' => 'btn btn-primary', 'data-toggle' => 'modal', 'data-target' => '#userModal']) !!}
              </div>

              <!-- Modal -->
              <div id="userModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><b>User</b></h4>
                  </div>
                  <div class="modal-body">
                  Successfully created user with details:<br/>
                  <p id="username_info"><b>Username: </b></p>
                  <p id="pass_info"><b>Password: </b></p>
                  <p id="id_info"><b>ID: </b></p>
                  <p id="fname_info"><b>First Name: </b></p>
                  <p id="lname_info"><b>Last Name: </b></p>
                  <p id="email_info"><b>Email: </b></p>
                  <p id="dept_info"><b>Department: </b></p>
                  <p id="job_info"><b>Job Title: </b></p>
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
@stop

@section('javascript')
<script src="/js/user.js" type="text/javascript"></script>
@stop
