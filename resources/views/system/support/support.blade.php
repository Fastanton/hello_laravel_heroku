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
		<div class="col-md-9 pull-md-3 content-card support-card">
			<div><h2>Support cases</h2></div>
			<div class="create-button-div"><button type="button" class="btn btn-default">Create case</button></div>			
			<table class="support-table">
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
			<table class="profile-tasks">
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
				<td>Machine AB</td>
				<td>Development</td>
				<td>2018-06-24 08:00</td>
			</tr>	
			<tr>
				<td>Entreprenad</td>
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