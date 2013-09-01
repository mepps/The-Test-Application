<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" />
</head>
<body>
	<div class="wrapper">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-static-top navbar-inner">
			 	<ul class="nav navbar-nav">
			      <li ><a class="navbar-brand" href="">The Test</a></li>
			      <li><a href="/">Home</a></li>
			      <li><a href="/main/dashboard">Dashboard</a></li>
			      <li class="active"><a href="">Profile</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="process_logoff">Log Off</a></li>
				</ul>   	
			</div>
		</nav>	
<?php		foreach ($users as $user)
			{
				if ($user->id === $id)
				{

			?>
			<h2><?=$user->first_name?> <?=$user->last_name?></h2>
			<p>User ID: <?=$user->id?></p>
			<p>Email address: <?=$user->email?></p>
			<p>Created: <?=date('M d, y H:i:s', strtotime($user->created_at))?></p>


		<form action="process_message" method="post" role="form" >
			<label>Enter a message for <?=$user->first_name?></label>
			<textarea name="message" class="form-control"></textarea>
			<input type="submit" class="btn btn-default" value="Post" />
		</form><br />
<?				}
			}?>

	</div>

	
</body>
</html>