@extends('master')

@section('sidebar')
	<div>
		<div class="col-md-3 push-md-9 sidebar-custom">
			<div><h2 style="text-align: center;">Hasse AB</h2></div>
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
			<div><h2>Website</h2></div>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
				<span class="sr-only">60% Complete</span>
			  </div>
			</div>
			<iframe src="https://calendar.google.com/calendar/embed?src=info%40fastwebbproduktion.se&ctz=Europe%2FStockholm" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
			<hr>
			<div class="row">
				<div class="col-6 project-left-div project-small-card">
					<h4>Mail</h4>
					<ul>
						<li>Mail</li>
						<li>Mail</li>
						<li>Mail</li>
						<li>Mail</li>
					</ul>
				</div>
				<div class="col-6 project-right-div project-small-card">
					<h4>Project Leader</h4>
					<p><strong>Name:</strong> Lisa Ericsson</p>
					<p><strong>E-mail:</strong> Lisa.Ericsson@schedit.com</p>
					<p><strong>Phone:</strong> +4677785</p>					
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-6 col-md-4 project-three-first-div project-small-card">
					<h4>Milestones</h4>
						<ul>
							<li><span class="glyphicon glyphicon-ok"></span>Meeting</li>
							<li><span class="glyphicon glyphicon-remove"></span>Design</li>							
						</ul>
						<hr>
						<div class="create-button-div">						
							<button type="button" class="btn btn-default">Add Milestone</button>
						</div>
				</div>
				<div class="col-6 col-md-4 project-three-second-div project-small-card">
					<h4>Tasks</h4>
					<ul>
						<li>Design</li>
						<li>Web</li>						
					</ul>
					<hr>
					<div class="create-button-div">					
						<button type="button" class="btn btn-default">Add Task</button>
					</div>
				</div>
				<div class="col-6 col-md-4 project-three-third-div project-small-card">
					<h4>Participants</h4>
					<ul>
						<li>Mats (Web)</li>	
						<li>Andreas(Design)</li>	
					</ul>
					<hr>
					<div class="create-button-div">
						<button type="button" class="btn btn-default">Add Participant</button>
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