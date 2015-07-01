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
<div class="row">
  <div class="col-lg-12">
        <div class="form-group">
          @include('forms/_new_user')
          <div class="row" >
            <br/>
            <a href="superadmin_success"><button type="submit" class="btn btn-default"> Create User </button></a>
          </div>
        </div>
      
  </div>
</div>

@stop
