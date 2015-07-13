<!-- Form input fields -->
  <div class="row">

    <div class="form-group">
      {!! Form::label('username', 'Username', ['class' => 'control-label']) !!}
      {!! Form::text('username', null, array('id' => 'username', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
      {!! Form::text('password', null, array('id' => 'password', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('user_id', 'ID', ['class' => 'control-label']) !!}
      {!! Form::text('user_id', null, array('id' => 'user_id', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('firstname', 'First Name', ['class' => 'control-label']) !!}
      {!! Form::text('firstname', null, array('id' => 'firstname', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('lastname', 'Lastname', ['class' => 'control-label']) !!}
      {!! Form::text('lastname', null, array('id' => 'lastname', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
      {!! Form::text('email', null, array('id' => 'email', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('department', 'Department', ['class' => 'control-label']) !!}<br/>
      {!! Form::select('department', ['Markets and Securities Regulation Department', 'Corporate Governance and Finance Department', 'Enforcement and Investor Protection Department', 'Company Registration and Monitoring Department', ' Information and Communications Technology Department', 'Human Resource and Administration Department', 'Economic Research and Training Department', ' Financial Management Department'], null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('job_title', 'Job Title', ['class' => 'control-label']) !!}
      {!! Form::text('job', null, array('id' => 'job_title', 'class' => 'form-control')) !!}
    </div>

  </div>



<!-- /Form input fields-->
