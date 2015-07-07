<!-- Form input fields -->

<div class="row">

  <div class="form-group">
    {!! Form::label('transactionID', 'Transaction ID', ['class' => 'control-label']) !!}
    {!! Form::text('transactionID', null, array('id' => 'transactionID', 'class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('transType', 'Transaction Type', ['class' => 'control-label']) !!}
    {!! Form::text('transType', null, array('id' => 'transType', 'class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('cname', 'Client Name', ['class' => 'control-label']) !!}
    {!! Form::text('cname', null, array('id' => 'cname', 'class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('pname', 'Processor Name', ['class' => 'control-label']) !!}
    {!! Form::text('pname', 'Juan dela Cruz', array('id' => 'pname', 'class' => 'form-control', 'value' => 'Juan dela Cruz', 'disabled' => 'true')) !!}
  </div>

  <div class="form-group">
      {!! Form::label('dateSubmitted', 'Date Submitted', ['class' => 'control-label']) !!}
      {!! Form::text('dateSubmitted', null, array('id' => 'dateSubmitted', 'class' => 'form-control')) !!}
  </div>

  <div class="form-group">
      {!! Form::label('status', 'Status', ['class' => 'control-label']) !!}<br/>
      {!! Form::radio('status', 'new') !!} New<br/>
      {!! Form::radio('status', 'inprocess') !!} In Process<br/>
      {!! Form::radio('status', 'completed') !!} Completed<br/>
  </div>

  <br/>
  <button type="button" class="btn btn-default" id="transButton">Generate Password</button>

  <div class="form-group">
    {!! Form::label('tpass', 'Transaction Password', ['class' => 'control-label']) !!}<br/>
    {!! Form::text('tpass', null, array('id' => 'tpass', 'class' => 'form-control', 'disabled' => 'true')) !!}
  </div>

</div>



<!-- /Form input fields-->
