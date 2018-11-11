<?php
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
  				<li class="index"><a href="indexmain.php">Find Restaurant</a>
  				</li>
  				<!-- <li class="potluck"><a href="potluck.html">Potluck</a>
  				</li> -->
  				<!-- <li class="userprofile"><a href="userprofile/userprofilemain.php">
  					userprofile</a>
  				</li> -->
  				<li class="logout"><a href="indexmain.php" onclick="logout()">Logout</a>
  					<?php
  					   	session_start();
  					   	if($_POST['action'] == 'call_this') {
  					   		session_unset();
  					   		$_SESSION['u_uid'] = NULL;
                  session_destroy();
  					   		header("location: indexmain.php");
                  // exit();
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
          <li class="signup"><a href="signup/signup.html">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
        <?php endif ?>
