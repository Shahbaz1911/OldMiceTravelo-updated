<?php

if($_POST["submit"]) {
    $recipient="info@micetravelo.com";
    $name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$destination=$_POST["destination"];
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
	<meta name="viewport" content="width=device-width">
	<title>Mice Travelo - Best Travel Agency In Delhi</title>	
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/css/css.css">
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/css/flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/css/font-linearicons.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/new-fonts/flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/css/booking.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/css/swipebox.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="http://keralatourpackages.online/assets/css/travel-setting.css" type="text/css" media="all">
	<link rel="shortcut icon" href="http://keralatourpackages.online/images/favicon.png" type="image/x-icon">
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

<body class="single-product travel_tour-page travel_tour">
<div class="wrapper-container">
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
						<img src="http://keralatourpackages.online/images/logo.png" alt="Logo" width="147" height="58" class="logo_transparent_static">
						<img src="http://keralatourpackages.online/images/logo_sticky.png" alt="Sticky logo" width="147" height="58" class="logo_sticky">
					</a>
				</div>
				<nav class="width-navigation">
					<ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
						<li>
						<a href="http://keralatourpackages.online">Home</a></li>                     		
						<li class="current-menu-ancestor current-menu-parent"><a href="http://keralatourpackages.online/kerala/" >Kerala Packages</a></li>                      						
					    <li><a href="http://keralatourpackages.online/contact-us"> Contact Us</a></li>
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
	<div class="site wrapper-content">
		<div class="top_site_main" style="background-image:url(http://keralatourpackages.online/images/kerala-tour/top-heading-kerala.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="http://keralatourpackages.online" class="home">Home</a></li>
						<li><a href="http://keralatourpackages.online/kerala">Destinations</a></li>
						<li><a href="http://keralatourpackages.online/kerala">Kerala</a></li>
					</ul>
				</div>
				<h2 class="heading_primary">6 Nights 7 Days</h2></div>
		</div>
		<section class="content-area single-woo-tour">
			<div class="container">
				<div class="tb_single_tour product">
					<div class="top_content_single row">
						<div class="images images_single_left">
							<div class="title-single">
								<div class="title">
									<h1>Kerala</h1>
								</div>
								<div class="tour_code">
									<strong>Code: </strong>KER0607
								</div>
							</div>
							<div class="tour_after_title">
								<div class="meta_date">
									<span>6 NIGHTS 7 DAYS</span>
								</div>
								<div class="meta_values">
									<span>Inclusions:</span>
									<div class="group-icon">
											<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="Hotel"><i class="flaticon-holidays"></i></a> -- 
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Private Cab"><i class="flaticon-cart-1"></i></a> -- 
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Meals"><i class="flaticon-food"></i></a> --
											<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sightseeing"><i class="flaticon-eye"></i></a>											
									</div>
								</div>
								<div class="tour-share">
									<ul class="share-social">
										<li>
											<a target="_blank" class="facebook" href="#"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
											<a target="_blank" class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
										</li>
										<li>
											<a target="_blank" class="googleplus" href="#"><i class="fa fa-google"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div id="slider" class="flexslider">
								<ul class="slides">
									
									<li>
										<a href="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-2.jpg" class="swipebox" title=""><img width="813" height="384" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-2.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-3.jpg" class="swipebox" title=""><img width="813" height="384" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-3.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-4.jpg" class="swipebox" title=""><img width="813" height="384" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-4.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-5.jpg" class="swipebox" title=""><img width="813" height="384" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-5.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-6.jpg" class="swipebox" title=""><img width="813" height="384" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-6.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-7.jpg" class="swipebox" title=""><img width="813" height="384" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-7.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-8.jpg" class="swipebox" title=""><img width="813" height="384" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-8.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="http://keralatourpackages.online/images/tour/kerala-tour/sidebar/tour-ker-9.jpg" class="swipebox" title=""><img width="813" height="384" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-9.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-10.jpg" class="swipebox" title=""><img width="813" height="384" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-10.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-11.jpg" class="swipebox" title=""><img width="813" height="384" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-11.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-12.jpg" class="swipebox" title=""><img width="813" height="384" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-12.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-13.jpg" class="swipebox" title=""><img width="813" height="384" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-13.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-14.jpg" class="swipebox" title=""><img width="813" height="384" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-14.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
								</ul>
							</div>
							<div id="carousel" class="flexslider thumbnail_product">
								<ul class="slides">
									
									<li>
										<img width="100" height="100" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-3.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-4.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-5.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-6.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-7.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-8.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-9.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-10.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-11.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-12.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-13.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="http://keralatourpackages.online/images/kerala-tour/sidebar/tour-ker-14.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									
									
									
									
								</ul>
							</div>
							<div class="clear"></div>
							<div class="single-tour-tabs wc-tabs-wrapper">
								<ul class="tabs wc-tabs" role="tablist">
									<li class="description_tab active" role="presentation">
										<a href="#tab-description-tab" role="tab" data-toggle="tab">Description</a>
									</li>
									<li class="itinerary_tab_tab" role="presentation">
										<a href="#tab-itinerary-tab" role="tab" data-toggle="tab">Itinerary</a>
									</li>
									<li class="location_tab_tab" role="presentation">
										<a href="#tab-location-tab" role="tab" data-toggle="tab">Location</a>
									</li>
									<li class="reviews_tab" role="presentation">
										<a href="#tab-hotels-tab" role="tab" data-toggle="tab">Hotels</a>
									</li>
									<li class="reviews_tab" role="presentation">
										<a href="#tab-price-tab" role="tab" data-toggle="tab">Price</a>
									</li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--description panel entry-content wc-tab active" id="tab-description-tab">
										<h2>Kerala</h2>
										<p align="justify">Kerala, a state on India's tropical Malabar Coast, has nearly 600km of Arabian Sea shoreline. It's known for its palm-lined beaches and backwaters, a network of canals. Inland are the Western Ghats, mountains whose slopes support tea, coffee and spice plantations as well as wildlife. National parks like Eravikulam and Periyar, plus Wayanad and other sanctuaries, are home to elephants, langur monkeys and tigers.</p>
										
										<table class="tours-tabs_table">
											<tbody>
											<tr>
												<td><strong>PICK</strong></td>
												<td>Cochin Railway Station/Airport</td>
											</tr>
											<tr>
												<td><strong>DROP</strong></td>
												<td>Cochin Railway Station/Airport</td>
											</tr>
											<tr>
												<td><strong>INCLUDED</strong></td>
												<td>
														<table>
														<tbody>
														     <tr>
															<td ><i class="fa fa-check icon-tick icon-tick--on"></i>Hotel accommodation in well-appointed hotels.														</td>
															</tr>
															 <tr>
															<td ><i class="fa fa-check icon-tick icon-tick--on"></i>All local sight seeings & transfers by pvt. vehicle 														</td>
															</tr>
															 <tr>
															<td ><i class="fa fa-check icon-tick icon-tick--on"></i>Daily breakfast.														</td>
															</tr>
															
															<tr>
															<td><i class="fa fa-check icon-tick icon-tick--on"></i>Welcome drink on arrival.
															</td>
														</tr>
														<tr>															
															<td>
																<i class="fa fa-check icon-tick icon-tick--on"></i>All toll tax, parking fees, driver allowances.
															</td>
														</tr>
														<tr>															
															<td>
																<i class="fa fa-check icon-tick icon-tick--on"></i>All applicable hotel taxes.
															</td>
														</tr>
														</tbody>
													</table>
												</td>
											</tr>
											<tr>
												<td><b>NOT INCLUDED</b></td>
												<td>
													<table>
														<tbody>
														<tr>
															<td>
																<i class="fa fa-times icon-tick icon-tick--off"></i>Anything not mentioned under ‘Package Inclusions’.
															</td>
														</tr>
														<tr>
															<td>
																<i class="fa fa-times icon-tick icon-tick--off"></i>5% government service tax.
															</td>
														</tr>
														<tr>
															<td>
																<i class="fa fa-times icon-tick icon-tick--off"></i>All personal expenses, optional tours and extra meals.
															</td>
														</tr>
														<tr>
															<td><i class="fa fa-times icon-tick icon-tick--off"></i>Camera fees, alcoholic/non-alcoholic beverages and starters.
															</td>
														</tr>
														<tr>
															<td><i class="fa fa-times icon-tick icon-tick--off"></i>Medical and travel insurance.
															</td>
														</tr>
														</tbody>
													</table>
												</td>
											</tr>
											<tr>
												<td><b>CANCELLATION POLICY</b></td>
												<td>
													<table>
														<tbody>
														<tr>
															<td>
																<i class="fa fa-check icon-tick icon-tick--on"></i>Cancellations made 45 days or more before departure  -  10% of Package Cost
															</td>
														</tr>
														<tr>
															<td>
																<i class="fa fa-check icon-tick icon-tick--on"></i>Cancellations made 35 to 44 days before departure - 20% of Package Cost
															</td>
														</tr>
														<tr>
															<td>
																<i class="fa fa-check icon-tick icon-tick--on"></i>Cancellations made 22 to 34 days before departure  -   30% of Package Cost
															</td>
														</tr>
														<tr>
															<td><i class="fa fa-check icon-tick icon-tick--on"></i>Cancellations made 14 to 21 days before departure -  100% of Package Cost
															</td>
														</tr>
														<tr>
															<td><i class="fa fa-check icon-tick icon-tick--on"></i>Cancellations made Within 14 of departure - 100% of Package Cost 
															</td>
														</tr>
														</tbody>
													</table>
												</td>
											</tr>
											</tbody>
										</table>
										
									</div>
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--itinerary_tab panel entry-content wc-tab" id="tab-itinerary-tab">
										<div class="interary-item">
											<p><span class="icon-left">1</span></p>
											<div class="item_content">
												<h2><strong>Day 01 : Cochin</strong></h2>
												<p>Board your flight/ Train as per the schedule and arrive in Cochin and Check in to Cochin Hotel. After noon, proceed for Cochin Sightseeing. Visit the Dutch Palace , Jewish Synagogue ,St. Francis Church, Chinese Fishing Nets, Maraine drive Overnight stay @ Cochin</p>
												
											</div>
										</div>
										<div class="interary-item">
											<p><span class="icon-left">2</span></p>
											<div class="item_content">
												<h2><strong>Day 02 : Cochin To Munnar – 140 Kms / 4 Hrs</strong></h2>
												<p>After breakfast, proceeds To Munnar. On The way visit Cheeyapara & Vallara waterfalls. Check into the hotel .Evening visit Blossom garden. Overnight stay @ Munnar</p>
												
											</div>
										</div>
										<div class="interary-item">
											<p><span class="icon-left">3</span></p>
											<div class="item_content">
												<h2><strong>Day 03 : Munnar Sight Seeing</strong></h2>
												<p>After breakfast, proceed to Munnar Local sightseeing. Mattupaetty dam, Echo Point, photo point, Honey bee tree, Rose garden Etc...Overnight stay @ Munnar.</p>
											</div>
										</div>
										<div class="interary-item">
											<p><span class="icon-left">4</span></p>
											<div class="item_content">
												<h2><strong>Day 04 : Munnar To Thekkady</strong></h2>
												<p>After breakfast, check out of the hotel and drive to Thekkady. Upon arrival there, check into the hotel).In the afternoon, proceed for a boat cruise at Periyar Lake in Thekkady), visit the theatre for traditional Kalari Show/Kathakali.Spice garden. Overnight stay @Thekkady</p></div>
										</div>	
										<div class="interary-item">
											<p><span class="icon-left">5</span></p>
											<div class="item_content">
												<h2><strong>Day 05 : Thekkady To Alleppey</strong></h2>
												<p>After breakfast, Proceed to Alleppey .On arrival check in to resort, Enjoy the back water cruise at world famous canals in Venice of the East. Evening visit Alleppey Beach. Overnight stay @ Alleppey</p></div>
										</div>
										<div class="interary-item">
											<p><span class="icon-left">6</span></p>
											<div class="item_content">
												<h2><strong>Day 06 : Alleppey TO Kovalam</strong></h2>
												<p>After an early breakfast, check out from Alleppey and drive to Kovalam. On arrival at Trivandrum, en route visit Napier Museum and zoological park, and enjoy a walk through the lush green zoo (Closed on Mondays). Later in the evening, proceed towards Kovalam. On arrival, check in to the hotel and Enjoy on the beaches like hawa beach, light beach. Overnight stay @Kovalam</p></div>
										</div>											
									
										<div class="interary-item">
											<p><span class="icon-left">7</span></p>
											<div class="item_content">
												<h2><strong>Day 07 : Trivandrum/Cochin Drop</strong></h2>
												<p>After breakfast checkout and proceed to Trivandrum Padmanabha Swami Temple, After Darshan proceeds to board your train or flight.</p>
											</div>
										</div>
										
										
									</div>
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--location_tab panel entry-content wc-tab" id="tab-location-tab">
										<div class="video-container">
										<iframe src="https://www.google.com/maps/embed?pb=!1m52!1m12!1m3!1d1008130.6922151704!2d76.1590215593694!3d9.24335701135509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m37!3e0!4m5!1s0x3b080d514abec6bf%3A0xbd582caa5844192!2sKochi%2C+Kerala!3m2!1d9.9312328!2d76.26730409999999!4m5!1s0x3b0799794d099a6d%3A0x63250e5553c7e0c!2sMunnar%2C+Kerala!3m2!1d10.088933299999999!2d77.05952479999999!4m5!1s0x3b0653f4b0f74c11%3A0x13a6e9c5ab30cf35!2sThekkady%2C+Kerala!3m2!1d9.583920299999999!2d77.1182932!4m5!1s0x3b0884f1aa296b61%3A0xb84764552c41f85a!2sAlleppey%2C+Kerala!3m2!1d9.498066699999999!2d76.3388484!4m5!1s0x3b05a5090a19ec65%3A0xb67f315bc0b762ac!2sKovalam%2C+Kerala!3m2!1d8.4003984!2d76.97870759999999!4m5!1s0x3b05bbb805bbcd47%3A0x15439fab5c5c81cb!2sTrivandrum%2C+Kerala!3m2!1d8.5241391!2d76.9366376!5e0!3m2!1sen!2sin!4v1531478248958" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
										</div>
									</div>
									
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--location_tab panel entry-content wc-tab" id="tab-hotels-tab">
										<table id="customers" >
											<tr>
											<th>Destination</th>
											<th>No. Of Nights</th>
											<th>Standard Hotels</th>
											<th>Deluxe Hotels</th>
											<th>Premium Hotels</th>
											</tr>	
