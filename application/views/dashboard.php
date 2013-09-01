<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" />
</head>
<body>
	<div class="wrapper">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-static-top navbar-inner">
			 	<ul class="nav navbar-nav">
			      <li ><a class="navbar-brand" href="">The Test</a></li>
			      <li><a href="/">Home</a></li>
			      <li class="active"><a href="/main/dashboard">Dashboard</a></li>
			      <li><a href="/main/profile/<?=$this->session->userdata['user']->id?>">Profile</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="process_logoff">Log Off</a></li>
				</ul>   	
			</div>
		</nav>	
		<h2><?=($this->session->userdata['user']->admin_level == 9)? 'Manage' : 'All'?> Users</h2>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>User Level</th>
<?php if ($this->session->userdata['user']->admin_level == 9) echo "<th>Action</th>" ?>

				</tr>
			</thead>
			<tbody>
<?php
	foreach ($users as $user)
	{?>
				<tr>
					<td><a href="/main/profile/<?=$user->id?>"><?=$user->id?></td>
					<td><?=$user->first_name." ".$user->last_name ?></td>
					<td><?=$user->email?></td>
					<td><?= ($user->admin_level==9)? "Admin" :  "Normal" ?></td>
				</tr>
<?	}
?>
			</tbody>
		</table>
		
	</div>
</body>
</html>