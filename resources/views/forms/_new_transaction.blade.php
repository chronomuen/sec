<!-- Form input fields -->

<div class="row">

  <div class="form-group">
    {!! Form::label('transaction_id', 'Transaction ID', ['class' => 'control-label']) !!}
    {!! Form::text('transaction_id',  $transactionID , array('id' => 'transaction_id', 'class' => 'form-control', 'required' => 'required')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('type', 'Transaction Type', ['class' => 'control-label']) !!}
    {!! Form::text('type', null, array('id' => 'type', 'class' => 'form-control', 'required' => 'required')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('client', 'Client Name', ['class' => 'control-label']) !!}
    {!! Form::text('client', null, array('id' => 'client', 'class' => 'form-control', 'required' => 'required')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('processor_name', 'Processor Name', ['class' => 'control-label']) !!}
    {!! Form::text('processor_name', $processorName->firstname.' '.$processorName->lastname, array('id' => 'processor_name', 'class' => 'form-control', 'required' => 'required', 'disabled' => 'true')) !!}
  </div>

  <div class="form-group">
      {!! Form::label('date_submitted', 'Date Submitted', ['class' => 'control-label']) !!}
      {!! Form::text('date_submitted', null, array('id' => 'date_submitted', 'class' => 'form-control', 'required' => 'required')) !!}
  </div>

  <div class="form-group">
      {!! Form::label('remarks', 'Remarks', ['class' => 'control-label']) !!}
      {!! Form::textarea('remarks', null, array('id' => 'remarks', 'class' => 'form-control', 'required' => 'required', 'rows' => 10, 'cols' => 80)) !!}
  </div>

  <br/>
  <button type="button" class="btn btn-default" id="transButton">Generate Password</button>

  <div class="form-group">
    {!! Form::label('password', 'Transaction Password', ['class' => 'control-label']) !!}<br/>
    {!! Form::text('password', null, array('id' => 'password', 'class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly')) !!}
  </div>

</div>



<!-- /Form input fields-->
