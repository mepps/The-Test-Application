<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" />
 </head>
<body>
	<div class="wrapper">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-static-top navbar-inner">
			 	<ul class="nav navbar-nav">
			      <li ><a class="navbar-brand" href="">The Test</a></li>
			      <li><a href="/">Home</a></li>
				</ul>
			    <ul class="nav navbar-nav navbar-right">
			    	<li><a href="login/">Log In</a></li>
		    	</ul>
		    </div>
		</nav>		
		<h1>Registration</h1>

		<form id="register" role="form" action="process_registration" method="post">
			<label for="first_name">First Name:</label>
			<input type="text" class="form-control" name="first_name" id="first_name" />
			<label for="last_name">Last Name:</label>
			<input type="text" class="form-control" name="last_name" id="last_name" />
			<label for="email">Email:</label>
			<input type="text" class="form-control" name="email" id="email" />
			<label for="password">Password:</label>
			<input type="password" class="form-control" name="password" id="password" />
			<label for="confirm_password">Confirm Password:</label>
			<input type="password" class="form-control" name="confirm_password" id="confirm_password" />
			<input type="submit" class="btn btn-default" value="Register" />
		</form>
	</div>

</body>
</html>