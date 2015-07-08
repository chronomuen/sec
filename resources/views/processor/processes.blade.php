@extends('default')
<!-- User Sidebar -->
@include('processor/_sidebar')

@section('header')
Search Transaction
@stop

@section('content')
<div style="padding-right:20px; padding-left:20px">
    <div class="row">
        <div class="panel">
            <div class="panel-body">
                <div class="col-md-12" align="center">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <h2 >Enter Transaction ID</h2>
                        {!! Form::open(array('action' => 'ProcessorController@process')) !!}
                        {!! Form::text('transactionID', null, array('id' => 'transactionID', 'class' => 'form-control', 'required' => 'required')) !!}<br/>
                        <div class="row">
                            {!! Form::submit('Create Transaction', ['class' => 'btn btn-success btn-block', 'name' => 'create']) !!}
                            {!! Form::submit('Update Transaction', ['class' => 'btn btn-primary btn-block', 'name' => 'update']) !!}
                            {!! Form::submit('Out', ['class' => 'btn btn-warning btn-block', 'name' => 'out']) !!}
                        </div>
                        {!! Form::close() !!}
                        <br/><br/>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
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
                @if (Session::has('message'))
                    @if (Session::get('message') === 'success create')
                        Successfully created transaction!
                    @elseif (Session::get('message') === 'success update')
                        Successfully updated transaction!
                    @elseif (Session::get('message') === 'success out')
                        Successfully logged out transaction!
                    @endif
                @endif

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

          </div>
        </div>

    </div>
</div>
@stop

@section('javascript')
<script src="/js/transaction.js" type="text/javascript"></script>

@if (Session::has('message'))
    @if (Session::get('message') === 'error')
    <script>
      $(function() {
          alert("Error!");
        });
    </script>
    @else
    <script>
      $(function() {
          $('#transactionModal').modal('show');
        });
    </script>
    @endif
@endif

@stop
