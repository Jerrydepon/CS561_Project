<?php
  include('header.php');
?>

<!-- <?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>OSU CS561</title>
	<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	<link href="recipe.css?v=1.44" rel="stylesheet" />
</head>
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
				<li class="indexpage"><a href="indexmain.php">Index</a>
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
							header("Refresh:0; url=indexmain.php");
						}
					?>
				</li>

			</ul>
		</div>
	</div>
</nav> -->

<div class="intro-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="re-recipe">
					<div style="color:#FFFF26"> <h3>Food Recommendation:</h3> </div>
					<?php include "recipe_recommand.php"; ?>

					</div>
					<div class="intro-message">
						<h1>Find a Recipe</h1>

						<hr class="intro-divider" />
					<div class="input-group"><input class="form-control" id="recipename" placeholder="Find a Recipe" type="text" /> <span class="input-group-btn"><button class="btn btn-default" id="button" type="button">Search</button> </span></div>
&nbsp;
					<div id="msg"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
  include('footer.php');
?>