<tr>    
											<td>Cochin</td>
											<td>1</td>
											<td>Center point / North Center/Similar</td>
											<td>IMA House /Edassery Mansion/Similar</td>
											<td>Legacy / Dunes/Similar</td>
										   </tr>											
											<tr>    
											<td>Munnar</td>
											<td>2</td>
											<td>Nest Resort / Spice Jungle/Similar</td>
											<td>Green Ridge / Bell Mount/Similar</td>
											<td>Elysium Garden /Black Forest/Similar</td>
										   </tr>
<tr>    
											<td>Thekkady</td>
											<td>1</td>
											<td>White Fort/Blooming Paradaise/Similar</td>
											<td>Sandra Palace / Karar Gaden/Similar</td>
											<td>Holiday Vista/ Periyar Medows/Similar</td>
										   </tr>										   
										   <tr>    
											<td>Alleppey</td>
											<td>1</td>
											<td>Suvasam Lake Resort(Dlx)/Similar</td>
											<td>Suvasam Lake Resort ( Premium)/Similar</td>
											<td>Bonanza / Haveli/Similar</td>
										   </tr>
										   <tr>    
											<td>Kovalam</td>
											<td>1</td>
											<td>Hill N Sea View/ Jeevan/Similar</td>
											<td>Samudra Theeram / Beach N lake/Similar</td>
											<td>Samudra/ Sagara/Similar</td>
										   </tr>
 
										</table>
									</div>  
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--location_tab panel entry-content wc-tab" id="tab-price-tab">
										<table id="customers">

											<tr>
											<th>Hotels</th>
											<th>2 PAX </th>
											<th>4 PAX </th>
											<th>6 PAX </th>
											<th>10 PAX </th>
											
											</tr>  
											<tr>
											<td>Standard Hotels</td>
											<td>Per Person (INR -  15,100)</td>
										    <td>Per Person (INR -  12,250)</td>
											<td>Per Person (INR -  11,350)</td>
											<td>Per Person (INR -  10,450)</td>
											
											</tr>
											<tr> 
											<td>Deluxe Hotels</td>
											<td>Per Person (INR - 16,000)</td>
										    <td>Per Person (INR - 13,150)</td>
											<td>Per Person (INR - 12,250)</td>
											<td>Per Person (INR - 11,350)</td>
																					
										   </tr>
										   <tr>   
											<td>Premium Hotels</td>
											<td>Per Person (INR - 19,200)</td>
										    <td>Per Person (INR - 16,325)</td>
											<td>Per Person (INR - 15,450)</td>
											<td>Per Person (INR - 14,550)</td>											
										   </tr>
											<tr>    
											<td colspan="5" style="text-align:center;">Package price valid till 31 Sep 2018</td>											
										   </tr> 
										       
											
 
										</table>
									</div>  
								</div>
							</div>
							<div class="related tours">
								<h2>Related Tours</h2>
								<ul class="tours products wrapper-tours-slider">
								
									<li class="item-tour col-md-4 col-sm-6 product">
										<div class="item_border item-product">
											<div class="post_images">
												<a href="http://keralatourpackages.online/kerala/5nights-6days/">
													<span class="price">INR 9,750 Per person</span>
													<img width="950" height="700" src="http://keralatourpackages.online/images/kerala-tour/tour-7.jpg" alt="Discover Brazil" title="Discover Brazil">
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
												<span class="post_date">5 NIGHTS 6 DAYS</span>
												<div class="description">
													<p>Cochin (1 Night) Munnar (2 Nights) Thekkady (1 Night) Alleppey (1 Night)</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<a rel="nofollow" href="http://keralatourpackages.online/kerala/5nights-6days/" class="button product_type_tour_phys add_to_cart_button">Read more</a>
											</div>
										</div>
									</li>
									
									<li class="item-tour col-md-4 col-sm-6 product">
										<div class="item_border item-product">
											<div class="post_images">
												<a href="http://keralatourpackages.online/kerala/6nights-7days/">
											<span class="price">INR 11,350 Per person
												
											</span>
													<span class="onsale">Sale!</span>
													<img width="950" height="700" src="http://keralatourpackages.online/images/kerala-tour/tour-8.jpg" alt="Discover Brazil" title="Discover Brazil">
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
												<div class="description">
													<p>Cochin (1 Night) Munnar (2 Nights) Thekkady (1 Night) Alleppey (1 Night) Kovalam (1 Night)</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<a rel="nofollow" href="http://keralatourpackages.online/kerala/6nights-7days/" class="button product_type_tour_phys add_to_cart_button">Read more</a>
											</div>
										</div>
									</li>	
