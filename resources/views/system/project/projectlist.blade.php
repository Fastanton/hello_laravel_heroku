@extends('master')

@section('sidebar')
	<div>
		<div class="col-md-3 push-md-9 sidebar-custom">
			<div><h2 style="text-align: center;">User</h2></div>
			<hr>
			<ul class="nav nav-pills nav-stacked">
				<li><a href="#">Test</a></li>
				<li><a href="#">Test</a></li>
				<li><a href="#">Test</a></li>				
			</ul>
		</div>
@endsection		

@section('content')
		<div class="col-md-9 pull-md-3 content-card">
			<div><h2>Projects</h2></div>
			<div  class="create-button-div"><button type="button" class="btn btn-default">Create project</button></div>
			<table class="support-table">
			<tr>
				<th><a href="/project">Project leader</a></th>
				<th><a href="/project">Project</a></th>
				<th><a href="/project">Client</a></th>
				<th><a href="/project">Deadline</a></th>
				<th><a href="/project">Tasks</a></th>
				<th><a href="/project">Mail</a></th>				
			</tr>
			<tr>
				<td>Elisabeth Ericsson</td>
				<td>Website</td>
				<td>Hasse AB</td>
				<td>2018-05-25</td>
				<td>5</td>
				<td>2</td>				
			</tr>
			<tr>
				<td>Elisabeth Ericsson</td>
				<td>Website</td>
				<td>Hasse AB</td>
				<td>2018-05-25</td>
				<td>1</td>
				<td>5</td>				
			</tr>
			<tr>
				<td>Elisabeth Ericsson</td>
				<td>Website</td>
				<td>Hasse AB</td>
				<td>2018-05-25</td>
				<td>5</td>
				<td>5</td>				
			</tr>
			<tr>
				<td>Elisabeth Ericsson</td>
				<td>Website</td>
				<td>Hasse AB</td>
				<td>2018-05-25</td>
				<td>5</td>
				<td>5</td>				
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