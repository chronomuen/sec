@section('user_info')
<!-- user info -->
<p>{!! $authuser->firstname !!} {!! $authuser->lastname !!}</p>
<p>{!! $authuser->user_id !!}</p>
<!-- job title -->
<a href="/processor"><i class="fa fa-circle text-success"></i>{!! $authuser->job_title !!}</a>
@stop

@section('sidebar')
<li>
    <a href="/processor"><i class="fa fa-fw fa-search"></i>Search Transaction</a>
</li>
<li>
    <a href="/processor/process_transactions"><i class="fa fa-fw fa-spinner"></i>Processes</a>
</li>
@stop
