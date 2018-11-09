<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>OSU CS561</title>
	<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	<link href="userprofile.css?v=1.44" rel="stylesheet" />
</head>
<?php if ($_SESSION['u_uid']): ?>
<body>
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
						echo 'Hi ';
						echo $_SESSION['u_uid'];
					?></a>
				</li>
				<li class="logout"><a href="" onclick="logout()">Logout</a>
					<?php
					   	session_start();
					   	if($_POST['action'] == 'call_this') {
					   		session_unset();
					   		$_SESSION['u_uid'] = NULL;
					   		// header("Location: indexmain.php");
					   		header("Refresh:0");
						}
					?>
				</li>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="intro-header">
	<div class="infos">
		<h2> User Profile
		<hr>
		<form class="info_form" action="change.php" method="get">
				action="/action_page.php"
			<h3>Old Name: <input type="text" id="ouid" name="ouid"><br>
			<h3>Password: <input type="password" id="pwd" name="pwd"><br>
			<h3>New Name: <input type="text" name="fname"><br>
			<h3>Old Email: <input type="text" id="oemail" name="oemail"><br>
			<h3>New Email: <input type="text" id="nemail" name="nemail"><br>
			<p ><h4>Please select your food preference: <br>
			<div class='checkboxes'>
			<input type="checkbox" name="beef" value="Bike" checked="checked"> Beef<br>
			<input type="checkbox" name="pork" value="Car" checked="checked"> Pork<br>
			<input type="checkbox" name="chicken" value="Car" checked="checked"> Chicken<br>
			<input type="checkbox" name="lamb" value="Car" checked="checked"> Lamb<br>
			<input type="checkbox" name="duck" value="Car" checked="checked"> Duck<br>
			<input type="checkbox" name="fish" value="Car" checked="checked"> Fish<br>
			<input type="checkbox" name="shrimp" value="Car" checked="checked"> Shrimp<br>
			</div>
			<input name="sub" type="submit" value="Submit">
			</form>
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
<script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script><script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="userprofile.js"></script></body><script src="userprofile.php"></script></html>