<li class="item-tour col-md-4 col-sm-6 product">
										<div class="item_border item-product">
											<div class="post_images">
												<a href="http://keralatourpackages.online/kerala/7nights-8days/">
													<span class="price">INR 12,350 Per person</span>
													<img width="950" height="700" src="http://keralatourpackages.online/images/kerala-tour/tour-6.jpg" alt="Discover Brazil" title="Discover Brazil">
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
												<span class="post_date">7 NIGHTS 8 DAYS</span>
												<div class="description">
													<p>Cochin (1 Night) Munnar (2 Nights) Thekkady (1 Night) Alleppey (1 Night) Kovlam (2 Nights</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<a rel="nofollow" href="http://keralatourpackages.online/kerala/7nights-8days/" class="button product_type_tour_phys add_to_cart_button">Read more</a>
											</div>
										</div>
									</li>									
								</ul>
							</div>
						</div>
						<div class="summary entry-summary description_single">
							<div class="affix-sidebar">
								<div class="entry-content-tour">
									<p class="price">
										<span class="text">Price:</span><span class="travel_tour-Price-amount amount">INR 11,350</span> <span class="text">Per Person</span>
									</p>
									<div class="clear"></div>
									<!-- <div class="booking">
										<div class="">
											<div class="form-block__title">
												<h4>Book the tour</h4>
											</div>
											<form id="tourBookingForm" method="POST" action="#">
												<div class="">
													<input name="first_name" value="" placeholder="First name" type="text">
												</div>
												<div class="">
													<input name="last_name" value="" placeholder="Last name" type="text">
												</div>
												<div class="">
													<input name="email_tour" value="" placeholder="Email" type="text">
												</div>
												<div class="">
													<input name="phone" value="" placeholder="Phone" type="text">
												</div>
												<div class="">
													<input type="text" name="date_book" value="" placeholder="Date Book" class="hasDatepicker">
												</div>
												
												<div class="spinner">
													<div class="rect1"></div>
													<div class="rect2"></div>
													<div class="rect3"></div>
													<div class="rect4"></div>
													<div class="rect5"></div>
												</div>
												<input class="btn-booking btn" value="Booking now" type="submit">
											</form>
										</div>
									</div> -->
									<!-- <div class="form-block__title custom-form-title"><h4>Or</h4></div> -->
									<div class="custom_from">
										<div role="form" class="wpcf7" lang="en-US" dir="ltr">
											<div class="screen-reader-response"></div>
											<form action="http://keralatourpackages.online/kerala/3nights-4days/" method="post" class="wpcf7-form"><br>

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
														<span class="error"></span>
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
											
										</div>
										
									</div>
								</div>
								<div class="widget-area align-left col-sm-3">
									<aside class="widget widget_travel_tour">
										<div class="wrapper-special-tours">
											<div class="inner-special-tours">
												<a href="http://keralatourpackages.online/kerala">
													<img width="950" height="700" src="http://keralatourpackages.online/images/kerala-tour/tour-1.jpg" alt="Discover Brazil" title="Discover Brazil"></a>
												<div class="item_rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="post_title"><h3>
													<a href="http://keralatourpackages.online/kerala" rel="bookmark">Kerala</a>
												</h3></div>
												<div class="item_price">
													<span class="price">INR 11,500 Per person</span>
												</div>
											</div>
											<div class="inner-special-tours">
												<a href="http://keralatourpackages.online/kerala">
													<span class="onsale">Sale!</span>
													<img width="950" height="700" src="http://keralatourpackages.online/images/kerala-tour/tour-2.jpg" alt="Discover Brazil" title="Discover Brazil"></a>
												<div class="item_rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="post_title"><h3>
													<a href="http://keralatourpackages.online/kerala" rel="bookmark">Kerala</a>
												</h3></div>
												<div class="item_price">
										<span class="price">INR 7,500 Per person
										</span>
												</div>
											</div>
											<div class="inner-special-tours">
												<a href="http://keralatourpackages.online/kerala">
													<img width="950" height="700" src="http://keralatourpackages.online/images/kerala-tour/tour-3.jpg" alt="Discover Brazil" title="Discover Brazil">
												</a>
												<div class="item_rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="post_title"><h3>
													<a href="http://keralatourpackages.online/kerala" rel="bookmark">Kerala</a>
												</h3></div>
												<div class="item_price">
													<span class="price">INR 11,500 Per person</span>
												</div>
											</div>
										</div>
									</aside>
								</div>
							</div>
						</div>
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
	<div class="wrapper-subscribe" style="background-image: url(http://keralatourpackages.online/images/bg_newletter.jpg)">
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
<!--end coppyright-->
<script type='text/javascript' src='http://keralatourpackages.online/assets/js/jquery.min.js'></script>
<script type='text/javascript' src='http://keralatourpackages.online/assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='http://keralatourpackages.online/assets/js/vendors.js'></script>
<script type='text/javascript' src='http://keralatourpackages.online/assets/js/jquery.swipebox.min.js'></script>
<script type='text/javascript' src='http://keralatourpackages.online/assets/js/theme.js'></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCaQjbVDR1vRh2iS_V3jLBXRrkQxmoxycQ'></script>
<script type='text/javascript' src='http://keralatourpackages.online/assets/js/gmap.js'></script>
</body>
</html>