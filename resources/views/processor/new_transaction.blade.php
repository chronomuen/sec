@extends('default')
<!-- User Sidebar -->
{!! View::make('processor/_sidebar', array('authuser' => $authuser))->render() !!}

@section('header')
Create New Transaction
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

          <div class="col-lg-6">
            <div class="form-group">
				{!! Form::open([
                    'route' => 'transaction.store'
                ]) !!}
				{!! csrf_field() !!}
              {!! View::make('forms/_new_transaction', array('transactionID' => $transactionID, 'processorName' => $authuser))->render()  !!}
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
