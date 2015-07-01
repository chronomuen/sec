@section('user_info')
<!-- user info -->
<p>First Lastname</p>
<!-- job title -->
<a href="#"><i class="fa fa-circle text-success"></i>Super <br/>Administrator</a>
@stop

@section('sidebar')
  <li>
      <a href="superadmin_index"><i class="fa fa-fw fa-reorder"></i>View Transactions</a>
  </li>
  <li>
      <a href="superadmin_new_transaction"><i class="fa fa-fw fa-plus-square"></i>Create Transaction</a>
  </li>
  <li>
      <a href="#"><i class="fa fa-fw fa-exchange"></i>Assign Stages</a>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-group"></i>
      <span>Manage Users</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-list"></i> View Users</a></li>
      <li><a href="#"><i class="fa fa-user"></i> Set Administrators</a></li>
      <li><a href="#"><i class="fa fa-plus-circle"></i> Add User</a></li>
    </ul>
  </li>
@stop
