<!-- Form input fields -->

<div class="row">

  <div class="form-group">
    {!! Form::label('cname', 'Customer Name', ['class' => 'control-label']) !!}
    {!! Form::text('customer', null, array('id' => 'cname', 'class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('pname', 'Processor Name', ['class' => 'control-label']) !!}
    {!! Form::text('pname', null, array('id' => 'pname', 'class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('pid', 'Processor ID Number', ['class' => 'control-label']) !!}
    {!! Form::text('pid', null, array('id' => 'pid', 'class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('pdept', 'Processor Department', ['class' => 'control-label']) !!}
    {!! Form::text('pdept', null, array('id' => 'pdept', 'class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('ttype', 'Transaction Type', ['class' => 'control-label']) !!}<br/>
    {!! Form::select('ttype', ['Transaction Type 1', 'Transaction Type 2', 'Transaction Type 3'], array('id' => 'ttype', 'class' => 'form-control')) !!}
  </div>

  <div class="form-group">
    {!! Form::label('tstage', 'Transaction Stage', ['class' => 'control-label']) !!}<br/>
    {!! Form::select('tstage', ['Transaction Stage 1', 'Transaction Stage 2', 'Transaction Stage 3'], array('id' => 'tstage', 'class' => 'form-control')) !!}
  </div>

  <br/>
  <button type="button" class="btn btn-default" id="transButton">Generate Transaction ID</button>

  <div class="form-group">
    {!! Form::label('tid', 'Transaction ID', ['class' => 'control-label']) !!}<br/>
    {!! Form::text('tid', null, array('id' => 'tid', 'class' => 'form-control', 'disabled' => 'true')) !!}
  </div>

</div>



<!-- /Form input fields-->
