@extends('master')
@section('content')
<header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SCHEDIT</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
<ul class="nav nav-pills" role="tablist">
	<li role="presentation" class="active"><a href="#">Dashboard</a></li>
	<li role="presentation"><a href="#">Client</a></li>
	<li role="presentation"><a href="#">Profile</a></li>
	<li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
	<li role="presentation"><a href="#">Settings </a></li>
	<li role="presentation"><a href="#">Log out</a></li>
</ul>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	</header>
	<div>
		<div class="col-md-3 push-md-9" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width:20%;margin: 10px 20px 10px 20px">
			<div><h2 style="text-align: center;">Client AB</h2></div>
			<hr>
			<ul class="nav nav-pills nav-stacked">
				<li><a href="#">Test</a></li>
				<li><a href="#">Test</a></li>
				<li><a href="#">Test</a></li>				
			</ul>
		</div>
		<div class="col-md-9 pull-md-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin:10px 0px 30px 0px">
			<div><h2 style="text-align: center;">Website</h2></div>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
				<span class="sr-only">60% Complete</span>
			  </div>
			</div>
			<iframe src="https://calendar.google.com/calendar/embed?src=info%40fastwebbproduktion.se&ctz=Europe%2FStockholm" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
			<hr>
			<div class="row">
				<div class="col-6" style="width: 49%;margin: 0;float: left;margin: 5px;border:1px solid #e2e2e2;border-radius:3px;">
					<h4  style="text-align:center;margin: 0 0 10px 0;padding: 11px;background-color:  #000;color: #fff;border-top-right-radius:  3px;border-top-left-radius:  3px;">Mail</h4>
					<ul style="list-style: none;padding: 0px 5px 0px 5px;">
						<li style="border-bottom: 1px solid #e2e2e2;padding-left:2%;">Mail</li>
						<li style="border-bottom: 1px solid #e2e2e2;padding-left:2%;">Mail</li>
						<li style="border-bottom: 1px solid #e2e2e2;padding-left:2%;">Mail</li>
						<li style="border-bottom: 1px solid #e2e2e2;padding-left:2%;">Mail</li>
					</ul>
				</div>
				<div class="col-6" style="width: 49%;margin: 0;float: left;margin: 5px;border:1px solid #e2e2e2;border-radius:3px;">
					<h4 style="text-align:center;margin: 0 0 10px 0;padding: 11px;background-color:  #000;color: #fff;border-top-right-radius:  3px;border-top-left-radius:  3px;">Project Leader</h4>
					<p style="padding-left:2%;"><strong>Name:</strong> Lisa Ericsson</p>
					<p style="padding-left:2%;"><strong>E-mail:</strong> Lisa.Ericsson@schedit.com</p>
					<p style="padding-left:2%;"><strong>Phone:</strong> +4677785</p>					
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-6 col-md-4" style="border:1px solid #e2e2e2;border-radius:3px;padding:0;margin: 5px;width:32.333333%;">
					<h4 style="text-align:center;margin: 0 0 10px 0;padding: 11px;background-color:  #000;color: #fff;border-top-right-radius:  3px;border-top-left-radius:  3px;">Milestones</h4>
						<ul style="list-style: none;padding: 0px 5px 0px 5px;">
							<li><span class="glyphicon glyphicon-ok"></span>Meeting</li>
							<li><span class="glyphicon glyphicon-remove"></span>Design</li>							
						</ul>
						<hr>
						<div class="text-center" style="margin-bottom:22px;">						
							<button type="button" class="btn btn-default">Add Milestone</button>
						</div>
				</div>
				<div class="col-6 col-md-4" style="border:1px solid #e2e2e2;border-radius:3px;padding:0;margin: 5px;width:32.333333%;">
					<h4 style="text-align:center;margin: 0 0 10px 0;padding: 11px;background-color:  #000;color: #fff;border-top-right-radius:  3px;border-top-left-radius:  3px;">Tasks</h4>
					<ul style="list-style: none;padding: 0px 5px 0px 5px;">
						<li>Design</li>
						<li>Web</li>						
					</ul>
					<hr>
					<div class="text-center" style="margin-bottom:22px;">					
						<button type="button" class="btn btn-default">Add Task</button>
					</div>
				</div>
				<div class="col-6 col-md-4" style="border:1px solid #e2e2e2;border-radius:3px;padding:0;margin: 5px;width:32.333333%;">
					<h4 style="text-align:center;margin: 0 0 10px 0;padding: 11px;background-color:  #000;color: #fff;border-top-right-radius:  3px;border-top-left-radius:  3px;">Participant</h4>
					<ul style="list-style: none;padding: 0px 5px 0px 5px;">
						<li>Mats (Web)</li>	
						<li>Andreas(Design)</li>	
					</ul>
					<hr>
					<div class="text-center" style="margin-bottom:22px;">
						<button type="button" class="btn btn-default">Add Participant</button>
					</div>
				</div>
		</div>
		</div>
		<div class="clearfix"></div>
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