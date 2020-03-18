<?php
	require "header.php";
?>

	<main>
		<!-- Carousel -->
		<div id="home_carousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#home_carousel" data-slide-to="0" class="active"></li>
				<li data-target="#home_carousel" data-slide-to="1"></li>
				<li data-target="#home_carousel" data-slide-to="2"></li>
			</ul>

			<!-- Wrapper for Slides -->
			<div class="carousel-inner">
				<div class="item active" id="carousel_pic">
					<a href="catalog.php"><img src="images/carousel1.png"></a>
					<div class="carousel-caption">
						<h3>BROWSE OUR CATALOG!</h3>
					</div>
				</div>
				<div class="item" id="carousel_pic2">
					<img src="images/carousel2.png">
					<div class="carousel-caption">
						<h3>SPEAK DIRECTLY WITH PEERS!</h3>
					</div>
				</div>
				<div class="item" id="carousel_pic3">
					<a data-toggle="modal" data-target="#signup_modal" class="carousel_signup"><img src="images/carousel3.png"></a>
					<div class="carousel-caption">
						<h3>NEED AN ACCOUNT? SIGN UP HERE!</h3>
					</div>
				</div>
			</div>

			<!-- Left and Right Controls -->
			<a class="left carousel-control" href="#home_carousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#home_carousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</main>

<?php
	require "footer.php";
?>