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
		<link rel="stylesheet" href="{{ URL::asset('static/css/styles.min.css') }}">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		

    </head>
    <body>
		<div class="image-background">
			<div class="container">
			  <div class="row">
				<div class="col-sm" style="background-color:#e2e2e2;width:50%;margin:0 auto;padding:20px 70px 50px 20px;margin-top:15%;border-radius: 5px;border: 2px solid #b0b0b0;">
					<form>
					<h1 style="text-align:center;margin-top:0px;padding-bottom: 2%;border-bottom: 1px solid #cdcdcd;">Login</h1>
					  <div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <div class="form-group">
					  <a href="/register">Not registered yet?</a><br>
					  <a href="/dashboard">Help</a>
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			  </div>
			</div>
		</div>
    </body>
</html>