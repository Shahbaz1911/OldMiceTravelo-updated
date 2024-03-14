<?php

if($_POST["submit"]) {
    $recipient="info@micetravelo.com";
    $name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$nights=$_POST["nights"];
	$adults=$_POST["adults"];
	$children=$_POST["children"];
	$child=$_POST["child"];	   
    $message=$_POST["message"];
    $mailBody="Name: $name\n\nEmail: $email\n\nPhone No: $phone\n\nDestination: $destination\n\nNo of Nights: $nights\n\nNo of Adults(12+ Years): $adults\n\nNo of Children (7 - 11 Years): $children\n\nNo of Children (1 - 6 Years): $child\n\nmessage: $message";  

    mail($recipient, $destination, $mailBody, "From: $email <$email>");

    $thankYou="<p>Thank you! Your message has been sent successfully. We will revert shortly</p>";
}

?>


<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Award winning travel agency in India offering deals on India tour packages. Travel to India with our India travel guide and customized tour packages.">
    <meta name="keywords" content="India Travel, Travel to India, India Tour, Indian holiday,Indian holidays,India Holiday,India Tour and Travel, India Tour Agent,Travel To India Tours">	
	<title>Mice Travelo - Best Travel Agency In Delhi</title>
    <link rel="canonical" href="www.keralatourpackages.online" />	
	<link rel="stylesheet" href="pop-up/swc.css">
	<link rel="stylesheet" href="assets/css/css.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/new-fonts/flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-linearicons.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/signin.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/travel-setting.css" type="text/css" media="all">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>
<body class="text-center">
    <form action="5n-6d-him.php" method="post" class="wpcf7-form"><br>

												<p>Fill up the form below to tell us what you're looking for</p>
												
												<p><?=$thankYou ?></p>
												<p>
													<span class="wpcf7-form-control-wrap your-name">
														<input type="text" name="name" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Name*">
														
													</span>
												</p>
												<p>
													<span class="wpcf7-form-control-wrap your-email">
														<input type="email" name="email" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Email*">
													
													</span>
												</p>
												<p>
													<span class="wpcf7-form-control-wrap your-email">
														<input type="phone" name="phone" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Phone No.*">
														
													</span>
												</p>
												<p>
													<span class="wpcf7-form-control-wrap your-email">
														<input type="phone" name="destination" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="Destination*">
														<span class="error"><?php echo $destinationErr;?></span>
													</span>
												</p>
												<p>
													<span class="wpcf7-form-control-wrap your-email">
														<input type="phone" name="nights" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="No of Nights*">
														
													</span>
												</p>
												<p>
													<span class="wpcf7-form-control-wrap your-email">
														<input type="phone" name="adults" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="No of Adults (12+ Years)*">
														
													</span>
												</p>
												<p>
													<span class="wpcf7-form-control-wrap your-email">
														<input type="phone" name="children" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="No of Children (7 - 11 Years)*">
														
													</span>
												</p>
												<p>
													<span class="wpcf7-form-control-wrap your-email">
														<input type="phone" name="child" value="" size="40" class="wpcf7-form-control" aria-invalid="false" placeholder="No of Children (1 - 6 Years)*">
														
													</span>
												</p>
												
												<p>
													<span class="wpcf7-form-control-wrap your-message">
														<textarea name="message" cols="40" rows="10" class="wpcf7-form-control" aria-invalid="false" placeholder="Message"></textarea>
														
													</span>
												</p>
												<p>
													<input type="submit" name="submit" value="Send Enquiry" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span>
													
												</p>
											</form>

<script type='text/javascript' src='assets/js/jquery.min.js'></script>
<script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='assets/js/vendors.js'></script>
<script type='text/javascript' src='assets/js/owl.carousel.min.js'></script>
<script type="text/javascript" src="assets/js/jquery.mb-comingsoon.min.js"></script>
<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
<script type='text/javascript' src='assets/js/theme.js'></script>
</body>
</html>