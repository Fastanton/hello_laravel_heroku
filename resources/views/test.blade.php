<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="/css/app.css">	
		

    </head>
    <body>
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
        <li role="presentation" class="active"><a href="#">Dashboard</a></li>
        <li role="presentation"><a href="#">Link</a></li>
        <li class="dropdown" role="presentation">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
<ul class="nav nav-pills" role="tablist">
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
  <li role="presentation"><a href="#">Log out</a></li>
</ul>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	</header>
	<div>
		<div class="col-md-3 push-md-9" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width:20%;margin: 10px 20px 10px 20px">
			
			<ul class="nav nav-pills nav-stacked">
				<li><a href="#">Test</a></li>
				<li><a href="#">Test</a></li>
				<li><a href="#">Test</a></li>				
			</ul>
		</div>
		<div class="col-md-9 pull-md-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin:10px 0px 10px 0px">
			<div><h2 style="text-align: center;">Client</h2></div>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
				<span class="sr-only">60% Complete</span>
			  </div>
			</div>
			<hr>
			<div class="row">
			  <div class="col-6" style="width:50%;">
			  <ul>
			  <li>Mail</li>
			  <li>Mail</li>
			  <li>Mail</li>
			  <li>Mail</li>
			  </ul>
			  </div>
			  <div class="col-6" style="width:50%;">Tasks</div>
			</div>
		</div>
	</div>
    </body>
</html>
