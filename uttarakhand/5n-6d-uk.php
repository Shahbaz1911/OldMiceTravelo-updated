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
	<link rel="stylesheet" href="../assets/css/css.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="../assets/css/flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" href="../assets/css/font-linearicons.css" type="text/css" media="all">
	<link rel="stylesheet" href="../assets/new-fonts/flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" href="../assets/css/booking.css" type="text/css" media="all">
	<link rel="stylesheet" href="../assets/css/swipebox.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="../assets/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="../assets/css/travel-setting.css" type="text/css" media="all">
	<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">	
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
					<a href="../index.php" title="Travel" rel="home">
						<img src="../images/logo.png" alt="Logo" width="147" height="58" class="logo_transparent_static">
						<img src="../images/logo_sticky.png" alt="Sticky logo" width="147" height="58" class="logo_sticky">
					</a>
				</div>
				<nav class="width-navigation">
					<ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
						<li>
							<a href="../index.php">Home</a></li>
                        <li><a href="#">About Us</a></li>							
						

						<li class="current-menu-ancestor current-menu-parent"><a href="destinations.php">Destinations</a>
						<ul class="sub-menu">
								<li><a href="../himachal/himachal.php">Himachal Pradesh</a></li>
								<li><a href="../uttarakhand/uttarakhand.php">Uttarakhand</a></li>
								<li><a href="../kerala/kerala.php">Kerala</a></li>
								<li><a href="../Kashmir/Kashmir.php">Kashmir</a></li>
															
						    </ul>
						
						</li>
						
                        <li><a href="../happy.php">Happy Customers</a></li>	
                        <li><a href="#">Payment</a></li>						
					    <li><a href="../contact.php">Contact</a></li>
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
		<div class="top_site_main" style="background-image:url(../images/banner/top-heading-himchal.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="../index.php" class="home">Home</a></li>
						<li><a href="#">Destinations</a></li>
						<li><a href="../uttarakhand/uttarakhand.php">Uttarakhand</a></li>
					</ul>
				</div>
				<h2 class="heading_primary">5 Nights 6 Days</h2></div>
		</div>
		<section class="content-area single-woo-tour">
			<div class="container">
				<div class="tb_single_tour product">
					<div class="top_content_single row">
						<div class="images images_single_left">
							<div class="title-single">
								<div class="title">
									<h1>Uttarakhand</h1>
								</div>
								<div class="tour_code">
									<strong>Code: </strong>UK0506
								</div>
							</div>
							<div class="tour_after_title">
								<div class="meta_date">
									<span>5 NIGHTS 6 DAYS</span>
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
										<a href="../images/tour/uttarakhand-tour/sidebar/tour-uk-2.jpg" class="swipebox" title=""><img width="813" height="384" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-2.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../images/tour/uttarakhand-tour/sidebar/tour-uk-3.jpg" class="swipebox" title=""><img width="813" height="384" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-3.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../images/tour/uttarakhand-tour/sidebar/tour-uk-4.jpg" class="swipebox" title=""><img width="813" height="384" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-4.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../images/tour/uttarakhand-tour/sidebar/tour-uk-5.jpg" class="swipebox" title=""><img width="813" height="384" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-5.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../images/tour/uttarakhand-tour/sidebar/tour-uk-6.jpg" class="swipebox" title=""><img width="813" height="384" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-6.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../images/tour/uttarakhand-tour/sidebar/tour-uk-7.jpg" class="swipebox" title=""><img width="813" height="384" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-7.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../images/tour/uttarakhand-tour/sidebar/tour-uk-8.jpg" class="swipebox" title=""><img width="813" height="384" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-8.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../images/tour/uttarakhand-tour/sidebar/tour-uk-9.jpg" class="swipebox" title=""><img width="813" height="384" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-9.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../images/tour/uttarakhand-tour/sidebar/tour-uk-10.jpg" class="swipebox" title=""><img width="813" height="384" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-10.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../images/tour/uttarakhand-tour/sidebar/tour-uk-11.jpg" class="swipebox" title=""><img width="813" height="384" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-11.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../images/tour/uttarakhand-tour/sidebar/tour-uk-12.jpg" class="swipebox" title=""><img width="813" height="384" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-12.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../images/tour/uttarakhand-tour/sidebar/tour-uk-13.jpg" class="swipebox" title=""><img width="813" height="384" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-13.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../images/tour/uttarakhand-tour/sidebar/tour-uk-14.jpg" class="swipebox" title=""><img width="813" height="384" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-14.jpg" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
								</ul>
							</div>
							<div id="carousel" class="flexslider thumbnail_product">
								<ul class="slides">
									
									<li>
										<img width="100" height="100" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-3.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-4.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-5.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-6.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-7.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-8.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-9.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-10.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-11.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-12.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-13.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../images/tour/uttarakhand-tour/sidebar/tour-uk-14.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
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
									<<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--description panel entry-content wc-tab active" id="tab-description-tab">
										<h2>Uttarakhand</h2>
										<p align="justify">Uttarakhand, a state in northern India crossed by the Himalayas, is known for its Hindu pilgrimage sites. Rishikesh, a major centre for yoga study, was made famous by the Beatles’ 1968 visit. The city hosts the evening Ganga Aarti, a spiritual gathering on the sacred Ganges River. The state's forested Jim Corbett National Park shelters Bengal tigers and other native wildlife.</p>
										
										<table class="tours-tabs_table">
											<tbody>
											<tr>
												<td><strong> <i class="fa fa-crosshairs fa-lg" aria-hidden="true" ></i> PICK</strong></td>
												<td>Delhi Railway Station/Airport</td>
											</tr>
											<tr>
												<td><strong><i class="fa fa-dropbox fa-lg" aria-hidden="true"></i> DROP</strong></td>
												<td>Delhi Railway Station/Airport</td>
											</tr>
											<tr>
												<td><strong><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> STAY PLAN</strong></td>
												<td>Nanital (2 Nights) - Jim Corbett(1 Night) - Mussoorie (2 Nights)</td>
											</tr>
											<tr>
												<td><strong><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> INCLUDED</strong></td>
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
															<td ><i class="fa fa-check icon-tick icon-tick--on"></i>Daily breakfast & Dinner.														</td>
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
												<td><strong> <i class="fa fa-times fa-lg" aria-hidden="true" ></i> NOT INCLUDED</strong></td>
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
												<td><strong><i class="fa fa-ban fa-lg" aria-hidden="true"></i> CANCELLATION POLICY </strong></td>
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
												<h2><strong>Day 1: Delhi – Nainital (310kms/8hrs) </strong></h2>
												<p>Arrival at Delhi Airport/Station where you will meet with our representative and will drive you to Nainital. It will take 7-8 hours to reach Nainital. Once you arrive, check-in to your assigned resort. You are free to explore local Nainital by yourself like the Mall Road, Naini Lake, Upper Mall Road, Ropeway, Tibetian market and the famous Eco Caves. Overnight at Hotel.</p>
												
											</div>
										</div>
										<div class="interary-item">
											<p><span class="icon-left">2</span></p>
											<div class="item_content">
												<h2><strong>Day 2: Explore the Sister Lakes</strong></h2>
												<p>Post Breakfast, we will drive you to explore the sister lakes of Nainital like Bhimtal, Naukuchiyatal, Sattal etc. Once you will return back to Nainital, heads up to the famous natural Nainital Zoo which is awarded under ISO 9001:2000. Overnight at Hotel.</p>
											</div>
										</div>
										<div class="interary-item">
											<p><span class="icon-left">3</span></p>
											<div class="item_content">
												<h2><strong>Day 3: Check Out and Travel to Jim Corbett</strong></h2>
												<p>Check out post your breakfast and we will explore famous points like Snow View Point, Scandal Point, Lovers and Suicide Point. After this we will head to Jim Corbett, which is a National Park for the famous Royal Bengal Tiger. On the way to Jim Corbett we will also explore Jim Corbett Museum, Garjiya Temple and the famous Kosi River.</p></div>
										</div>
										
									<div class="interary-item">
											<p><span class="icon-left">4</span></p>
											<div class="item_content">
												<h2><strong>Day 4: Jungle safari & Driver to Mussoorie</strong></h2>
												<p>Wake up at 5 AM for your morning Jungle Safari which is included in your package. Jungle Safari lasts for 3 Hours wherein you can sight Tiger, Leopard, Spotted Deer, Hyena, Fox etc. Return to your resort and get fresh. Post Breakfast check out and then we will head to Mussoorie. It will take 6-7 hours to reach basis the traffic condition. Check-In to your assigned resort. Evening free for your self exploration of Mall Road, Ropeway to Gun Hill and some local cafes.</p>
											</div>
										</div>
										<div class="interary-item">
											<p><span class="icon-left">5</span></p>
											<div class="item_content">
												<h2><strong>Day 5: Explore the famous Kempty Fall</strong></h2>
												<p>Post your breakfast, head to Kempty fall. Return by afternoon and then explore Lal Tibba, Company Garden, Municipal Garden and Bhatta Fall. Return by evening and then you are free to explore the local market. Overnight at Hotel.</p>
											</div>
										</div>
										<div class="interary-item">
											<p><span class="icon-left">6</span></p>
											<div class="item_content">
												<h2><strong>Day 6: Check Out and back to Delhi</strong></h2>
												<p>Post Breakfast check out. We will make you explore famous local points like Municipal Garden, Company Garden, Lal Tibba etc. Back to Delhi for your onward journey.</p>
											</div>
										</div>
										
										
									</div>
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--location_tab panel entry-content wc-tab" id="tab-location-tab">
										<div class="video-container">
										<iframe src="https://www.google.com/maps/embed?pb=!1m46!1m12!1m3!1d1777358.6751616804!2d77.16184320973917!3d29.53373670678898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m31!3e0!4m5!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!3m2!1d28.7040592!2d77.10249019999999!4m5!1s0x39a0a1bc28fd9d61%3A0x7cae7ba916987db3!2sNainital%2C+Uttarakhand!3m2!1d29.380303899999998!2d79.4635658!4m5!1s0x390a24ffffffffff%3A0x3017b72d3d253fd7!2sJim+Corbett+National+Park%2C+Ramnagar%2C+Uttarakhand!3m2!1d29.5300138!2d78.7746603!4m5!1s0x3908d0cfa61cda5b%3A0x197fd47d980e85b1!2sMussoorie%2C+Uttarakhand!3m2!1d30.4599099!2d78.06639779999999!4m5!1s0x390d047309fff32f%3A0xfc5606ed1b5d46c3!2sDelhi!3m2!1d28.6862738!2d77.2217831!5e0!3m2!1sen!2sin!4v1526629552306" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
										</div>
									</div>
									
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--location_tab panel entry-content wc-tab" id="tab-hotels-tab">
										<table id="customers" >

											<tr>
											<th>Destination</th>
											<th>No. Of Nights</th>
											<th>Deluxe Hotels 2*</th>
											<th>Super Deluxe Hotels 3*</th>
											</tr>
									
											<tr>    
											<td>Mussoorie</td>
											<td>2</td>
											<td>--</td>
											<td>Monarc Hotel Mussoorie/Similar</td>
										   </tr>
										    <tr>    
											<td>Jim Corbett </td>
											<td>1</td>
											<td>--</td>
											<td>Kanwhizz HUM TUM Resort/Similar</td>
										   </tr>										   
										   <tr>    
											<td>Nanital</td>
											<td>2</td>
											<td>--</td>
											<td>Hotel Sapphire Inn/Similar</td>
										   </tr>
 
										</table>
									</div>  
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--location_tab panel entry-content wc-tab" id="tab-price-tab">
										<table id="customers">

											<tr>
											<th>Hotels</th>
											<th>2 PAX</th>
											<th>4 PAX</th>
											<th>6 PAX</th>
											
											</tr>  
											<tr>
											<td>Deluxe Hotels 2*</td>
											<td>--</td>
										    <td>--</td>
											<td>--</td>
											
											</tr>
											<tr>    
											<td>Super Deluxe Hotels 3*</td>
											<td>Per Person (INR - 23,500)</td>
											<td>Per Person (INR - 15,500)</td>
											<td>Per Person (INR - 15,000)</td>
											
										   </tr>
											<tr>    
											<td colspan="4" style="text-align:center;">Package price valid till 31 July 2018</td>											
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
												<a href="4n-5d-uk.php">
													<span class="price">INR 13,000 Per person</span>
													<img width="950" height="700" src="../images/tour/uttarakhand-tour/tour-1.jpg" alt="Discover Brazil" title="Discover Brazil">
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
													<a href="4n-5d-uk.php" rel="bookmark">Uttarakhand</a>
												</h4></div>
												<span class="post_date">4 NIGHTS 5 DAYS</span>
												<div class="description">
													<p>Nanital (2 Nights) - Kausani (1 Night)- Jim Corbett(1 Night)<br><br></p>
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
												<a rel="nofollow" href="4n-5d-uk.php" class="button product_type_tour_phys add_to_cart_button">Read more</a>
											</div>
										</div>
									</li>
									<li class="item-tour col-md-4 col-sm-6 product">
										<div class="item_border item-product">
											<div class="post_images">
												<a href="5n-6d-uk.php">
													<span class="price">INR 15,000 Per person</span>
													<img width="950" height="700" src="../images/tour/uttarakhand-tour/tour-2.jpg" alt="Discover Brazil" title="Discover Brazil">
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
													<a href="5n-6d-uk.php" rel="bookmark">Uttarakhand</a>
												</h4></div>
												<span class="post_date">5 NIGHTS 6 DAYS</span>
												<div class="description">
													<p>Nanital (2 Nights) - Jim Corbett(1 Night) - Mussoorie (2 Nights)<br><br></p>
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
												<a rel="nofollow" href="5n-6d-uk.php" class="button product_type_tour_phys add_to_cart_button">Read more</a>
											</div>
										</div>
									</li>
									
									<li class="item-tour col-md-4 col-sm-6 product">
										<div class="item_border item-product">
											<div class="post_images">
												<a href="6n-7d-uk.php">
											<span class="price">INR 16,500 Per person
												
											</span>
													<span class="onsale">Sale!</span>
													<img width="950" height="700" src="../images/tour/uttarakhand-tour/tour-3.jpg" alt="Discover Brazil" title="Discover Brazil">
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
													<a href="6n-7d-uk.php" rel="bookmark">Uttarakhand</a>
												</h4></div>
												<span class="post_date">6 NIGHTS 7 DAYS</span>
												<div class="description">
													<p>Nanital (2 Nights) - Kausani (1 Night)- Jim Corbett(1 Night) - Mussoorie (2 Nights)</p>
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
												<a rel="nofollow" href="6n-7d-uk.php" class="button product_type_tour_phys add_to_cart_button">Read more</a>
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
										<span class="text">Price:</span><span class="travel_tour-Price-amount amount">INR 11,000</span> <span class="text">Per Person</span>
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
											<form action="5n-6d-uk.php" method="post" class="wpcf7-form"><br>

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
											
										</div>
										
									</div>
								</div>
								<div class="widget-area align-left col-sm-3">
									<aside class="widget widget_travel_tour">
										<div class="wrapper-special-tours">
											<div class="inner-special-tours">
												<a href="../himachal/himachal.php">
													<img width="950" height="700" src="../images/tour/himachal-tour/tour-1.jpg" alt="Discover Brazil" title="Discover Brazil"></a>
												<div class="item_rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="post_title"><h3>
													<a href="../himachal/himachal.php" rel="bookmark">Himachal</a>
												</h3></div>
												<div class="item_price">
													<span class="price">INR 11,500 Per person</span>
												</div>
											</div>
											<div class="inner-special-tours">
												<a href="../kashmir/kashmir.php">
													<span class="onsale">Sale!</span>
													<img width="950" height="700" src="../images/tour/kashmir-tour/tour-1.jpg" alt="Discover Brazil" title="Discover Brazil"></a>
												<div class="item_rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="post_title"><h3>
													<a href="../kashmir/kashmir.php" rel="bookmark">Kashmir</a>
												</h3></div>
												<div class="item_price">
										<span class="price">INR 7,500 Per person
										</span>
												</div>
											</div>
											<div class="inner-special-tours">
												<a href="../kerala/kerala.php">
													<img width="950" height="700" src="../images/tour/kerala-tour/tour-1.jpg" alt="Discover Brazil" title="Discover Brazil">
												</a>
												<div class="item_rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="post_title"><h3>
													<a href="../kerala/kerala.php" rel="bookmark">Kerala</a>
												</h3></div>
												<div class="item_price">
													<span class="price">INR 8,000 Per person</span>
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
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</aside>
					<aside class="col-sm-3 widget_text"><h3 class="widget-title">Our Menu</h3>
						<div class="textwidget">
							<ul class="menu list-arrow">
								<li><a href="../about-us.php">About us</a></li>
								<li><a href="../happy.php">Happy Customers</a></li>
								<li><a href="../career.php">Career</a></li>								
								<li><a href="../privacy-policy.php">Privacy Policy</a></li>
								<li><a href="../contact.php">Contact US</a></li>
							</ul>
						</div>
					</aside>
					<aside class="col-sm-3 custom-instagram widget_text">
						<h3 class="widget-title">Office and Team</h3>
						<div class="textwidget">
							<ul>
								<li><img src="../images/Office/1.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="../images/Office/2.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="../images/Office/3.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="../images/Office/4.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="../images/Office/5.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="../images/Office/6.jpg" alt="Office" class="img-rounded"></li>
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
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper-subscribe" style="background-image: url(../images/home/bg_newletter.jpg)">
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
<script type='text/javascript' src='../assets/js/jquery.min.js'></script>
<script type='text/javascript' src='../assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='../assets/js/vendors.js'></script>
<script type='text/javascript' src='../assets/js/jquery.swipebox.min.js'></script>
<script type='text/javascript' src='../assets/js/theme.js'></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCaQjbVDR1vRh2iS_V3jLBXRrkQxmoxycQ'></script>
<script type='text/javascript' src='../assets/js/gmap.js'></script>
</body>
</html>