@section('user_info')
<!-- user info -->
<p>Juan Cruz</p>
<!-- job title -->
<a href="/superadmin"><i class="fa fa-circle text-success"></i>Super <br/>Administrator</a>
@stop

@section('sidebar')
  <li>
      <a href="/superadmin"><i class="fa fa-fw fa-search"></i>Search Transaction</a>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-spinner"></i>
      <span>Process</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="/superadmin/view_users"><i class="fa fa-file"></i>Create Transaction</a></li>
      <li><a href="/superadmin/update_transaction"><i class="fa fa-rotate-right"></i>Update Transaction</a></li>
      <li><a href="/superadmin/out_transaction"><i class="fa fa-send"></i>Out</a></li>
    </ul>
  </li>
  
  <li class="treeview">
    <a href="#">
      <i class="fa fa-group"></i>
      <span>Manage Users</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">

      <li><a href="/superadmin/view_users"><i class="fa fa-list"></i> View Users</a></li>
      <li><a href="/superadmin/create_user"><i class="fa fa-plus-circle"></i> Add User</a></li>
	  

    </ul>
  </li>
@stop
