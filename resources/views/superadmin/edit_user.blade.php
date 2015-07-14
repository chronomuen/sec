@extends('default')
<!-- User Sidebar -->
@include('superadmin/_sidebar')

@section('header')
Edit User
@stop

@section('javascript')
<script src="/js/user.js" type="text/javascript"></script>
@stop

@section('content')
<div style="padding-right:20px; padding-left:20px">
    <div class="row">
        <div class="panel">
        <div class="panel-body">

            <!-- missing input fields -->
            @include('alerts.errors')

            <!-- success -->
            @include('alerts.sessions')

          <div class="col-md-6">
            <div class="form-group">
              {!! Form::model($user, ['method' => 'PATCH', 'route' =>  ['user.update', $user->id] ])
              !!}
              {!! View::make('forms/_edit_user', array('depts' => $depts))->render() !!}
              <div class="row" >
                <br/>
                {!! Form::submit('Edit User', ['class' => 'btn btn-primary']) !!}
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
