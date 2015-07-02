@section('user_info')
<!-- user info -->
<p>First Lastname</p>
<!-- job title -->
<a href="/processor"><i class="fa fa-circle text-success"></i>Processor</a>
@stop

@section('sidebar')
  <li>
      <a href="/processor"><i class="fa fa-fw fa-reorder"></i>View Transactions</a>
  </li>
  <li>
      <a href="/processor/create_transaction"><i class="fa fa-fw fa-plus-square"></i>Create Transaction</a>
  </li>
@stop
