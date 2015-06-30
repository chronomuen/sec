@extends('default')

@section('header')
Transaction List
@stop

@section('user_info')
<!-- user info -->
<p>First Lastname</p>
<!-- job title -->
<a href="#"><i class="fa fa-circle text-success"></i>Super <br/>Administrator</a>
@stop

@section('sidebar')
  <li class="active">
      <a href="processor_index"><i class="fa fa-fw fa-reorder"></i>View Transactions</a>
  </li>
  <li>
      <a href="#"><i class="fa fa-fw fa-plus-square"></i>Create Transaction</a>
  </li>
  <li>
      <a href="#"><i class="fa fa-fw fa-exchange"></i>Assign Transactions</a>
  </li>
@stop


@section('content')
<div class="panel panel-primary">
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
