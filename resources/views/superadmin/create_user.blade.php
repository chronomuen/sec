@extends('default')
<!-- User Sidebar -->
@include('superadmin/_sidebar')

@section('header')
Create New User
@stop

@section('content')
<div style="padding-right:20px; padding-left:20px">
    <div class="row">
        <div class="panel">
        <div class="panel-body">

            <!-- missing input fields -->
            @include('alerts.errors');

            <!-- success -->
            @include('alerts.sessions');

          <div class="col-md-6">
            <div class="form-group">
              {!! Form::open([
                  'route' => 'user.store'
              ]) !!}
              {!! csrf_field() !!}
              {!! View::make('forms/_new_user', array('depts' => $depts))->render() !!}
              <div class="row" >
                <br/>
                {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
