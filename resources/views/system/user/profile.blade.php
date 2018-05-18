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
		<div class="col-md-9 pull-md-3 content-card profile-card">
			<div><h2>Anton Fast</h2><h4>Webdeveloper</h4></div>
			<div class="media">
			  <div class="media-left">
				<a href="#">
				  <img class="media-object" src="http://tripleninegroup.com/media/20014/fisker_rounded.png">
				</a>
			  </div>
			  <div class="media-body profile-info">
				<ul>
				<li><strong>Email:</strong> test@test.com</li>
				<li><strong>Phone:</strong> +4677889558</li>
				<li><strong>Git:</strong> mygitlink</li>
				</ul>
			  </div>
			</div>
			<h1>Antons tasks</h1>
			<table class="profile-tasks">
			<tr>
				<th>Client</th>
				<th >Task</th>
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