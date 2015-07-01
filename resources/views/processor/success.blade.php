@extends('default')
<!-- User Sidebar -->
@include('processor/_sidebar')

@section('header')
Transaction Successfully Created
@stop

@section('content')
  <div class="row">
    <div class="col-lg-7">
      <div class="jumbotron_admin">
        <div class="over container body-content">
          @include('forms/_created_transaction')
        </div>
      </div>
    </div>
  </div>
@stop
