<!-- Form input fields -->
  <div class="row">

    <div class="form-group">
        {!! Form::label('userID', 'User ID', ['class' => 'control-label']) !!}
        {!! Form::text('userID', $userID , array('id' => 'userID', 'class' => 'form-control', 'disabled' => 'true')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('username', 'Username', ['class' => 'control-label']) !!}
      {!! Form::text('username', null, array('id' => 'username', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
      {!! Form::text('password', null, array('id' => 'password', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('firstname', 'First Name', ['class' => 'control-label']) !!}
      {!! Form::text('firstname', null, array('id' => 'fname', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('lastname', 'Lastname', ['class' => 'control-label']) !!}
      {!! Form::text('lastname', null, array('id' => 'lname', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
      {!! Form::text('email', null, array('id' => 'email', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('dept', 'Department', ['class' => 'control-label']) !!}<br/>
      {!! Form::select('dept', ['Markets and Securities Regulation Department', 'Corporate Governance and Finance Department', 'Enforcement and Investor Protection Department', 'Company Registration and Monitoring Department', ' Information and Communications Technology Department', 'Human Resource and Administration Department', 'Economic Research and Training Department', ' Financial Management Department'], null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('job', 'Job Title', ['class' => 'control-label']) !!}
      {!! Form::text('job', null, array('id' => 'job', 'class' => 'form-control')) !!}
    </div>

  </div>



<!-- /Form input fields-->
