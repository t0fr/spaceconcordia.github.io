<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width = device-width, initial-scale = 1">

	<title>Space Concordia - Contact Us</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="contact.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="shortcut icon" type="image/png" href="/favicon.png">
</head>

<body>
	<!-- NAVBAR -->
	<div class="navbar-wrapper">
		<div class="container">
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html"><img alt="Brand" src="img/sclogo_header.png"></a>
					</div> <!-- .navbar-header -->

					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.html">Home</a></li>
							<li><a href="aboutus.html">About Us</a></li>
							<li><a href="http://spaceconcordia.wixsite.com/spaceconcordiablog">Blog</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Divisions<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="spacecraft.html">Spacecraft</a></li>
									<li><a href="rocketry.html">Rocketry</a></li>
									<li><a href="robotics.html">Robotics</a></li>
									<li><a href="projects.html">Special Projects</a></li>
								</ul>
							</li>
							<li><a href="sponsors.html">Sponsors</a></li>
							<li><a href="join.html">Join the Team!</a></li>
							<li><a href="opensource.html">Open Source</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li class="active"><a href="donate.html">Donate</a></li>
						</ul>
					</div><!-- .navbar -->
				</div><!-- .container -->
			</nav>
		</div><!-- .container -->
	</div><!-- .navbar-wrapper -->
	<!-- END OF NAVBAR -->

	<!-- CAROUSEL HEADER -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<!-- FIRST SLIDE -->
			<!-- if you want to modify the background picture, replace the faq.png picture in the img folder with desired picture. -->
			<div class="item active">
				<img class="first-slide" src="img/contact_header.jpg" alt="Contact Us">
				<div class="container">
					<div class="carousel-caption">
						<h1>Contact Us</h1>
						<p>Have a question? Check out the <a href="faq.html">FAQ</a> to see if your question hasn't been answered already.</p>
					</div>
				</div>
			</div>
			<!-- END OF FIRST SLIDE -->
		</div>
	</div>
	<!-- END OF CAROUSEL -->

	<div class="container marketing">
		<div class="col-lg-12">
			<form id="contact_form" action="contact.php" method="POST" enctype="multipart/form-data">
				<div class="row">
					<label for="department">Question regarding:</label><br />
					<select name="department">
						<option value="">Select...</option>
						<option value="internal">Membership</option>
						<option value="external">External affairs</option>
						<option value="sponsorship">Sponsorship</option>
						<option value="internal">Division-Specific</option>
						<option value="social">Social Events</option>
						<option value="president">Others</option>
					</select>
				</div>
				<div class="row">
					<label for="name"><br />Name</label><br />
					<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
				</div>
				<div class="row">
					<label for="email"><br />Email</label><br />
					<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
				</div>
				<div class="row">
					<label for="message"><br />Message</label><br />
					<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br /><br />
				</div>
				<input id="submit_button" type="submit" value="Submit" />
			</form>	
		</div>
	</div>

	<hr class="featurette-divider">

	<div class="container marketing">
		<div class="follow us">
			<div class="col-lg-12">
				<h1>Follow Us</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<p><!-- Social Media Icons -->
					<a href="https://www.facebook.com/Space.Concordia"><i class="fa fa-facebook-official" aria-hidden="true" style="font-size:36px"></i></a>&nbsp;
					<a href="https://twitter.com/SpaceConcordia"><i class="fa fa-twitter" aria-hidden="true" style="font-size:36px"></i></a>&nbsp;
					<a href="https://www.instagram.com/SpaceConcordia/"><i class="fa fa-instagram" aria-hidden="true" style="font-size:36px"></i></a>&nbsp;
					<a href="https://www.youtube.com/user/SpaceConcordia"><i class="fa fa-youtube" aria-hidden="true" style="font-size:36px"></i></a>&nbsp;
					<a href="https://www.linkedin.com/company/space-concordia"><i class="fa fa-linkedin-square" aria-hidden="true" style="font-size:36px"></i></a>
				</p>
			</div>
		</div><!-- .row -->
	</div><!-- .container marketing -->
</div>
</div>

<hr class="featurette-divider" id="dividerone">
<!-- map -->
<div id="map"></div>
<!-- end map -->
<hr class="featurette-divider" id="dividertwo">

<!-- footer -->
<div class="container footer">
	<footer>
		<p class="pull-right"><a href="#">Back to top</a></p>
		<p>&copy; 2016 <a href="index.html">Space Concordia</a> &middot; All rights reserved.</p>
	</footer>
</div><!-- end footer -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaGU0-6aZH48QaiiiaurSz2Ugiepb5-7g"></script>
<script src="maps.js"></script>

<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
