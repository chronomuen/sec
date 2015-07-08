@extends('default')
<!-- User Sidebar -->
@include('processor/_sidebar')

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
              {!! Form::open(array('action' => 'ProcessorController@store_transaction')) !!}
              {!! View::make('forms/_new_transaction', array('transactionID' => $transactionID, 'processorName' => 'Julian Felipe'))  !!}
              <div class="row" >
                <br/>
                {!! Form::submit('Create Transaction', ['class' => 'btn btn-primary', 'name' => 'create']) !!}
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
<script src="/js/transaction.js" type="text/javascript"></script>
@stop
