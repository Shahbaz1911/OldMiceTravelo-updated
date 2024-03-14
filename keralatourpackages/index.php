<?php

if($_POST["submit"]) {
    $recipient="info@micetravelo.com";
    $name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];	    
    $travel=$_POST["travel"];
    $mailBody="Name: $name\nEmail: $email\nPhone No.: $phone\nTravel Date(DD/MM/YYYY): $travel";  

    mail($recipient, $subject, $mailBody, "From: $sender <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
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
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/css/css.css">
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/css/flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/new-fonts/flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/css/font-linearicons.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/css/travel-setting.css" type="text/css" media="all">
	<link rel="shortcut icon" href="http://keralatourpackages.online/images/favicon.png" type="image/x-icon">
	<!--Start of Zendesk Chat Script-->
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?4yfkcxDv0jCG8bXJieOVTVqRmTgMZYqm";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
<!--End of Zendesk Chat Script-->
</head>
<body class="transparent_home_page"> <!-- class="transparent_home_page" -->
<div class="wrapper-container">
    <section id="home">
	<header id="masthead" class="site-header sticky_header affix-top">
		<div class="header_top_bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<aside id="text-15" class="widget_text">
							<div class="textwidget">
								<ul class="top_bar_info clearfix">
									<li><i class="fa fa-clock-o"></i>Mon - Sat 10.00 AM - 06.00 PM. Sunday Closed</li>
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
					<a href="http://keralatourpackages.online" title="Travel" rel="home">					     
					    <img src="http://keralatourpackages.online/images/logo1.png" alt="Logo" width="147" height="58" class="logo_transparent_static">			
						<img src="http://keralatourpackages.online/images/logo_sticky.png" alt="Sticky logo" width="147" height="58" class="logo_sticky">
					</a>
				</div>
				<nav class="width-navigation">
					<ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
						<li class="current-menu-ancestor current-menu-parent">
						<a href="http://keralatourpackages.online">Home</a></li>
                        <li><a href="#about-us">Why Choose Us</a></li>		
						<li><a href="http://keralatourpackages.online/kerala/">Kerala Packages</a></li>                        						
                        <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>												
					    <li><a href="http://keralatourpackages.online/contact-us" >Contact Us</a></li>
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
										<form method="get" class="search-form" action="#">
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
	</section>
	<div class="site wrapper-content">
		<div class="home-content" role="main">
			<div class="wrapper-bg-video">
				<video poster="video/video_slider3.jpg" playsinline autoplay muted loop>
					<source src="video/33014974448888.mp4" type="video/mp4">
				</video>
				<div class="content-slider">
					<p>FIND YOUR SPECIAL KERALA TOUR TODAY</p>
					<h2>WITH MICE TRAVELO</h2>
					<p><a href="http://keralatourpackages.online/kerala" class="btn btn-slider">VIEW TOURS </a></p>
				</div>
			</div>
            <section id="booking">
			<div class="slider-tour-booking">
				<div class="container">
					<div class="travel-booking-search hotel-booking-search travel-booking-style_1">
						<form  action="http://keralatourpackages.online/" id="tourBookingForm" method="post">
							<ul class="hb-form-table">
								<li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">
										<input type="text" name="name" value="" placeholder="Name">
									</div>
								</li>
								<li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">
										<input type="text" name="email" value="" placeholder="Email">
									</div>
								</li>
								<li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">
										<input type="text" name="phone" value="" placeholder="Phone No">
									</div>
								</li>	
                                <li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">
										<input type="text" name="travel" value="" placeholder="Travel Date (DD/MM/YYYY)">
									</div>
								</li>						
								
								<li class="hb-submit">
									<input type="submit" name="submit">
								</li>																
							</ul>
							

						</form>
					</div>
				</div>
			</div>
			<section id="about-us">
			<div class="container two-column-respon mg-top-6x mg-bt-6x">
				<div class="row">
					<div class="col-sm-12 mg-btn-6x">
						<div class="shortcode_title title-center title-decoration-bottom-center">
							<h3 class="title_primary">WHY CHOOSE US?</h3><span class="line_after_title"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="wpb_column col-sm-3">
						<div class="widget-icon-box widget-icon-box-base iconbox-center">
							<div class="boxes-icon circle" style="font-size:30px;width:80px; height:80px;line-height:80px">
								<span class="inner-icon"><i class="vc_icon_element-icon flaticon-transport-6"></i></span>
							</div>
							<div class="content-inner">
								<div class="sc-heading article_heading">
									<h4 class="heading__primary">Personalized matching</h4></div>
								<div class="desc-icon-box">
									<div>Provides many travel Plan who are the best fit for your trip.</div>
								</div>
							</div>
						</div>
					</div>
					<div class="wpb_column col-sm-3">
						<div class="widget-icon-box widget-icon-box-base iconbox-center">
							<div class="boxes-icon " style="font-size:30px;width:80px; height:80px;line-height:80px">
								<span class="inner-icon"><i class="vc_icon_element-icon flaticon-sand"></i></span>
							</div>
							<div class="content-inner">
								<div class="sc-heading article_heading">
									<h4 class="heading__primary">Value for Money</h4></div>
								<div class="desc-icon-box">
									<div>Mice Travlo big agency buying power means fantastic value deals for you</div>
								</div>
							</div>
						</div>
					</div>
					<div class="wpb_column col-sm-3">
						<div class="widget-icon-box widget-icon-box-base iconbox-center">
							<div class="boxes-icon " style="font-size:30px;width:80px; height:80px;line-height:80px">
								<span class="inner-icon"><i class="vc_icon_element-icon flaticon-travel-2"></i></span>
							</div>
							<div class="content-inner">
								<div class="sc-heading article_heading">
									<h4 class="heading__primary">Beautiful Places</h4></div>
								<div class="desc-icon-box">
									<div>enables these specialists to design truly remarkable travel experiences.</div>
								</div>
							</div>
						</div>
					</div>
					<div class="wpb_column col-sm-3">
						<div class="widget-icon-box widget-icon-box-base iconbox-center">
							<div class="boxes-icon circle" style="font-size:30px;width:80px; height:80px;line-height:80px">
								<span class="inner-icon"><i class="vc_icon_element-icon flaticon-travelling"></i></span>
							</div>
							<div class="content-inner">
								<div class="sc-heading article_heading">
									<h4 class="heading__primary">24/7 support from our partners</h4></div>
								<div class="desc-icon-box">
									<div>gives you complete peace of mind for the duration of your vacation.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</section>
    <section id="packages">
	<div class="padding-top-6x padding-bottom-6x section-background" style="background-image:url(images/home/bg-popular.jpg)">
				<div class="container">
					<div class="shortcode_title text-white title-center title-decoration-bottom-center">
						<div class="title_subtitle">TAKE A LOOK AT OUR</div>
						<h3 class="title_primary">MOST POPULAR TOURS</h3>
						<span class="line_after_title" style="color:#ffffff"></span>
					</div>
					<div class="row wrapper-tours-slider">
						<div class="tours-type-slider list_content" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":2}, "992":{"items":3}, "1200":{"items":4}}'>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="http://keralatourpackages.online/kerala/3nights-4days/" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">INR 8,200 PP</span>
											</span>
												<img src="images/kerala-tour/tour-9.jpg" alt="" title="">
											</a>
											<div class="group-icon">
											<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="Hotel"><i class="flaticon-holidays"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Private Cab"><i class="flaticon-cart-1"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Meals"><i class="flaticon-food"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sightseeing"><i class="flaticon-eye"></i></a>											
										     </div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="http://keralatourpackages.online/kerala/3nights-4days/" rel="bookmark">Kerala</a>
											</h4></div>
											<span class="post_date">3 NIGHTS 4 DAYS</span>
											<p>Munnar (2 Nights) Allappy(1 Night)<br><br><br><br></p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="http://keralatourpackages.online/kerala/3nights-4days/" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>							
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="http://keralatourpackages.online/kerala/4nights-5days/" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">INR 8,900 PP</span>
											</span>
												<img src="images/kerala-tour/tour-1.jpg" alt="" title="">
											</a>
											<div class="group-icon">
											<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="Hotel"><i class="flaticon-holidays"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Private Cab"><i class="flaticon-cart-1"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Meals"><i class="flaticon-food"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sightseeing"><i class="flaticon-eye"></i></a>											
										     </div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="http://keralatourpackages.online/kerala/4nights-5days/" rel="bookmark">Kerala</a>
											</h4></div>
											<span class="post_date">4 NIGHTS 5 DAYS</span>
											<p>Munnar (2 Nights) Thekkady(1 Night) Allappy(1 Night)<br><br><br></p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="http://keralatourpackages.online/kerala/4nights-5days/" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>					
							
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="http://keralatourpackages.online/kerala/5nights-6days/" class="travel_tour-LoopProduct-link">
											<span class="price">
												<ins><span class="travel_tour-Price-amount amount">INR 9,750 PP</span></ins>
											</span>
												<span class="onsale">Sale!</span>
												<img src="images/kerala-tour/tour-2.jpg" alt="" title="">
											</a>
											<div class="group-icon">
											<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="Hotel"><i class="flaticon-holidays"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Private Cab"><i class="flaticon-cart-1"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Meals"><i class="flaticon-food"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sightseeing"><i class="flaticon-eye"></i></a>											
										     </div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="http://keralatourpackages.online/kerala/5nights-6days/" rel="bookmark">Kerala</a>
											</h4></div>
											<span class="post_date">5 NIGHTS 6 DAYS </span>
											<p>Cochin (1 Night) Munnar (2 Nights) Thekkady(1 Night) Alleppey (1 Night)<br><br><br></p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="http://keralatourpackages.online/kerala/5nights-6days/" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="http://keralatourpackages.online/kerala/6nights-7days/" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">INR 11,350 PP</span>
											</span>
												<img src="images/kerala-tour/tour-3.jpg" alt="" title="">
											</a>
											<div class="group-icon">
											<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="Hotel"><i class="flaticon-holidays"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Private Cab"><i class="flaticon-cart-1"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Meals"><i class="flaticon-food"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sightseeing"><i class="flaticon-eye"></i></a>											
										     </div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="http://keralatourpackages.online/kerala/6nights-7days/" rel="bookmark">Kerala</a>
											</h4></div>
											<span class="post_date">6 NIGHTS 7 DAYS</span>
											<p>Cochin (1 Night) Munnar (2 Nights) Thekkady(1 Night) Alleppey (1 Night) Kovlam (1 Night)<br><br></p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="http://keralatourpackages.online/kerala/6nights-7days/" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="http://keralatourpackages.online/kerala/7nights-8days/" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">INR 12,350 PP</span>
											</span>
												<img src="images/kerala-tour/tour-5.jpg" alt="" title="">
											</a>
											<div class="group-icon">
											<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="Hotel"><i class="flaticon-holidays"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Private Cab"><i class="flaticon-cart-1"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Meals"><i class="flaticon-food"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sightseeing"><i class="flaticon-eye"></i></a>											
										     </div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="http://keralatourpackages.online/kerala/7nights-8days/" rel="bookmark">Kerala</a>
											</h4></div>
											<span class="post_date">7 NIGHTS 8 DAYS </span>
											<p>Cochin (1 Night) Munnar (2 Nights) Thekkady (1 Night) Alleppey (1 Night) Kovlam (2 Nights)<br><br></p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="http://keralatourpackages.online/kerala/7nights-8days/" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="http://keralatourpackages.online/kerala/7nights-8days-1/" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">INR 13,050 PP</span>
 											</span>
												<img src="images/kerala-tour/tour-6.jpg" alt="" title="">
											</a>
											<div class="group-icon">
											<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="Hotel"><i class="flaticon-holidays"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Private Cab"><i class="flaticon-cart-1"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Meals"><i class="flaticon-food"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sightseeing"><i class="flaticon-eye"></i></a>											
										     </div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="http://keralatourpackages.online/kerala/7nights-8days-1/" rel="bookmark">Kerala with Kanyakumari</a>
											</h4></div>
											<span class="post_date"> 7 NIGHTS 8 DAYS</span>
											<p>Cochin (1 Night) Munnar (2 Nights) Thekkady (1 Night) Alleppey (1 Night) Kovlam (1 Night) Kanyakumari (1 Night)</p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="http://keralatourpackages.online/kerala/7nights-8days-1/" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>						
						</div>
					</div>
				</div>
			</div>	
</section>			
		<div class="padding-top-6x padding-bottom-6x bg__shadow section-background" style="background-image:url(images/bg-pallarax.jpg)">
				<div class="container">
					<div class="shortcode_title text-white title-center title-decoration-bottom-center">
						<div class="title_subtitle">SOME STATISTICS ABOUT MICE TRAVELO</div>
						<h3 class="title_primary">CENTER ACHIEVEMENTS</h3>
						<span class="line_after_title" style="color:#ffffff"></span>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="stats_counter text-center text-white">
								<div class="wrapper-icon">
									<i class="flaticon-airplane"></i>
								</div>
								<div class="stats_counter_number">5,532</div>
								<div class="stats_counter_title">Customers</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="stats_counter text-center text-white">
								<div class="wrapper-icon">
									<i class="flaticon-island"></i>
								</div>
								<div class="stats_counter_number">102</div>
								<div class="stats_counter_title">Destinations</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="stats_counter text-center text-white">
								<div class="wrapper-icon">
									<i class="flaticon-globe"></i>
								</div>
								<div class="stats_counter_number">7,096</div>
								<div class="stats_counter_title">Tours</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="stats_counter text-center text-white">
								<div class="wrapper-icon">
									<i class="flaticon-people"></i>
								</div>
								<div class="stats_counter_number">12</div>
								<div class="stats_counter_title">Tour types</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center padding-top-6x">
							<a href="#" class="icon-btn" title="Tour HTML Template - Travel HTML Template" target="_blank">
								<i class="flaticon-cart"></i> Purchase Tours
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="section-white padding-top-6x padding-bottom-6x">
				<div class="container">
					<div class="shortcode_title title-center title-decoration-bottom-center">
						<h3 class="title_primary">DEALS AND DISCOUNTS</h3><span class="line_after_title"></span>
					</div>
					<div class="row wrapper-tours-slider">
						<div class="tours-type-slider list_content" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":3}, "992":{"items":3}, "1200":{"items":3}}'>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="http://keralatourpackages.online/kerala/4nights-5days/" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">INR 8,900 PP</span>
											</span>
												<img src="images/kerala-tour/tour-8.jpg" alt="" title="">
											</a>
											<div class="group-icon">
											<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="Hotel"><i class="flaticon-holidays"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Private Cab"><i class="flaticon-cart-1"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Meals"><i class="flaticon-food"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sightseeing"><i class="flaticon-eye"></i></a>											
										     </div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="http://keralatourpackages.online/kerala/4nights-5days/" rel="bookmark">Kerala</a>
											</h4></div>
											<span class="post_date">4 NIGHTS 5 DAYS </span>
											<p>Munnar (2 Nights)Thekkady(1 Night) Allappy(1 Night)</p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="http://keralatourpackages.online/kerala/4nights-5days/" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="http://keralatourpackages.online/kerala/5nights-6days/" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">INR 9,750 PP</span>
 											</span>
												<img src="images/kerala-tour/tour-9.jpg" alt="" title="">
											</a>
											<div class="group-icon">
											<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="Hotel"><i class="flaticon-holidays"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Private Cab"><i class="flaticon-cart-1"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Meals"><i class="flaticon-food"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sightseeing"><i class="flaticon-eye"></i></a>											
										     </div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="http://keralatourpackages.online/kerala/5nights-6days/" rel="bookmark">Kerala</a>
											</h4></div>
											<span class="post_date">5 NIGHTS 6 DAYS </span>
											<p>Cochin (1 Night) Munnar (2 Nights) Thekkady(1 Night) Alleppey (1 Night)</p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="http://keralatourpackages.online/kerala/5nights-6days/" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="http://keralatourpackages.online/kerala/6nights-7days/" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">INR 11,350 PP</span>
											</span>
												<img src="images/kerala-tour/tour-10.jpg" alt="" title="">
											</a>
											<div class="group-icon">
											<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="Hotel"><i class="flaticon-holidays"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Private Cab"><i class="flaticon-cart-1"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Meals"><i class="flaticon-food"></i></a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sightseeing"><i class="flaticon-eye"></i></a>											
										     </div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="http://keralatourpackages.online/kerala/6nights-7days/" rel="bookmark">Kerala</a>
											</h4></div>
											<span class="post_date">6 NIGHTS 7 DAYS </span>
											<p>Cochin (1 Night) Munnar (2 Nights) Thekkady(1 Night) Alleppey (1 Night) Kovlam (1 Night)</p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="http://keralatourpackages.online/kerala/6nights-7days/" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
							
						</div>
					</div>
				</div>
			</div>

			<div class="bg__shadow padding-top-6x padding-bottom-6x section-background" style="background-image:url(images/bg-pallarax.jpg)">
				<div class="container">
					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-8">
							<div class="discounts-tour">
								<h3 style="color:#ffffff" class="discounts-title">SPECIAL TOUR IN APRIL, DISCOVER KERALA FOR 100 CUSTOMERS WITH
									<span>DISCOUNT 50%</span></h3>
								<span class="line" style="color:#ffffff"></span>
								<p style="color:#ffffff">It’s limited seating! Hurry up</p>
								<div class="row centered text-center" id="myCounter"></div>
								<div class="col-sm-12 text-center padding-top-2x">
									<a href="#" class="icon-btn"><i class="flaticon-airplane-4"></i> Get tour </a>
								</div>
							</div>
						</div>
						<div class="col-sm-2"></div>
					</div>
				</div>
			</div>
        <section id="testimonials">
			<div class="section-white padding-top-6x padding-bottom-6x">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="shortcode_title title-center title-decoration-bottom-center">
								<h2 class="title_primary">Tours Reviews</h2>
								<span class="line_after_title"></span>
							</div>
							<div class="shortcode-tour-reviews wrapper-tours-slider">
								<div class="tours-type-slider" data-autoplay="true" data-dots="true" data-nav="false" data-responsive='{"0":{"items":1}, "480":{"items":1}, "768":{"items":1}, "992":{"items":1}, "1200":{"items":1}}'>
									<div class="tour-reviews-item">
										<div class="reviews-item-info">
											<img alt="" src="images/avata.jpeg" class="avatar avatar-95 photo" height="90" width="90">
											<div class="reviews-item-info-name">Prabhjeet Singh</div>
											<div class="reviews-item-rating">
												<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
											</div>
										</div>
										<div class="reviews-item-content">
											<h3 class="reviews-item-title">
												<a href="#">Goa Tour</a>
											</h3>
											<div class="reviews-item-description">I had taken the package for goa from mice travelo experts.. and they had given me very nice package. one thing is about this company is that they are so rigid about their payment terms.</div>
										</div>
									</div>
									<div class="tour-reviews-item">
										<div class="reviews-item-info">
											<img alt="" src="images/avata.jpeg" class="avatar avatar-95 photo" height="90" width="90">
											<div class="reviews-item-info-name">Harsh Kumar</div>
											<div class="reviews-item-rating">
												<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
											</div>
										</div>
										<div class="reviews-item-content">
											<h3 class="reviews-item-title">
												<a href="#">Andaman and Nicobar Tour</a>
											</h3>
											<div class="reviews-item-description">Thanks Tanu Mam, for managing our Andaman trip so well. It was a nice experience. Hotels, food and all hospitality was good. Mice Travelo is a trustworthy and helping service provider.</div>
										</div>
									</div>
									<div class="tour-reviews-item">
										<div class="reviews-item-info">
											<img alt="" src="images/avata.jpeg" class="avatar avatar-95 photo" height="90" width="90">
											<div class="reviews-item-info-name">Deepanjali Sharma</div>
											<div class="reviews-item-rating">
												<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
											</div>
										</div>
										<div class="reviews-item-content">
											<h3 class="reviews-item-title">
												<a href="#">Vaishno Devi Tour</a>
											</h3>
											<div class="reviews-item-description">we booked a tour for vaishno devi from mice travelo expert . we were very happy with mice travelo  services and thanks for ms tanu who coordinate with us all time during the trip. Thanks to them</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="shortcode_title title-center title-decoration-bottom-center">
								<h2 class="title_primary">Latest Post</h2>
								<span class="line_after_title"></span>
							</div>
							<div class="row">
								<div class="post_list_content_unit col-sm-6">
									<div class="feature-image">
										<a href="#" class="entry-thumbnail">
											<img width="370" height="260" src="images/blog/201H.jpg" alt="">
										</a>
									</div>
									<div class="post-list-content">
										<div class="post_list_inner_content_unit">
											<h3 class="post_list_title">
												<a href="#" rel="bookmark">Where to Travel in 2018. Tried and Tested (15) Travel Destinations</a>
											</h3>
											<div class="wrapper-meta">
												<div class="date-time">April 7, 2018</div>
												<div class="post_list_cats">
													<a href="#" rel="category tag">Travel</a>
												</div>
											</div>
											<div class="post_list_item_excerpt">Where to Travel in 2018. Tried and Tested (15) Travel Destinations...</div>
										</div>
									</div>
								</div>
								<div class="post_list_content_unit col-sm-6">
									<div class="feature-image">
										<a href="#" class="entry-thumbnail">
											<img width="370" height="260" src="images/blog/86H.jpg" alt="">
										</a>
									</div>
									<div class="post-list-content">
										<div class="post_list_inner_content_unit">
											<h3 class="post_list_title">
												<a href="#" rel="bookmark">The perfect summer body</a>
											</h3>
											<div class="wrapper-meta">
												<div class="date-time">September 6, 2018</div>
												<div class="post_list_cats">
													<a href="#" rel="category tag">Travel</a>
												</div>
											</div>
											<div class="post_list_item_excerpt">The perfect summer body.......</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</section>
		</div>
	</div>  
	<section id="contact-us">
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
									<li><i class="fa fa-map-marker fa-fw"></i> Delhi Office: 285, 2nd Floor, Vardhman Grand Plaza Manglam Place, Sec 3 Rohini, New Delhi-110085, India</li>
									<li><i class="fa fa-phone fa-fw"></i> +91-99900-52288</li>
									<li><i class="fa fa-phone fa-fw"></i> +91-9864-9864-85</li>
									<li><i class="fa fa-phone fa-fw"></i> +91-11-49025288</li>
									<li>
										<i class="fa fa-envelope fa-fw"></i><a href="mailto:info@micetravelo.com"> info@micetravelo.com</a>
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
								<li><a href="http://keralatourpackages.online/privacy-policy/">Privacy Policy</a></li>
								<li><a href="http://keralatourpackages.online/contact-us/">Contact Us</a></li>
							</ul>
						</div>
					</aside>
					<aside class="col-sm-3 widget_text"><h3 class="widget-title">Our Menu</h3>
						<div class="textwidget">
							<ul class="menu list-arrow">
								<li><a href="#">About us</a></li>
								<li><a href="#">Happy Customers</a></li>
								<li><a href="#">Career</a></li>								
								<li><a href="http://keralatourpackages.online/privacy-policy/">Privacy Policy</a></li>
								<li><a href="http://keralatourpackages.online/contact-us/">Contact US</a></li>
							</ul>
						</div>
					</aside>
					<aside class="col-sm-3 custom-instagram widget_text">
						<h3 class="widget-title">Office and Team</h3>
						<div class="textwidget">
							<ul>
								<li><img src="http://keralatourpackages.online/images/Office/1.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="http://keralatourpackages.online/images/Office/2.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="http://keralatourpackages.online/images/Office/3.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="http://keralatourpackages.online/images/Office/4.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="http://keralatourpackages.online/images/Office/5.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="http://keralatourpackages.online/images/Office/6.jpg" alt="Office" class="img-rounded"></li>
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
								<li><a href="http://keralatourpackages.online/privacy-policy/">Privacy Policy</a></li>
								<li>|</li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/traveloexperts/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
	</section>

	<div class="wrapper-subscribe" style="background-image: url(images/bg_newletter.jpg)">
		<div class="subscribe_shadow"></div>
		<div class="form-subscribe parallax-section stick-to-bottom form-subscribe-full-width">
			<div class="shortcode_title text-white title-center title-decoration-bottom-center margin-bottom-3x">
				<div class="title_subtitle">To receive our best monthly deals</div>
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
<script type='text/javascript' src='http://keralatourpackages.online/assets/js/jquery.min.js'></script>
<script type='text/javascript' src='http://keralatourpackages.online/assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='http://keralatourpackages.online/assets/js/vendors.js'></script>
<script type='text/javascript' src='http://keralatourpackages.online/assets/js/owl.carousel.min.js'></script>
<script type="text/javascript" src="http://keralatourpackages.online/assets/js/jquery.mb-comingsoon.min.js"></script>
<script type="text/javascript" src="http://keralatourpackages.online/assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="http://keralatourpackages.online/assets/js/jquery.counterup.min.js"></script>
<script type='text/javascript' src='http://keralatourpackages.online/assets/js/theme.js'></script>
</body>
</html>