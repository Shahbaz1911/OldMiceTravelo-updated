<?php

if($_POST["submit"]) {
    $recipient="info@micetravelo.com";
    $name=$_POST["name"];
	$email=$_POST["email"];
	$subject="subject";	    
    $message=$_POST["message"];
    $mailBody="Name: $name\nEmail: $email\nSubject: $subject\nmessage: $message";  

    mail($recipient, $subject, $mailBody, "From: $sender <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Mice Travelo - Best Travel Agency In Delhi Global Trip Holidays Packages | Best Himachal Tour Packages | Kullu manali tour package | Manali Tour Packages | Manali Holiday Packages | Manali trips packages  | Himachal Tour  Packages | Himachal Holiday Packages | Vacation packages in india | Best Holiday Packages In India  | Best  Domestic  Holiday Packages | Domestic Tour  Packages | Himachal  Honeymoon Tour Packages |  Kinnaur  Tour Packages  |  Kinnaur  Holiday Packages | Leh Ladakh Tour Packages | Jammu & Kashmir Tour Packages | Rajasthan Tour Packages | Goa Tour Packages | North India Tour Packages | Best North India Tour Packages | Andaman Tour Packages | Kerala Tour Packages | Uttranchal Tour Packages | Group Tour Packages| Best Family Tour Packages | Best Honeymoon packages | Best Himachal Honeymoon Tour Packages</title>	
	<link rel="stylesheet" href="assets/css/css.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-linearicons.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/travel-setting.css" type="text/css" media="all">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122966679-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-122966679-1');
	</script>
	<!--Start of Zendesk Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
	$.src="https://v2.zopim.com/?4yfkcxDv0jCG8bXJieOVTVqRmTgMZYqm";z.t=+new Date;$.
	type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
	</script>
	<!--End of Zendesk Chat Script-->

</head>
<body class="archive">
<div class="wrapper-container">
	<header id="masthead" class="site-header sticky_header affix-top">
		<div class="header_top_bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<aside id="text-15" class="widget_text">
							<div class="textwidget">
								<ul class="top_bar_info clearfix">
									<li><i class="fa fa-clock-o"></i> Mon - Sat 10.00 AM - 06.00 PM. Sunday Closed</li>
								</ul>
							</div>
						</aside>
					</div>
					<div class="col-sm-8 topbar-right">
						<aside id="text-7" class="widget widget_text">
							<div class="textwidget">
								<ul class="top_bar_info clearfix">
									<li><i class="fa fa-phone"></i>+91-99900-52288</li>
									<li><i class="fa fa-phone"></i>+91-9864-9864-85</li>
									<li><i class="fa fa-phone"></i>+91-11-49025288</li>
									<li class="hidden-info">
										<i class="fa fa-envelope"></i>info@micetravelo.com
									</li>
								</ul>
							</div>
						</aside>
						
					</div>
				</div>
			</div>
		</div>
		<div class="navigation-menu">
			<div class="container">
				<div class="menu-mobile-effect navbar-toggle button-collapse" data-activates="mobile-demo">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
				<div class="width-logo sm-logo">
					<a href="" title="Travel" rel="home">
						<img src="images/logo.png" alt="Logo" width="147" height="58" class="logo_transparent_static">
						<img src="images/logo_sticky.png" alt="Sticky logo" width="147" height="58" class="logo_sticky">
					</a>
				</div>
				<nav class="width-navigation">
					<ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
						<li>
							<a href="index.php">Home</a></li>
                        <li><a href="#">About Us</a></li>							
						

						<li><a href="destinations.php">Destinations</a>
						<ul class="sub-menu">
								<li><a href="himachal/himachal.php">Himachal Pradesh</a></li>
								<li><a href="uttarakhand/uttarakhand.php">Uttarakhand</a></li>
								<li><a href="kerala/kerala.php">Kerala</a></li>
								<li><a href="kashmir/kashmir.php">Kashmir</a></li>
															
						    </ul>
						
						</li>
						<li><a href="happy.php">Happy Customers</a></li>
                        <li><a href="#">Payment</a></li>						
					    <li class="current-menu-ancestor current-menu-parent"><a href="contact.php">Contact</a></li>
						<li class="menu-right">
							<ul>
								<li id="travel_social_widget-2" class="widget travel_search">
									<div class="search-toggler-unit">
										<div class="search-toggler">
											<i class="fa fa-search"></i>
										</div>
									</div>
									<div class="search-menu search-overlay search-hidden">
										<div class="closeicon"></div>
										<form method="get" class="search-form" action="tours.php">
											<input type="search" class="search-field" placeholder="Search ..." value="" name="s" title="Search for:">
											<input type="submit" class="search-submit font-awesome" value="&#xf002;">
										</form>
										<div class="background-overlay"></div>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(images/banner/top-heading-contact.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.php" class="home">Home</a></li>
						<li>Contact Us</li>
					</ul>
				</div>
				<h1 class="heading_primary">Contact Us</h1></div>
		</div>
		<section class="content-area">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-9 alignleft">
						<div class="video-container">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13998.787750409845!2d77.114439!3d28.698711!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf90b1d1d842cd7c!2sMICE+TRAVELO+EXPERTS+PVT+LTD!5e0!3m2!1sen!2sin!4v1522666555359" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="pages_content padding-top-4x">
							<h4>CONTACT INFORMATION</h4>
							<div class="contact_infor">
								<ul>
									<li><label><i class="fa fa-map-marker"></i>ADDRESS</label>
										<div class="des">Delhi Office: 285,2nd Floor, Vardhman Grand Plaza Manglam Place, Sec 3 Rohini, New Delhi-110085, India</div>
									</li>
									<li><label><i class="fa fa-phone"></i>TEL NO</label>
										<div class="des">+91-9990052288</div>
									</li>
									<li><label><i class="fa fa-phone"></i>TEL NO</label>
										<div class="des">+91-1149025288</div>
									</li>
									<li><label><i class="fa fa-envelope"></i>EMAIL</label>
										<div class="des">info@micetravelo.com</div>
									</li>
									<li>
										<label><i class="fa fa-clock-o"></i>WORKING HOURS</label>
										<div class="des">Mon – Fri 10:00 AM – 6:00 PM
											<br>
											We are closed on Sundays
										</div>
									</li>									
								</ul>
							</div>
						</div>
						<div class="wpb_wrapper pages_content">
							<h4>Have a question?</h4>
							<div role="form" class="wpcf7">
								<div class="screen-reader-response"></div>
								<form action="thankyou.php" method="post" class="wpcf7-form" novalidate>
									<div class="form-contact">
										<div class="row-1x">
											<div class="col-sm-6">
													<span class="wpcf7-form-control-wrap your-name">
														<input type="text" name="name" value="" size="40" class="wpcf7-form-control" placeholder="Your name*">
													</span>
											</div>
											<div class="col-sm-6">
													<span class="wpcf7-form-control-wrap your-email">
														<input type="email" name="email" value="" size="40" class="wpcf7-form-control" placeholder="Email*">
													</span>
											</div>
										</div>
										<div class="form-contact-fields">
												<span class="wpcf7-form-control-wrap your-subject">
													<input type="text" name="subject" value="" size="40" class="wpcf7-form-control" placeholder="Subject">
												</span>
										</div>
										<div class="form-contact-fields">
											<span class="wpcf7-form-control-wrap your-message">
												<textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Message"></textarea>
												 </span><br>
											<input type="submit" name="submit" class="wpcf7-form-control wpcf7-submit">
										</div>
									</div>
								</form>
                                
                                <?=$thankYou ?>
                                
							</div>
						</div>
                        
					</div>
					<div class="widget-area col-sm-3 align-left">
						<aside class="widget widget_text">
							<img src="images/images-sidebar/sidebanner-tour.png" alt="">
						</aside>
						<aside class="widget widget_text">
							<img src="images/images-sidebar/sidebanner-tour.png" alt="">
						</aside>
						<aside class="widget widget_text">
							<img src="images/images-sidebar/sidebanner-tour.png" alt="">
						</aside>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="wrapper-footer wrapper-footer-newsletter">
		<div class="main-top-footer">
			<div class="container">
				<div class="row">
					<aside class="col-sm-3 widget_text"><h3 class="widget-title">CONTACT</h3>
						<div class="textwidget">
							<div class="footer-info">
								<p><b>Mice Travelo Expert Pvt.Ltd.</b>
								</p>
								<ul class="contact-info">
									<li><i class="fa fa-map-marker fa-fw"></i>Delhi Office: 285,2nd Floor, Vardhman Grand Plaza Manglam Place, Sec 3 Rohini, New Delhi-110085, India</li>
									<li><i class="fa fa-phone fa-fw"></i>+91-9990052288</li>
									<li><i class="fa fa-phone fa-fw"></i>+91-1149025288</li>
									<li>
										<i class="fa fa-envelope fa-fw"></i><a href="mailto:info@micetravelo.com">info@micetravelo.com</a>
									</li>
								</ul>
							</div>
						</div>
					</aside>
					<aside class="col-sm-3 widget_text"><h3 class="widget-title">INFORMATION</h3>
						<div class="textwidget">
							<ul class="menu list-arrow">
								<li><a href="#">Press Centre</a></li>
								<li><a href="#">Travel News</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="privacy-policy.php">Privacy Policy</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</aside>
					<aside class="col-sm-3 widget_text"><h3 class="widget-title">Our Menu</h3>
						<div class="textwidget">
							<ul class="menu list-arrow">
								<li><a href="about-us.php">About us</a></li>
								<li><a href="#">Happy Customers</a></li>
								<li><a href="career.php">Career</a></li>								
								<li><a href="privacy-policy.php">Privacy Policy</a></li>
								<li><a href="contact.php">Contact US</a></li>
						</ul>
						</div>
					</aside>
					<aside class="col-sm-3 custom-instagram widget_text">
						<h3 class="widget-title">Office and Team</h3>
						<div class="textwidget">
						<ul>
								<li><img src="images/Office/1.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="images/Office/2.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="images/Office/3.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="images/Office/4.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="images/Office/5.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="images/Office/6.jpg" alt="Office" class="img-rounded"></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div>
		<div class="container wrapper-copyright">
			<div class="row">
				<div class="col-sm-6">
					<div><p>Copyright © 2018 Mice Travelo. All Rights Reserved.</p></div>
				</div>
				<div class="col-sm-6">
					<aside id="text-5" class="widget_text">
						<div class="textwidget">
							<ul class="footer_menu">
								<li><a href="#">Terms of Use</a></li>
								<li>|</li>
								<li><a href="privacy-policy.php">Privacy Policy</a></li>
								<li>|</li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/travelexpertsadvice"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper-subscribe" style="background-image: url(images/home/bg_newletter.jpg)">
		<div class="subscribe_shadow"></div>
		<div class="form-subscribe parallax-section stick-to-bottom form-subscribe-full-width">
			<div class="shortcode_title text-white title-center title-decoration-bottom-center margin-bottom-3x">
				<div class="title_subtitle">TO RECEIVE OUR BEST MONTHLY DEALS</div>
				<h3 class="title_primary">JOIN THE NEWSLETTER</h3>
				<span class="line_after_title"></span>
			</div>
			<div class="form-subscribe-form-wrap">
				<aside class="mailchimp-container">
					<form class="epm-sign-up-form" name="epm-sign-up-form" action="#" method="post">
						<div class="epm-form-field">
							<label for="epm-email">Email Address</label>
							<input type="email" placeholder="Email Address" name="epm-email" tabindex="8" class="email" id="epm-email" value="">
						</div>


						<input type="submit" name="epm-submit-chimp" value="Sign Up Now" data-wait-text="Please wait..." tabindex="10" class="button btn epm-sign-up-button epm-submit-chimp">
					</form>
				</aside>
			</div>
		</div>
	</div>
</div>
<!--end coppyright-->
<script type='text/javascript' src='assets/js/jquery.min.js'></script>
<script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='assets/js/vendors.js'></script>
<script type='text/javascript' src='assets/js/theme.js'></script>
</body>
</html>