@section('user_info')
<!-- user info -->
<p>Jose Palma</p>
<!-- job title -->
<a href="/superadmin"><i class="fa fa-circle text-success"></i>Super <br/>Administrator</a>
@stop

@section('sidebar')
  <li>
      <a href="/superadmin"><i class="fa fa-fw fa-search"></i>Search Transaction</a>
  </li>

  <li>
      <a href="/superadmin/process_transactions"><i class="fa fa-fw fa-spinner"></i>Processes</a>
  </li>

  <li class="treeview">
    <a href="#">
      <i class="fa fa-group"></i>
      <span>Manage Users</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">

      <li><a href="/superadmin/view_users"><i class="fa fa-list"></i> View Users</a></li>
      <li><a href="/superadmin/create_user"><i class="fa fa-plus-circle"></i> Create User</a></li>

    </ul>
  </li>
@stop
