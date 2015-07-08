<!-- Form input fields -->

<div class="row">

  <div class="form-group">
    {!! Form::label('transactionID', 'Transaction ID', ['class' => 'control-label']) !!}
    {!! Form::text('transactionID',  $transactionID , array('id' => 'transactionID', 'class' => 'form-control', 'required' => 'required')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('transType', 'Transaction Type', ['class' => 'control-label']) !!}
    {!! Form::text('transType', null, array('id' => 'transType', 'class' => 'form-control', 'required' => 'required')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('cname', 'Client Name', ['class' => 'control-label']) !!}
    {!! Form::text('cname', null, array('id' => 'cname', 'class' => 'form-control', 'required' => 'required')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('pname', 'Processor Name', ['class' => 'control-label']) !!}
    {!! Form::text('pname', 'Juan Cruz', array('id' => 'pname', 'class' => 'form-control', 'required' => 'required', 'disabled' => 'true')) !!}
  </div>

  <div class="form-group">
      {!! Form::label('dateSubmitted', 'Date Submitted', ['class' => 'control-label']) !!}
      {!! Form::text('dateSubmitted', null, array('id' => 'dateSubmitted', 'class' => 'form-control', 'required' => 'required')) !!}
  </div>

  <div class="form-group">
      {!! Form::label('status', 'Status', ['class' => 'control-label']) !!}<br/>
      {!! Form::radio('status', 'new', ['required' => 'required']) !!} New<br/>
      {!! Form::radio('status', 'inprocess') !!} In Process<br/>
      {!! Form::radio('status', 'completed') !!} Completed<br/>
  </div>

  <div class="form-group">
      {!! Form::label('remarks', 'Remarks', ['class' => 'control-label']) !!}
      {!! Form::textarea('remarks', null, array('id' => 'remarks', 'class' => 'form-control', 'required' => 'required', 'rows' => 10, 'cols' => 80)) !!}
  </div>

  <br/>
  <button type="button" class="btn btn-default" id="transButton">Generate Password</button>

  <div class="form-group">
    {!! Form::label('tpass', 'Transaction Password', ['class' => 'control-label']) !!}<br/>
    {!! Form::text('tpass', null, array('id' => 'tpass', 'class' => 'form-control', 'required' => 'required', 'disabled' => 'true')) !!}
  </div>

</div>



<!-- /Form input fields-->
