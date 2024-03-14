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
    <form class="form-signin" action="form.php" method="post">
      <img class="mb-4" src="images/logo.png" alt="" width="147" height="58">
      <h1 class="h4 mb-3 font-weight-normal">Fill up the form below to tell us what you're looking for</h4>
      
	  
	  
      <input type="text"  name="name" class="form-control" placeholder="Enter your Name" required autofocus>    
	  
	
      <input type="text"  name="email" class="form-control" placeholder="Enter Your E-mail" required>
	  
	  
	  <input type="text"  name="phone" class="form-control" placeholder="Enter Your Phone No" required>
	  
	  
	  
      <input type="text"  name="nights" class="form-control" placeholder="Enter Your No of Nights" required>
	  
	  
	  
      <input type="text"  name="adults" class="form-control" placeholder="Enter Your No of Adults (12+ Years)" required>
	  
	  
	  
      <input type="text"  name="children" class="form-control" placeholder="Enter Your No of Kids (7-11 Years)" required>
	  
	  
	
      <input type="text"  name="child" class="form-control" placeholder="Enter Your No of Kids (1-6 Years)" required>
	  
	  
	  
      <input type="text"  name="message" class="form-control" placeholder="Enter Your Message" required>
	  
      <input class="btn btn-lg btn-primary btn-block" name="submit" type="submit" value="Send Enquiry">
	  
	  <p class="mt-5 mb-3 text-muted"><?=$thankYou ?></p>
	  
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
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