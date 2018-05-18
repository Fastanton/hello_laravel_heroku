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
		<div class="col-md-9 pull-md-3 content-card dashboard-card">
			<div><h2>Dashboard</h2></div>
			<iframe src="https://calendar.google.com/calendar/embed?src=info%40fastwebbproduktion.se&ctz=Europe%2FStockholm" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
			<hr>
			<div class="row">
				<div class="col-6 dashboard-card-left">
					<h4>Tasks</h4>
					<ul>
						<li>Design</li>
						<li>Web</li>						
					</ul>
					<hr>
					<div class="create-button-div" id="dashboard-create-button">					
						<button type="button" class="btn btn-default">Add task</button>
					</div>
				</div>
				<div class="col-6 dashboard-card-right">
					<h4>Projects</h4>
					<p>Hasse AB</p>
					<p>Machine AB</p>
					<p>Scandinavia</p>	
					<div class="create-button-div" id="dashboard-create-button">					
						<button type="button" class="btn btn-default">Add project</button>
					</div>					
				</div>
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