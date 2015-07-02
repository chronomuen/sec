<!-- Form input fields -->

<div class="row">

  <div class="form-group">
    {!! Form::label('customer', 'Customer Name', ['class' => 'control-label']) !!}
    {!! Form::text('customer', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('pname', 'Processor Name', ['class' => 'control-label']) !!}
    {!! Form::text('pname', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('pid', 'Processor ID Number', ['class' => 'control-label']) !!}
    {!! Form::text('pid', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('pdept', 'Processor Department', ['class' => 'control-label']) !!}
    {!! Form::text('pdept', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('ttype', 'Transaction Type', ['class' => 'control-label']) !!}<br/>
    {!! Form::select('ttype', ['Transaction Type 1', 'Transaction Type 2', 'Transaction Type 3'], ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('tstage', 'Transaction Stage', ['class' => 'control-label']) !!}<br/>
    {!! Form::select('tstage', ['Transaction Stage 1', 'Transaction Stage 2', 'Transaction Stage 3'], ['class' => 'form-control']) !!}
  </div>


</div>



<!-- /Form input fields-->
