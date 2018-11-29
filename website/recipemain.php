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
          <li class="discussion"><a href="http://omygod613.pythonanywhere.com/">Discussion</a>
          </li>
  				<li class="userprofile"><a href="userprofile/userprofilemain.php">
  					User Profile</a>
  				</li>
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

<div class="intro-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="re-recipe">
					<div style="color:#FFFF26"> <h3>Food Recommendation:</h3> </div>
					<a href="rcm_result.php" target="_blank" style="color:#FFFFFF">
						<?php include ('recipe_recommand.php'); ?>
					</a>
					</div>
					<div class="intro-message">
						<h1>Find a Recipe</h1>

						<hr class="intro-divider" />
					<div class="input-group">
						<input class="form-control" id="recipename" placeholder="Find a Recipe" type="text" /> 
						<span class="input-group-btn">
							<select name="category" id="category">
							<option value="All" selected="selected">All</option>
							　<option value="Title">Title</option>
							　<option value="Ingredients">Ingredients</option>
							　<option value="Instructions">Instructions</option>
							</select>
							<button class="btn btn-default" id="button" type="button">Search</button> 
						</span>
					</div>
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
<script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="recipe.js"></script>
</body>
<script src="recipe.php"></script>
</html>
