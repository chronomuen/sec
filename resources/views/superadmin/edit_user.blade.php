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
                  'route' => 'user.update'
              ]) !!}
              {!! View::make('forms/_edit_user', array('userID' => $userID))  !!}
              <div class="row" >
                <br/>
                {!! Form::submit('Edit User', ['class' => 'btn btn-primary', 'data-toggle' => 'modal', 'data-target' => '#editModal', 'name' => 'edit']) !!}
              </div>

              <!-- Modal -->
              <div id="editModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><b>User</b></h4>
                  </div>
                  <div class="modal-body">
                  Successfully edited user! <br/>
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
