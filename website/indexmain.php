<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>OSU CS561</title>
	<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	<link href="index.css?v=1.44" rel="stylesheet" />
</head>
<body>
<?php if ($_SESSION['u_uid']): ?>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-6" data-toggle="collapse" type="button">
				<span class="sr-only">Toggle navigation</span>
			</button>
			<a class="navbar-brand" href="indexmain.php">OSU CS561</a>

		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
			<ul class="nav navbar-nav navbar-right">
				<li class="login"><a href="login.html"><form>
        <div class="h"></div>
</form></a>
				</li>
				<li class="recipe"><a href="recipemain.php">
					<?php
						echo 'Find ';
						echo $_SESSION['u_uid'];
						echo ' recipe';
					?></a>
				</li>
				<li class="potluck"><a href="potluck.html">Potluck</a>
				</li>
				<li class="userprofile"><a href="userprofile.html">
					<?php
						echo 'Find ';
						echo $_SESSION['u_uid'];
						echo ' profile';
					?></a>
				</li>
				<li class="logout"><a href="" onclick="logout()">Logout</a>
					<?php 
					   session_start();
					   if($_POST['action'] == 'call_this') {
					   	session_unset();
					   $_SESSION['u_uid'] = NULL;
					   header("Location: indexmain.php");
						}        
					?>
				</li>
				</li>
			</ul>
		</div>
	</div>
</nav>
<?php else: ?>
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-6" data-toggle="collapse" type="button">
				<span class="sr-only">Toggle navigation</span>
			</button>
			<a class="navbar-brand" href="indexmain.php">OSU CS561</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
			<ul class="nav navbar-nav navbar-right" action="includes/login.php" method="POST">
				<li class="login"><a href="login.html">Log In</a>
				</li>
				<li class="signup"><a href="signup.html">Sign Up</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
      <?php endif ?>

<div class="intro-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="intro-message">
					<h1>Restaurant Recommendation System</h1>

					<hr class="intro-divider" />
					<div class="input-group"><input class="form-control" id="RestaurantName" placeholder="Restaurant Name" type="text" /> <span class="input-group-btn"><button class="btn btn-default" id="button" type="button">Search</button> </span></div>
&nbsp;
					<div id="msg"></div>

				</div>
			</div>
		</div>
	</div>
</div>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<p><a href="information.html">Information</a></p>
				<p class="copyright text-muted small">Copyright &copy;OSU CS561 group 2018. All Rights Reserved</p>
			</div>
		</div>
	</div>
</footer>
<script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script><script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="index.js"></script></body><script src="index.php"></script></html>

