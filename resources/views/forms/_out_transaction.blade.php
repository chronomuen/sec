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
						<b>Date Submitted:</b> {!! str_replace("00:00:00", "", $transaction->date_submitted) !!}
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
				<td>{!! str_replace("00:00:00", "", $log->date_received) !!}</td>
				<td>@if($log->date_released != "0000-00-00 00:00:00"){!! str_replace("00:00:00", "", $log->date_released) !!}@endif</td>
				<td>{!! $log->next_processor !!}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<div class="panel">
	<table class="table table-list-search">
		<tbody>
			<tr>
				<td>
                    <!-- form open is on user's corresponding out transaction page -->
					{!! Form::label('forward', 'Forward to', ['class' => 'control-label']) !!}
					<form action="#" method="get">
						<div class="input-group" style="width:290px">
							<input class="form-control" id="system-search" name="q" placeholder="Search name">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-default" ><i class="glyphicon glyphicon-search"></i></button>
							</span>
						</div>
					</form>
					<br>

					{!! Form::label('data', 'Remarks', ['class' => 'control-label']) !!}
					<br>
					{!! Form::textarea('data', null, ['id' => 'area3', 'rows' => 10, 'cols' => 80]) !!}
					<br><br>
					{!! Form::submit('Logout Transaction', ['id' => 'submit', 'class' => 'btn btn-primary btn-md', 'name' => 'out']) !!}
				</td>
			</tr>
		</tbody>
	</table>


</div>
