@extends('default')
<!-- User Sidebar -->
@include('superadmin/_sidebar')

@section('header')
Create New Transaction
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="panel" style="width:1000px">
		<div class="panel-body">
          <div class="col-md-6">
              {!! Form::open([
                  'route' => 'transaction.store'
              ]) !!}
              @include('forms/_new_transaction')
              <div class="row" >
                <br/>
                {!! Form::submit('Create Transaction', ['class' => 'btn btn-primary']) !!}
              </div>

              <!-- Modal -->
              <div id="transactionModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><b>Transaction</b></h4>
                  </div>
                  <div class="modal-body">
                  Successfully created transaction with transaction ID:
                  <h4><b><p id="id_info"></p></b></h4>

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
@stop

@section('javascript')
<script src="/js/transaction.js" type="text/javascript"></script>
@stop
