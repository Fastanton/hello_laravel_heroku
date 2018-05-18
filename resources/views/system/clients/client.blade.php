@extends('master')

@section('sidebar')
	<div>
		<div class="col-md-3 push-md-9 sidebar-custom">
			<div><h2 style="text-align: center;">Client AB</h2></div>
			<hr>
			<ul class="nav nav-pills nav-stacked">
				<li><a href="#">Test</a></li>
				<li><a href="#">Test</a></li>
				<li><a href="#">Test</a></li>				
			</ul>
		</div>
@endsection		

@section('content')
		<div class="col-md-9 pull-md-3 content-card client-card">
			<div><h2>Hasse AB</h2></div>
				<div class="multi-button-div">
				  <div class="btn-group" role="group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Create
					  <span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
					  <li><a href="#">Create case</a></li>
					  <li><a href="#">Create task</a></li>
					  <li><a href="#">Create project</a></li>				  
					</ul>
				  </div>
				</div>
			<div class="clearfix"></div>		
			<table class="client-table">
			<tr>
				<th>Client</th>
				<th>Updates</th>
				<th>Mail</th>
				<th>Login</th>
				<th>Auto update</th>
			</tr>
			<tr>
				<td>Hasse AB</td>
				<td>4</td>
				<td>0</td>
				<td><button type="submit" class="btn btn-default">Login</button></td>
				<td><button type="submit" class="btn btn-default">Update</button></td>
			</tr>
			<tr>
				<td>Hasse AB</td>
				<td>4</td>
				<td>0</td>
				<td><button type="submit" class="btn btn-default">Login</button></td>
				<td><button type="submit" class="btn btn-default">Update</button></td>
			</tr>
			<tr>
				<td>Hasse AB</td>
				<td>4</td>
				<td>0</td>
				<td><button type="submit" class="btn btn-default">Login</button></td>
				<td><button type="submit" class="btn btn-default">Update</button></td>
			</tr>
			<tr>
				<td>Hasse AB</td>
				<td>4</td>
				<td>0</td>
				<td><button type="submit" class="btn btn-default">Login</button></td>
				<td><button type="submit" class="btn btn-default">Update</button></td>
			</tr>			
			</table>
			<h1>Your tasks</h1>
			<div class="create-button-div"><button type="button" class="btn btn-default">Create task</button></div>			
			<table class="task-table">
			<tr>
				<th>Client</th>
				<th>Task</th>
				<th>Date</th>
			</tr>
			<tr>
				<td>Hasse AB</td>
				<td>Development</td>
				<td>2018-05-24 10:00</td>
			</tr>
			<tr>
				<td>Hasse AB</td>
				<td>Development</td>
				<td>2018-06-24 08:00</td>
			</tr>	
			<tr>
				<td>Hasse AB</td>
				<td>Development</td>
				<td>2018-06-25 09:00</td>
			</tr>	
			<tr>
				<td>Hasse AB</td>
				<td>Development</td>
				<td>2018-06-25 11:00</td>
			</tr>				
			</table>
		</div>
		</div>
		<div class="clearfix"></div>
@endsection


@section('footer')
		<div class="container">
		  <div class="row">
			<div class="col-sm">
			  One of three columns
			</div>
			<div class="col-sm">
			  One of three columns
			</div>
			<div class="col-sm">
			  One of three columns
			</div>
		  </div>
		</div>
	</div>
@endsection