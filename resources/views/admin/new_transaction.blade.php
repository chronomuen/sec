@extends('default')
<!-- User Sidebar -->
@include('admin/_sidebar')

@section('header')
Create New Transaction
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-11">
      <div class="panel">
        <div class="panel-body">
          <div class="col-lg-6">
            <div class="form-group">
              {!! Form::open([
                  'route' => 'transaction.store'
              ]) !!}
              @include('forms/_new_transaction')
              <div class="row" >
                <br/>
                {!! Form::submit('Create Transaction', ['class' => 'btn btn-default']) !!}

                {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
