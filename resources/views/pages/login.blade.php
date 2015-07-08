
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

	<title>SEC Transaction Tracker</title>

	<!-- Own CSS -->
	<link href="/css/style.css" rel="stylesheet">

	<!-- Bootstrap Core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="/css/signin.css" rel="stylesheet">

	<!-- Morris Charts CSS -->
	<link href="/css/plugins/morris.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>


<body>

	<div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading"><font color="white">Sign In</font></h2>
        {!! Form::open(array('action' => 'PagesController@login')) !!}
          <font color="white">{!! Form::label('userID', 'User ID', ['class' => 'control-label']) !!}</font>
          {!! Form::text('userID', null, array('id' => 'userID', 'class' => 'form-control', 'required' => 'required', 'style' => 'text-align: center')) !!}<br/>
          <font color="white">{!! Form::label('userPass', 'Password', ['class' => 'control-label']) !!}</font>
          {!! Form::password('usernPass', array('id' => 'userPass', 'class' => 'form-control', 'required' => 'required', 'style' => 'text-align: center')) !!}<br/>
        {!! Form::submit('Sign In', ['class' => 'btn btn-lg btn-primary btn-block']) !!}
        {!! Form::close() !!}
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
