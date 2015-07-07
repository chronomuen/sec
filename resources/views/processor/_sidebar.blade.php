@section('user_info')
<!-- user info -->
<p>Julian Felipe</p>
<!-- job title -->
<a href="/processor"><i class="fa fa-circle text-success"></i>Processor</a>
@stop

@section('sidebar')
<li>
    <a href="/processor"><i class="fa fa-fw fa-search"></i>Search Transaction</a>
</li>
<li class="treeview">
  <a href="#">
    <i class="fa fa-spinner"></i>
    <span>Process</span>
    <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="treeview-menu">
    <li><a href="/processor/view_users"><i class="fa fa-file"></i>Create Transaction</a></li>
    <li><a href="/processor/create_user"><i class="fa fa-rotate-right"></i>Update Transaction</a></li>
    <li><a href="/processor/create_user"><i class="fa fa-send"></i>Out</a></li>
  </ul>
</li>
@stop
