@extends('default')
<!-- User Sidebar -->
@include('superadmin/_sidebar')

@section('header')
Create New User
@stop

@section('javascript')
<script src="/js/superadmin.js" type="text/javascript"></script>
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
                <a href="superadmin_success"><button type="submit" class="btn btn-default"> Create User </button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop
