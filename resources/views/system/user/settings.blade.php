@extends('master')

@section('sidebar')
	<div>
		<div class="col-md-3 push-md-9 sidebar-custom">
			<h2>Client AB</h2>
			<hr>
			<ul class="nav nav-pills nav-stacked">
				<li><a href="#">Test</a></li>
				<li><a href="#">Test</a></li>
				<li><a href="#">Test</a></li>				
			</ul>
		</div>
@endsection		

@section('content')
		<div class="col-md-9 pull-md-3 content-card settings-card">
		<h1>Settings</h1>		
		<form>
			  <div class="form-group">
				<label for="exampleInputEmail1">Name:</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Last name:</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Last name">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Role:</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Role">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Email:</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Email">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Git:</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Git">
			  </div>
			  <div class="form-group">			
				<label for="exampleInputPassword1">Phone number:</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Phone number">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>	
			  <button type="submit" class="btn btn-default">Save changes</button>
		</form>
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