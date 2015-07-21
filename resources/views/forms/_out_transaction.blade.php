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
						<b>Processor:</b> {!! $recentLog->processor_name !!}
					</p>
					<p>
						<b>Date Submitted:</b> {!! substr($transaction->date_submitted,0,10) !!}
					</p>
					<p>
						<b>Status:</b> {!! $recentLog->status !!}
					</p>
					<p>
						<b>Remarks:</b> {!! $recentLog->remarks !!}
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
			@foreach ($logs as $log)
			<tr>
				<td>{!! $log->transaction_id !!}</td>
				<td>{!! $log->status !!}</td>
				<td>{!! $log->remarks !!}</td>
				<td>{!! $log->processor_name !!}</td>
				<td>{!! substr($log->date_received,0,10) !!}</td>
				<td>@if($log->date_released != "0000-00-00 00:00:00"){!! substr($log->date_released,0,10) !!}@endif</td>
				<td>{!! $log->next_processor !!}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@if($flag == "yes")
	<div class="panel">
		<table class="table table-list-search">
			<tbody>
				<tr>
					<td>
						<!-- form open is on user's corresponding out transaction page -->
						{!! Form::label('next_processor', 'Forward to', ['class' => 'control-label']) !!}
						<form action="#" method="get">
							<div class="input-group" style="width:290px">

								{!! Form::select('next_processor', $users, null, ['class' => 'form-control', 'required' => 'required']) !!}

							</div>
						</form>
						<br>

						{!! Form::label('remarks', 'Remarks', ['class' => 'control-label']) !!}
						<br>
						{!! Form::textarea('remarks', null, ['id' => 'area3', 'rows' => 10, 'cols' => 80]) !!}
						<br><br>
						{!! Form::submit('Logout Transaction', ['id' => 'submit', 'class' => 'btn btn-primary btn-md', 'name' => 'out']) !!}
					</td>
				</tr>
			</tbody>
		</table>
	</div>
@endif