@extends('default')
<!-- User Sidebar -->
@include('superadmin/_sidebar')

@section('header')
  @if(Session::has('form_type'))
    @if(Session::get('form_type') == "transaction")
      Successfully Created Transaction
    @elseif(Session::get('form_type') == "user")
      Successfully Created User
    @endif
  @endif
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-11">
      <div class="panel">
        <div class="panel-body">
          <div class="col-lg-6">
            @if(Session::has('form_type'))
              @if(Session::get('form_type') == "transaction")
                @include('forms/_created_transaction')
              @elseif(Session::get('form_type') == "user")
                @include('forms/_created_user')
              @endif
            @endif

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
