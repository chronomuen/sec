<!-- Form input fields -->
  <div class="row">

    <div class="form-group">
      {!! Form::label('username', 'Username', ['class' => 'control-label']) !!}
      {!! Form::text('username', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
      {!! Form::text('password', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('firstname', 'First Name', ['class' => 'control-label']) !!}
      {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('lastname', 'Lastname', ['class' => 'control-label']) !!}
      {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
      {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('dept', 'Department', ['class' => 'control-label']) !!}<br/>
      {!! Form::select('dept', ['Dept 1', 'Dept 2', 'Dept 3'], null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('job', 'Job Title', ['class' => 'control-label']) !!}
      {!! Form::text('job', null, ['class' => 'form-control']) !!}
    </div>

  </div>



<!-- /Form input fields-->
