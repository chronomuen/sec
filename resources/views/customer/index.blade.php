
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

  <!-- Script to load modal with details -->
  <!-- to get transaction use something similar to $transaction == 1 -->

	<div class="container">

      <div class="form-group">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4" align="center">
              <h2 ><font color="white">Track Transaction</font></h2>
              {!! Form::open(array('action' => 'CustomerController@showTransaction')) !!}
                <font color="white">{!! Form::label('transID', 'Transaction ID', ['class' => 'control-label']) !!}</font>
                {!! Form::text('transactionID', null, array('id' => 'transactionID', 'class' => 'form-control', 'required' => 'required', 'style' => 'text-align: center')) !!}<br/>
                <font color="white">{!! Form::label('transPass', 'Password', ['class' => 'control-label']) !!}</font>
                {!! Form::password('transactionPass', array('id' => 'transactionPass', 'class' => 'form-control', 'required' => 'required', 'style' => 'text-align: center')) !!}<br/>
              {!! Form::submit('View Transaction', ['class' => 'btn btn-lg btn-primary btn-block']) !!}
              {!! Form::close() !!}
            </div>
            <div class="col-lg-4">
            </div>
          </div>
        </div>
      </div>

    </div> <!-- /container -->

    <!-- Modal --> <!-- Just call transaction details here -->
    <div id="viewModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Transaction Details</h4>
          </div>
          <div class="modal-body">
            <b>Transaction ID:</b> {!! $transaction->transaction_id !!}<br/>
            <b>Transaction Type: </b> {!! $transaction->type !!}<br/>
            <b>Transaction Start Date:</b> {!! $transaction->date_submitted !!}<br/>
            <b>Customer's Name:</b> {!! $transaction->client !!}<br/>
            <b>Status:</b> {!! $transaction->status !!}<br/>
			{{ Session::get('message') }}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
	
	<!-- Modal --> <!-- Just call transaction details here -->
    <div id="loginErrorModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
          <div class="modal-header alert-danger">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Authentication Error</h4>
          </div>
          <div class="modal-body">
              {{ Session::get('message') }}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    @if Session::has('message' = 'Invalid credentials'))
      <script>
        $(function() {
            $('#loginErrorModal').modal('show');
          });
      </script>
	@else
		<script>
        $(function() {
            $('#viewModal').modal('show');
          });
      </script>
    @endif

</body>

</html>
