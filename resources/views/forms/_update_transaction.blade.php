<div class="panel">
	<table class="table table-list-search">
		<tbody>
			<tr>
				<td>
                    <p>
						<b>Transaction ID:</b> {!! $transaction->transaction_id !!}
					</p>
					<p>
						<b>Transaction Type:</b> {!! $transaction->type !!}
					</p>
					<p>
						<b>Customer Name:</b> {!! $transaction->client !!}
					</p>
				<!--	<p id="current_processor">-->
                    <p>
						<b>Processor:</b> Pipe Mclean
					</p>
					<p>
						<b>Date Submitted:</b> {!! $transaction->date_submitted !!}
					</p>
					<p>
						<b>Status:</b> {!! $transaction->status !!}
					</p>
					<p>
						<b>Remarks:</b> Encoded document
					</p>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<div class="panel">
	<table class="table table-list-search">
		<thead>
			<tr>
			<th class="col-md-1"><center>Transaction ID</center></th>
			<th class="col-md-1"><center>Status</center></th>
			<th class="col-md-2"><center>Remarks</center></th>
			<th class="col-md-2"><center>Processor</center></th>
			<th class="col-md-1"><center>Receive Date</center></th>
			<th class="col-md-1"><center>Release Date</center></th>
			<th class="col-md-2"><center>Next Processor</center></th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>{!! $transactionID !!}</td>
				<td>new</td>
				<td>Validated document</td>
				<td>Percy Jackson</td>
				<td id="1">01/02/15</td>
				<td>01/03/15</td>
				<td>Annabeth Chase</td>
			</tr>
			<tr>
				<td>{!! $transactionID !!}</td>
				<td>in-process</td>
				<td>Evaluated document</td>
				<td>Annabeth Chase</td>
				<td id="1">01/03/15</td>
				<td>01/03/15</td>
				<td>Piper McLean</td>
			</tr>
			<tr>
				<td>{!! $transactionID !!}</td>
				<td>in-process</td>
				<td>Encoded document</td>
				<td>Piper McLean</td>
				<td>01/03/15</td>
				<td>01/04/15</td>
				<td>{!! $processorName !!}</td>
			</tr>
			<tr id="tr" style="display:none">
				<td >{!! $transactionID !!}</td>
				<td >in-process</td>
				<td >Checked document</td>
				<td >{!! $processorName !!}</td>
				<td >01/03/15</td>
				<td >-</td>
				<td >-</td>
			</tr>
		</tbody>
	</table>
</div>

<div class="panel">
	<table class="table table-list-search">
		<tbody>
			<tr>
				<td>
					<form>
                        <!-- form open is on user's corresponding update transaction page -->
						{!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
						<br>
						{!! Form::radio('status', 'new', false, ['id' => 'button']) !!} New
						<br>
						{!! Form::radio('status', 'in-process', false, ['id' => 'button']) !!} In-process
						<br>
						{!! Form::radio('status', 'completed', false, ['id' => 'button']) !!} Completed
						<br><br>
					</form>
					{!! Form::label('data', 'Remarks', ['class' => 'control-label']) !!}
					<br>
					{!! Form::textarea('data', null, ['id' => 'area3', 'rows' => 10, 'cols' => 80]) !!}
					<br><br>
					{!! Form::submit('Update Transaction', ['id' => 'submit', 'class' => 'btn btn-primary btn-md', 'name' => 'update']) !!}
				</td>
			</tr>
		</tbody>
	</table>



</div>
