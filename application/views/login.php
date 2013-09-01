<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In</title>
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
			    	<li class="active"><a href="">Log In</a></li>
		    	</ul>
		    </div>
		</nav>			
		<h1>Log In</h1>

		<p><?php if (isset($errors)) echo $errors;?></p>

		<form action="/user/process_login" method="post" role="form">
				<label for="email">Email:</label>
				<input type="text" class="form-control" name="email" id="email" />
				<label for="password">Password:</label>
				<input type="password" class="form-control" name="password" id="password" />
				<input type="submit" class="btn btn-default" class="form-control" value="Log In" />
		</form>
	</div>
</body>
</html>