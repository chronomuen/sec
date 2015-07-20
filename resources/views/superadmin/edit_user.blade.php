@extends('default')
<!-- User Sidebar -->
{!! View::make('superadmin/_sidebar', array('authuser' => $authuser))->render() !!}

@section('header')
Edit User
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
              {!! Form::model($user, ['method' => 'PATCH', 'route' =>  ['user.update', $user->user_id] ])
              !!}
              {!! View::make('forms/_edit_user', array('depts' => $depts))->render() !!}
              <div class="row" >
                <br/>
                {!! Form::submit('Edit User', ['class' => 'btn btn-primary', 'name' => 'edit']) !!}
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
