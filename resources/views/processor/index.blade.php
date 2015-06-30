@extends('default')

@section('header')
Sample Menu
@stop

@section('user_info')
Firstname Lastname <br/>
Processor <br/>
@stop

@section('sidebar')
  <li class="active">
      <a href="processor_index"><i class="fa fa-fw fa-reorder"></i>View Transactions</a>
  </li>
  <li>
      <a href="#"><i class="fa fa-fw fa-plus-square"></i>Create Transaction</a>
  </li>
@stop

@section('content')
<div class="panel panel-green">
    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
    <a href="#" class="list-group-item">Morbi leo risus</a>
    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
    <a href="#" class="list-group-item">Vestibulum at eros</a>
    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
    <a href="#" class="list-group-item">Morbi leo risus</a>
    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
    <a href="#" class="list-group-item">Vestibulum at eros</a>
    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
    <a href="#" class="list-group-item">Morbi leo risus</a>
    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
    <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>







@stop
