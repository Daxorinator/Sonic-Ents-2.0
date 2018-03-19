<!DOCTYPE html>
<html lang="en">
	<head>
		<meta content="allow">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Sonic Ents">
		<meta name="author" content="Seán 'CrashOverride' Kelly">

		<title>Sonic Ents 2.0</title>

		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
		<link href="css/grayscale.css" rel="stylesheet">
	</head>

	<body id="page-top">

		<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
			<div class="container">
				<a class="navbar-brand js-scroll-trigger" href="#page-top">Sonic Ents 2.0</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					Menu
					<i class="fa fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#tickets">Tickets</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Intro Header -->
		<header class="masthead">
			<div class="intro-body">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 mx-auto">
							<h1 class="brand-heading">Sonic Ents</h1>
							<p class="intro-text">Everything you need,
								<br>to host the perfect event.</p>
							<a href="#about" class="btn btn-circle js-scroll-trigger">
								<i class="fa fa-angle-double-down animated"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</header>

	<!-- Services Section -->
	<div class="container-fluid">
		<section id="about" class="content-section text-center">
			<h2>Services</h2>
			<div class="row">
				<div class="col-sm-6 mx-auto">
					<p>Mobile DJ Hire</p>
					<p>A3/A4 Poster Design & Printing</p>
					<p>PSA Licensed Security (Doors and Static)</p>
				</div>
				<div class="col-sm-6 mx-auto">
					<p>Social Media & On-Street Promotion</p>
					<p>Sound & Lighting Engineers & Equipment Hire</p>
					<p>Consultation & Advice</p>
				</div>
			</div>
		</section>
	</div>

		<!-- Ticket Sales Section -->
		<section id="tickets" class="download-section content-section text-center">
			<div class="container">
				<div class="col-lg-8 mx-auto">
					<h2>Buying tickets?</h2>
					<p>You can order your tickets online, using your PayPal account or Credit Card.</p>
					<div id="embedTS_FLKMG" style="width:100%;"></div>
					<script type="text/javascript">
						(function() {
							var el = document.createElement("script");
							el.type = "text/javascript";
							el.async = true;
							el.src = "https://www.ticketsource.eu/ticketshop/FLKMG";
							var s = document.getElementsByTagName("script")[0];
							s.parentNode.insertBefore(el, s);
						})();
					</script>
				</div>
			</div>
		</section>

		<!-- Contact Section -->
		<section id="contact" class="content-section text-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<h2>Contact</h2>
						<ul class="list-inline banner-social-buttons">
							<li class="list-inline-item">
								<a href="https://www.facebook.com/" class="btn btn-default btn-lg">
									<i class="fab fa-facebook"></i>
									<span class="network-name">Facebook</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="http://instagram.com/" class="btn btn-default btn-lg">
									<i class="fab fa-instagram"></i>
									<span class="network-name">Instagram</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="snapchat.html" class="btn btn-default btn-lg">
									<i class="fab fa-snapchat-ghost"></i>
									<span class="network-name">SonicentsIRL</span>
								</a>
							</li> <br><br>
							<li class="list-inline-item">
								<a href="mailto:info@sonicents.ie" class="btn btn-default btn-lg">
									<i class="fas fa-envelope"></i>
									<span class="network-name">info@sonicents.ie</span>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="tel:083-834-6719" class="btn btn-default btn-lg">
									<i class="fas fa-phone"></i>
									<span class="network-name">083 834 6719</span>
								</a>
							</li><br><br>
							<div class="form-area">  
									<form role="form" name="contactform" method="POST" action="index.php">
										<br style="clear:both">
										<h3 style="margin-bottom: 25px; text-align: center;">Leave a message</h3>
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
										</div>
										<div class="form-group">
											<textarea class="form-control" type="textarea" name="message" id="message" placeholder="Message" maxlength="5000" rows="12" required></textarea>                   
										</div>
										<input type="submit" id="submit" value="submit" name="submit" class="btn pull-right"></input>
									</form>
							</div>
							<?php
								if(isset($_POST['email'])) {
								
										// EDIT THE 2 LINES BELOW AS REQUIRED
										$email_to = "daxorinator@gmail.com";
										$email_subject = "Sonic-Ents:" $_POST['subject'];
								
										function died($error) {
												// your error code can go here
												echo "We are very sorry, but there were error(s) found with the form you submitted. ";
												echo "These errors appear below.<br /><br />";
												echo $error."<br /><br />";
												echo "Please go back and fix these errors.<br /><br />";
												die();
										}
								
								
										// validation expected data exists
										if(!isset($_POST['name']) ||
												!isset($_POST['email']) ||
												!isset($_POST['subject']) ||
												!isset($_POST['message'])) {
												died('We are sorry, but there appears to be a problem with the form you submitted.');       
										}
								
										
								
										$name = $_POST['name']; // required
										$email = $_POST['email']; // required
										$mobile = $_POST['mobile']; // required
										$subject = $_POST['subject']; // not required
										$message = $_POST['message']; // required
								
										$error_message = "";
										$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
								
									if(!preg_match($email_exp,$email)) {
										$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
									}
								
										$string_exp = "/^[A-Za-z .'-]+$/";
								
									if(!preg_match($string_exp,$name)) {
										$error_message .= 'The name you entered does not appear to be valid.<br />';
									}
								
									if(!preg_match($string_exp,$subject)) {
										$error_message .= 'The subject you entered does not appear to be valid.<br />';
									}
								
									if(strlen($message) < 5) {
										$error_message .= 'The message you entered do not appear to be valid.<br />';
									}
								
									if(strlen($error_message) > 0) {
										died($error_message);
									}
								
										$email_message = "Form details below.\n\n";
								
										
										function clean_string($string) {
											$bad = array("content-type","bcc:","to:","cc:","href");
											return str_replace($bad,"",$string);
										}
								
										
								
										$email_message .= "Name: ".clean_string($name)."\n";
										$email_message .= "Email: ".clean_string($email)."\n";
										$email_message .= "Phone: ".clean_string($mobile)."\n";
										$email_message .= "Subject: ".clean_string($subject)."\n";
										$email_message .= "Message: ".clean_string($message)."\n";
								
								// create email headers
								$headers = 'From: '.$email_from."\r\n".
								'Reply-To: '.$email_from."\r\n" .
								'X-Mailer: PHP/' . phpversion();
								@mail($email_to, $email_subject, $email_message, $headers);?>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="container text-center">
				<p>Copyright &copy; Seán Kelly 2018</p>
			</div>
		</footer>

		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- jQuery Easing -->
		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Custom scripts for this Website -->
		<script src="js/grayscale.min.js"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>

	</body>

</html>
