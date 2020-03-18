<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Book Nook</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<header>

<!-- Navigation Bar -->
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNav">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- Site name -->
			<a href="index.php" class="navbar-brand">Text-Book Nook</a>
		</div>
		<div class="collapse navbar-collapse" id="myNav">
			<ul class="nav navbar-nav">
				<li><a href="index.php" title="Home">Home</a></li>
				<li><a href="catalog.php" title="">Catalog</a></li>
			</ul>

			<?php
				if(isset($_SESSION['userId'])){
					echo '<ul class="nav navbar-nav navbar-right"><li><a href="myaccount.php"><button type="button" class="myaccount_btn"><span class="glyphicon glyphicon-user"></span> My Account</button></a></li><li><form class="logout_form" action="includes/logout.inc.php" method="post"><a href="#"><button type="submit" name="logout_submit" class="logout_btn"><span class="glyphicon glyphicon-log-out"></span> Logout</button></a></form></li></ul>';
				}else{
					echo '<ul class="nav navbar-nav navbar-right"><li><a href="#"><button type="button" class="signup_btn" data-toggle="modal" data-target="#signup_modal"><span class="glyphicon glyphicon-user"></span> Sign Up</button></a></li>
					<li><a href="#"><button type="button" class="signin_btn" data-toggle="modal" data-target="#signin_modal"><span class="glyphicon glyphicon-log-in"></span> Sign In</button></a></li></ul>';
				}
			?>
		</div>

		<!-- Sign Up Modal -->
		<div class="modal" id="signup_modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<form class="text-center" method="post" action="includes/signup.inc.php">
						<button type="button" class="close close_btn" data-dismiss="modal"><span>&times;</span></button>
						<p class="signup_header h3 mb-4">Sign Up</p>
						<hr>
						<!-- Inputs -->
						<input type="text" name="username" id="username" class="signup_username form-control mb-4" placeholder="Username">
						<input type="email" name="email" id="signup_email" class="signup_email form-control mb-4" placeholder="E-mail">
						<input type="password" name="password" id="signup_password" class="signup_password form-control mb-4" placeholder="Password">
						<input type="password" name="confirm_password" id="signup_cpw" class="signup_cpw form-control mb-4" placeholder="Confirm Password">
						<!-- Sign Up Confirmation -->
						<button type="submit" name="signup-submit" class="btn btn-success btn-block my-4 signup_confirm">Sign Up</button>
						<p class="already_member">Already a member? <a data-toggle="modal" data-target="#signin_modal" data-dismiss="modal" data-target="#signup_modal" class="already_member_link">Sign In</a></p>
					</form>
				</div>
			</div>
		</div>

		<!-- Sign In Modal -->
		<div class="modal" id="signin_modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<form class="text-center" method="post" action="includes/signin.inc.php">
						<button type="button" class="close close_btn" data-dismiss="modal"><span>&times;</span></button>
						<p class="signin_header h3 mb-4">Sign In</p>
						<hr>
						<!-- Inputs -->
						<input type="text" name="username" id="signin_username" class="signin_username form-control mb-4" placeholder="Username">
						<input type="password" name="pwd" id="signin_password" class="signin_password form-control mb-4" placeholder="Password">
						<button type="submit" name="signin-submit" class="btn btn-info btn-block my-4 signin_confirm">Sign In</button>
						<p class="not_member">Not a member? <a data-toggle="modal" data-target="#signup_modal" data-dismiss="modal" data-target="#signin_modal" class="not_member_link">Register</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</nav>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</header>
</html>