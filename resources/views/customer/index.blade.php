
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
            <div class="col-lg-4">
              <h2 ><font color="white">Enter <br/>Transaction Number</font></h2>
              <label for="transaction" class="sr-only">Transaction Number</label>

              {!! Form::open(array('action' => 'CustomerController@showTransaction')) !!}
                {!! Form::text('transactionID', null, array('id' => 'transactionID', 'class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus')) !!}
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
            <b>Transaction Number:</b> 0879617150987<br/>
            <b>Transaction Start Date:</b> 01 July 2015<br/>
            <b>Customer's Name:</b> First Last<br/>
            <b>Processor's Name:</b> Pro Name<br/>
            <b>Processor's ID Number:</b> 08796<br/>
            <b>Processor's Department:</b> Department<br/>
            <b>Transaction Type:</b> Type 1<br/>
            <b>Transaction Stage:</b> Stage 5<br/>
            <b>Handled By:</b>
              <li> Department 1 </li>
              <li> Department 2 </li>
              <li> Department 3 </li>
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

    @if (!empty($transaction))
      <script>
        $(function() {
            $('#viewModal').modal('show');
          });
      </script>
    @endif

</body>

</html>
