
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

        <form method="POST" action="/customer/showTransaction" class="form-signin">
            <h2 class="form-signin-heading"><font color="white">Track Transaction</font></h2>
            {!! csrf_field() !!}

            <div>
                <font color="white">Transaction ID </font>
                 {!! Form::text('transaction_id', null, array('id' => 'transaction_id', 'class' => 'form-control', 'required' => 'required')) !!}<br/>
            </div>

            <div>
                <font color="white">Password </font>
                 {!! Form::password('password', array('id' => 'password', 'class' => 'form-control', 'required' => 'required')) !!}<br/>
            </div>

            <div>
                <button type="submit" class="btn btn-lg btn-primary btn-block">View Transaction</button>
            </div>
        </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- Modal --> <!-- Just call transaction details here -->
    <div id="transactionModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <div class="modal-content">
            @if ($message == 'Invalid Transaction ID or Password')
                <div class="modal-header alert-danger">
            @else
                <div class="modal-header alert-info">
            @endif
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">
                @if ($message == 'Invalid Transaction ID or Password')
                    Authentication Error
                @else
                    Transaction Details
                @endif
            </h4>
          </div>
          <div class="modal-body">
              @if ($message == 'Invalid Transaction ID or Password')
                {!! $message !!}
              @else
                @if ($message == 'Transaction found')
                  <b>Transaction ID:</b> {!! $transaction->transaction_id !!}<br/>
                  <b>Transaction Type: </b> {!! $transaction->type !!}<br/>
                  <b>Transaction Start Date:</b> {!! substr($transaction->date_submitted,0,10) !!}<br/>
                  <b>Customer's Name:</b> {!! $transaction->client !!}<br/>
                  <b>Status:</b> {!! $transaction->status !!}<br/>
                @endif
              @endif
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

    @if ($message != null)
      <script>
        $(function() {
            $('#transactionModal').modal('show');
          });
      </script>
    @endif


</body>

</html>
