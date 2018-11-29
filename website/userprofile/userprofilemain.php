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
				<li class="restaurant"><a href="../indexmain.php">Find Restaurant</a>
				</li>
				<li class="recipe"><a href="../recipemain.php">Find Recipe</a>
				</li>
				<li class="discussion"><a href="http://omygod613.pythonanywhere.com/">Discussion</a>
         		 </li>
				<li class="userprofile"><a href="userprofilemain.php">
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
                  			session_destroy();
  					   		header("Location: ../indexmain.php");
                  			exit();
  						}
  					?>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="intro-header">
	<div class="infos">
		<h2> User Profile
		<hr>
		<form class="info_form" action="userprofile.php" method="POST">
			<h3>Old Name: <input type="text" id="ouid" name="ouid"><br>
			<!-- <h3>Password: <input type="password" id="pwd" name="pwd"><br> -->
			<h3>New Name: <input type="text" id="nuid" name="nuid"><br>
			<h3>New Email: <input type="text" id="nemail" name="nemail"><br>
			<p ><h4>Please select your food preference: <br>
			<div class='checkboxes'>
			<input type="checkbox" id="beef" value="1" name="beef"> beef
            <input type="checkbox" id="pork" value="1" name="pork"> pork
            <input type="checkbox" id="chicken" value="1" name="chicken"> chicken
            <input type="checkbox" id="lamb" value="1" name="lamb"> lamb
            <input type="checkbox" id="duck" value="1" name="duck"> duck
            <input type="checkbox" id="fish" value="1" name="fish"> fish
            <input type="checkbox" id="shrimp" value="1" name="shrimp"> shrimp
			</div>
<!-- 			<input name="submit" type="submit" value="submit">
 -->			<p id="smt_p">
                                <input align="center" type="submit" name="submit" id="sbm_btn" value="submit change">
                            </p>
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
