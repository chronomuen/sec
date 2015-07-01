@section('user_info')
<!-- user info -->
<p>First Lastname</p>
<!-- job title -->
<a href="#"><i class="fa fa-circle text-success"></i>Administrator</a>
@stop

@section('sidebar')
  <li>
      <a href="admin_index"><i class="fa fa-fw fa-reorder"></i>View Transactions</a>
  </li>
  <li>
      <a href="admin_new_transaction"><i class="fa fa-fw fa-plus-square"></i>Create Transaction</a>
  </li>
  <li>
    <a href="admin_assign_stages"><i class="fa fa-fw fa-exchange"></i>Assign Stages</a>
  </li>
@stop
