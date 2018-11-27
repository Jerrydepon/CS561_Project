<?php
  include('header.php');
?>

<div class="intro-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="intro-message">
					<h1>Restaurant Recommendation System</h1>

					<hr class="intro-divider" />
					<div class="input-group"><input class="form-control" id="RestaurantName" placeholder="Restaurant Name" type="text" />
					 <span class="input-group-btn">
					 <select name="category" id="category">
							<option value="All" selected="selected">All</option>
							　<option value="Name">Restaurant</option>
							　<option value="City">City</option>
							</select>
					<!-- </div> -->
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
<script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script><script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script src="index.js"></script></body><script src="index.php"></script></html>