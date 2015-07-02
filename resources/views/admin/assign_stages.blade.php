@extends('default')
<!-- User Sidebar -->
@include('admin/_sidebar')

@section('header')
<div>
	<div style="float:left">Assign Stages</div>

	<div style="padding-left:710px">
		<form action="#" method="get">
			<div class="input-group">
				<input class="form-control" id="system-search" name="q" placeholder="Filter">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
				</span>
			</div>
		</form>
	</div>
</div>
@stop

@section('javascript')
<script src="/js/match.js" type="text/javascript"></script>
@stop

@section('content')

<div class="container">
	<div class="row">
        
		<div class="col-md-9">
    	 <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th class="col-md-3"><center>Processor</center></th>
                            <th class="col-md-3"><center>Department</center></th>
                            <th class="col-md-3"><center>Stages</center></th>
                            <th><center>Search Stage</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Z, Jay</td>
                            <td>Rap Department</td>
                            <td>
								<select id="select" class="form-control">
									<option disabled selected> -- show stages -- </option>
									<option disabled>stage1</option>
									<option disabled>stage2</option>
									<option disabled>stage3</option>
									<option disabled>stage4</option>
									<option disabled>stage5</option>
								</select>
							</td>
                            <td>
								<span style="float:left">	
									<div style="width:150px">
										<input class="form-control" id="system-add" name="q" placeholder="Add Stage">
									</div>
								</span>
								<span class="input-group-btn" style="inline">
									<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i></button>
								</span>
							</td>
                        </tr>
                        <tr>
                            <td>Gaga, Lady</td>
                            <td>Pop Department</td>
                            <td>
								<select id="select" class="form-control">
									<option disabled selected> -- show stages -- </option>
									<option disabled>stage1</option>
									<option disabled>stage2</option>
									<option disabled>stage3</option>
									<option disabled>stage4</option>
									<option disabled>stage5</option>
								</select>
							</td>
                            <td>
								<span style="float:left">	
									<div style="width:150px">
										<input class="form-control" id="system-add" name="q" placeholder="Add Stage">
									</div>
								</span>
								<span class="input-group-btn" style="inline">
									<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i></button>
								</span>
								
							</td>
							
                        </tr>
                        <tr>
                            <td>9, Gloc</td>
                            <td>OPM Department</td>
                            <td>
								<select id="select" class="form-control">
									<option disabled selected> -- show stages -- </option>
									<option disabled>stage1</option>
									<option disabled>stage2</option>
									<option disabled>stage3</option>
									<option disabled>stage4</option>
									<option disabled>stage5</option>
								</select>
							</td>
                            
							<td>
								<span style="float:left">	
									<div style="width:150px">
										<input class="form-control" id="system-add" name="q" placeholder="Add Stage">
									</div>
								</span>
								<span class="input-group-btn" style="inline">
									<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i></button>
								</span>
								
							</td>
                        </tr>
                    </tbody>
                </table>   
		</div>
	</div>
</div>

 
@stop
