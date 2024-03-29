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
	<link rel="stylesheet" href="../../assets/css/css.css">
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="../../assets/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="../../assets/css/flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" href="../../assets/css/font-linearicons.css" type="text/css" media="all">
	<link rel="stylesheet" href="../../assets/new-fonts/flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" href="../../assets/css/booking.css" type="text/css" media="all">
	<link rel="stylesheet" href="../../assets/css/swipebox.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="../../assets/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="../../assets/css/travel-setting.css" type="text/css" media="all">
	<link rel="shortcut icon" href="../../images/favicon.png" type="image/x-icon">	
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
						<img src="../../images/logo.png" alt="Logo" width="147" height="58" class="logo_transparent_static">
						<img src="../../images/logo_sticky.png" alt="Sticky logo" width="147" height="58" class="logo_sticky">
					</a>
				</div>
				<nav class="width-navigation">
					<ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
						<li>
							<a href="../../index.php">Home</a></li>
                        <li><a href="#">About Us</a></li>							
						

						<li class="current-menu-ancestor current-menu-parent"><a href="destinations.php">Destinations</a>
						<ul class="sub-menu">
								<li><a href="../../himachal/himachal.php">Himachal Pradesh</a></li>
								<li><a href="../../uttarakhand/uttarakhand.php">Uttarakhand</a></li>
								<li><a href="../../kerala/kerala.php">Kerala</a></li>
								<li><a href="../../Kashmir/Kashmir.php">Kashmir</a></li>
															
						    </ul>
						
						</li>
						
                        <li><a href="../../happy.php">Happy Customers</a></li>	
                        <li><a href="#">Payment</a></li>						
					    <li><a href="../../contact.php">Contact</a></li>
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
						<li><a href="../../../index.php" class="home">Home</a></li>
						<li><a href="#">Destinations</a></li>
						<li><a href="../../kashmir/kashmir.php">Kashmir</a></li>
						<li><a href="../../kashmir/Tour-packages/3n-4d-kashmir-bliss.php"> Explore Kashmir </a></li>

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
									<h1>Explore Kashmir </h1>
								</div>
								<div class="tour_code">
									<strong>Code: </strong>HP0305
								</div>
							</div>
							<div class="tour_after_title">
								<div class="meta_date">
									<span>05 NIGHTS / 06 DAYS</span>
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
										<a href="../../images/tour/kashmir-tour/mountains-2689450_1280.jpg" class="swipebox" title=""><img width="813" height="384" src="../../images/tour/kashmir-tour/2.png" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../../images/tour/kashmir-tour/2.png" class="swipebox" title=""><img width="813" height="384" src="../../images/tour/kashmir-tour/3.png" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../../images/tour/kashmir-tour/3.png" class="swipebox" title=""><img width="813" height="384" src="../../images/tour/kashmir-tour/4.png" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../../images/tour/kashmir-tour/4.png" class="swipebox" title=""><img width="813" height="384" src="../../images/tour/kashmir-tour/5.png" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../../images/tour/kashmir-tour/5.png" class="swipebox" title=""><img width="813" height="384" src="../../images/tour/kashmir-tour/6.png" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../../images/tour/kashmir-tour/6.png" class="swipebox" title=""><img width="813" height="384" src="../../images/tour/kashmir-tour/6.png" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../../images/tour/kashmir-tour/2.png" class="swipebox" title=""><img width="813" height="384" src="../../images/tour/kashmir-tour/2.png" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../../images/tour/kashmir-tour/3.png" class="swipebox" title=""><img width="813" height="384" src="../../images/tour/kashmir-tour/3.png" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<li>
										<a href="../../images/tour/kashmir-tour/4.png" class="swipebox" title=""><img width="813" height="384" src="../../images/tour/kashmir-tour/4.png" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									
									
								</ul>
							</div>
							<div id="carousel" class="flexslider thumbnail_product">
								<ul class="slides">
									<li>
										<img width="100" height="100" src="../../images/tour/kashmir-tour/2.png" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../../images/tour/kashmir-tour/3.png" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../../images/tour/kashmir-tour/4.png" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../../images/tour/kashmir-tour/mountains-2689450_1280.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../../images/tour/kashmir-tour/5.png" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../../images/tour/kashmir-tour/6.png" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../../images/tour/kashmir-tour/2.png" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../../images/tour/kashmir-tour/3.png" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
									</li>
									<li>
										<img width="100" height="100" src="../../images/tour/kashmir-tour/4.png" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
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
										<h2>Kashmir </h2>
										<p align="justify">Kashmir, often referred to as "Paradise on Earth," is a region in the northern part of the Indian subcontinent. It is known for its breathtaking landscapes, including the snow-capped Himalayan mountains, lush green valleys, and pristine lakes. Kashmir is also famous for its rich cultural heritage, including traditional Kashmiri handicrafts, cuisine, and music. The region has been a center of political conflict between India and Pakistan, adding to its historical significance. Despite this, Kashmir remains a popular tourist destination, offering visitors a unique blend of natural beauty and cultural experiences.</p>
										
										<table class="tours-tabs_table">
											<tbody>
											<tr>
												<td><strong>PICK</strong></td>
												<td>Srinagar</td>
											</tr>
											<tr>
												<td><strong>DROP</strong></td>
												<td>Srinagar</td>
											</tr>
											<tr>
												<td><strong>Stay Plan</strong></td>
												<td>Kashmir</td>
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
															<td ><i class="fa fa-check icon-tick icon-tick--on"></i>Delhi – Manali – Delhi Transfer by Ac Bus  														</td>
															</tr>
															<tr>
															<td ><i class="fa fa-check icon-tick icon-tick--on"></i>Children below 5 years complementary sharing parents (Except Volvo cost)  														</td>
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
												<h2><strong>DAY 01	:	ARRIVE – SRINAGAR + LOCAL SIGHTSEEING</strong></h2>
												<p>Arrive Srinagar Airport. Meeting and assistance on arrival and transfer to Hotel. Later, visit Mughal Garden "Nishat" (The Garden of Pleasure) and "Shalimar" (Abode of All). Drive along the Lake side on Boulevard On return visit a local Handicrafts Emporium for hand-knotted specialty silken carpets, shawls, jewellery ornaments.  After lunch, in second half day Visit Shankaracharya Temple. Evening, enjoy 01 Hour Boat Ride on Dal Lake by a gondola Boat called ”SHIKARA” witness the ride on lake, called Venice of India & experience the aquatic life of Srinagar. Also see the scenic extravaganza of the Kashmir and enjoy the profusion of colors in the Paradise on Earth. While returning visit to the local crafts market and see the fine carved hand-made articles from Paper Machie & wood of a walnut. Overnight at the Deluxe Houseboat</p>
												
											</div>
										</div>
										<div class="interary-item">
											<p><span class="icon-left">2</span></p>
											<div class="item_content">
												<h2><strong>DAY 02 	:	SRINAGAR – PAHALGAM</strong></h2>
												<p>Transfers from Srinagar to Pahalgam called as “Valley of Shepherds”. Enjoy this mesmerizing drive through the scenic trails that connects Srinagar and Pahalgam. While en route, you might even get the opportunity to visit the saffron fields around. This spot is among one of the popular hill stations in India, and there is more than one reason for that. Also known as the Valley of Shepherds, Pahalgam will surprise you with its old world charm. Upon arrival at Pahalgam valley, you can check in at hotel, freshen up & leave for sightseeing to explore surrounding places & amazing market place of Pahalgam. In Pahalgam, Enjoy the nature & walk around the banks of River Lidder. Pahalgam is famous for some trekking routes also & is the base camp for Amarnath Pilgrimage. Dinner and overnight stay at Hotel.</p>
/p>
											</div><
										</div>
										<div class="interary-item">
											<p><span class="icon-left">3</span></p>
											<div class="item_content">
												<h2><strong>DAY 03	:    PAHALGAM – SRINAGAR</strong></h2>
<p>Transfers from Pahalgam to Srinagar. Afternoon day free to leisure activities to relax or for shopping. Overnight at the Hotel.
</p>
											</div>
										</div>
										
									<div class="interary-item">
											<p><span class="icon-left">4</span></p>
											<div class="item_content">
												<h2><strong>DAY 04 :	SRINAGAR – SONAMARG - SRINAGAR  </strong></h2>
												<p>After breakfast leave with full day excursion for Sonamarg. Situated at an altitude of 9000 Ft. Sonamarg – 84 Kms is also called as “The meadow of gold” has, as its backdrop, snowy mountains against a cerulean sky. The Sindh River that meanders through the valley abounds with trout and mahaseer. Ponies can be hired for the trip up to Thajiwas glacier, which is a major local attraction during the summer. Return for Dinner & overnight stay HB / Hotel.</p>
											</div>
										</div>
										<div class="interary-item">
											<p><span class="icon-left">5</span></p>
											<div class="item_content">
												<h2><strong>DAY 05 :	SRINAGAR – GULMARG – SRINAGAR </strong></h2>
												<p>Full Day return excursion to Gulmarg, called as “Meadow of Flowers” Gulmarg is 53 Kms from Srinagar at an altitude of 8700-ft. Gulmarg also referred as Meadow of Flowers is a famous Ski Resort & the world’s highest 18 hole Golf Course. The place was prominent during the British time.  Enjoy the scenic view of Kongdori on a Cable Car Ride – OPTIONAL (Gondola) Return to Srinagar for a Dinner & Overnight at the Hotel.</p>
											</div>
										</div>
										<div class="interary-item">
											<p><span class="icon-left">6</span></p>
											<div class="item_content">
												<h2><strong>DAY 06 :	DEPARTURE</strong></h2>
												<p>Departure at Srinagar Airport to connect the flight for onwards destination. TOUR ENDS WITH SWEET MEMORIES!
</p>
											</div>
										</div>
										<!-- <div class="interary-item">
											<p><span class="icon-left">5</span></p>
											<div class="item_content">
												<h2><strong>Day 05: Manali – Delhi (570 kms)</strong></h2>
												<p>After breakfast proceed to shopping in the famous Mall of city for shopping and gifts for family. After getting free from the shopping in the evening after the lunch get ready to transfer by Volvo for Delhi. 
Arrive Delhi by morning 06:00 am.</p>
											</div>
										</div> -->
									</div>
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--location_tab panel entry-content wc-tab" id="tab-location-tab">
										<div class="video-container">
										<div style="text-decoration:none; overflow:hidden;max-width:100%;width:600px;height:450px;"><div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=KASHMIR,+Srinagar&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="embed-ded-maphtml" rel="nofollow" href="https://www.bootstrapskins.com/themes" id="authmaps-data">premium bootstrap themes</a><style>#embedded-map-display img{max-height:none;max-width:none!important;background:none!important;}</style></div>
										</div>
									</div>
									
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--location_tab panel entry-content wc-tab" id="tab-hotels-tab">
										<table id="customers" >

											<tr>
											<th>Destination</th>
											<th>No. Of Nights</th>
											<th>Deluxe Hotels</th>
											<th>Super Deluxe Hotels</th>
											<th>Premium Deluxe Hotels</th>
											<th>Luxury Deluxe Hotels</th>


											</tr>
									
											<!-- <tr>    
											<td>Srinagar</td>
											<td>1</td>
											<td>--</td>
											<td>Harmony-Blue Mashobra</td>
											<td>Harmony-Blue Mashobra</td>

											<td>Harmony-Blue Mashobra</td>

										   </tr> -->
										   <!-- <tr>    
											<td>Srinagar</td>
											<td>2</td>
											<td>--</td>
											<td>Harmony-Blue Mashobra</td>
											<td>Harmony-Blue Mashobra</td>

											<td>Harmony-Blue Mashobra</td>

										   </tr> -->
  
  
 
										</table>
									</div>  
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--location_tab panel entry-content wc-tab" id="tab-price-tab">
										<table id="customers">
											<img src="../../images/tour-package-price/kashmir/explore-kashmir.png" alt="">

											<!-- <tr>
											<th>Hotels</th>
											<th>2 PAX</th>
											<th>4 PAX</th>
											<th>6 PAX</th>
											<th>8 PAX</th>
											</tr>  
											<tr>
											<td>Deluxe Hotels</td>
											<td>--</td>
										    <td>--</td>
											<td>--</td>
											<td>--</td>
											</tr>
											<tr>    
											<td>Super Deluxe Hotels </td>
											<td>Per Person (INR - 11,000)</td>
											<td>--</td>
											<td>--</td>
											<td>--</td>
										   </tr>
  											<tr>    
											<td colspan="5" style="text-align:center;">Package price valid till 31 July 2018</td>											
										   </tr> -->
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
												<a href="3n-4d-kashmir-bliss.php">
													<span class="price">INR 15,250 Per person</span>
													<img width="950" height="700" src="../../images/tour/kashmir-tour/2.png" alt="Discover Himachal" title="Discover Himachal">
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
													<a href="3n-4d-kashmir-bliss.php" rel="bookmark"> Kashmir Bliss</a>
												</h4></div>
												<span class="post_date">03 NIGHTS / 04 DAYS </span>
												<div class="description">
													<p>Srinagar (3 Nights)<br><br><br></p>
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
												<a rel="nofollow" href="3n-4d-kashmir-bliss.php" class="button product_type_tour_phys add_to_cart_button">Read more</a>
											</div>
										</div>
									</li>
									
								<li class="item-tour col-md-4 col-sm-6 product">
										<div class="item_border item-product">
											<div class="post_images">
												<a href="4n-5d-magical-kashmir.php">
													<span class="price">17,950 Per person</span>
													<img width="950" height="700" src="../../images/tour/kashmir-tour/pexels-imad-clicks-11203203.jpg" alt="Discover Himachal" title="Discover Himachal">
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
													<a href="4n-5d-magical-kashmir.php" rel="bookmark">Magical Kashmir</a>
												</h4></div>
												<span class="post_date">4 NIGHTS 5 DAYS</span>
												<div class="description">
													<p>Srinagar (4 Nights)<br><br><br></p>
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
												<a rel="nofollow" href="4n-5d-magical-kashmir.php" class="button product_type_tour_phys add_to_cart_button">Read more</a>
											</div>
										</div>
									</li>
									
									<li class="item-tour col-md-4 col-sm-6 product">
										<div class="item_border item-product">
											<div class="post_images">
												<a href="5n-6d-mystique-kashmir.php">
											<span class="price">INR 22,750 Per person
												
											</span>
													<span class="onsale">Sale!</span>
													<img width="950" height="700" src="../../images/tour/kashmir-tour/mystique.png" alt="Discover Himachal" title="Discover Himachal">
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
													<a href="5n-6d-mystique-kashmir.php" rel="bookmark">Mystique Kashmir</a>
												</h4></div>
												<span class="post_date">05 NIGHTS / 06 DAYS </span>
												<div class="description">
													<p>Srinagar (1 Night) - Pahalgam   (1 Night) - Gulmarg (1 Night) - Srinagar (2 Nights)</p>
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
												<a rel="nofollow" href="5n-6d-mystique-kashmir.php" class="button product_type_tour_phys add_to_cart_button">Read more</a>
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
										<span class="text">Price:</span><span class="travel_tour-Price-amount amount">INR 21,450</span> <span class="text">Per Person</span>
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
											<form action="3n-5d-him.php" method="post" class="wpcf7-form"><br>

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
													<img width="950" height="700" src="../../images/tour/himachal-tour/tour-1.jpg" alt="Discover Himachal" title="Discover Himachal">
												</a>
												<div class="item_rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="post_title"><h3>
													<a href="../himachal/himachal.php" rel="bookmark">Himachal</a>
												</h3></div>
												<div class="item_price">
													<span class="price">INR 11,000 Per person</span>
												</div>
											</div>
											<div class="inner-special-tours">
												<a href="../uttarakhand/uttarakhand.php">
													<img width="950" height="700" src="../../images/tour/uttarakhand-tour/tour-1.jpg" alt="Discover Himachal" title="Discover Uttarakhand"></a>
												<div class="item_rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="post_title"><h3>
													<a href="../uttarakhand/uttarakhand.php" rel="bookmark">Uttarakhand</a>
												</h3></div>
												<div class="item_price">
													<span class="price">INR 11,500 Per person</span>
												</div>
											</div>
											<div class="inner-special-tours">
												<a href="../kashmir/kashmir.php">
													<span class="onsale">Sale!</span>
													<img width="950" height="700" src="../../images/tour/kashmir-tour/tour-1.jpg" alt="Discover Himachal" title="Discover Kashmir"></a>
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
										<span class="price">INR 15,250 Per person
										</span>
												</div>
											</div>
											<div class="inner-special-tours">
												<a href="../kerala/kerala.php">
													<img width="950" height="700" src="../../images/tour/kerala-tour/tour-1.jpg" alt="Discover Himachal" title="Discover Kerala">
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
									<li><i class="fa fa-map-marker fa-fw"></i>Delhi Office: 285, 2nd Floor, Vardhman Grand Plaza Manglam Place, Sec 3 Rohini, New Delhi-110085, India</li>
									<li><i class="fa fa-phone fa-fw"></i>+91-99900-52288</li>
									<li><i class="fa fa-phone fa-fw"></i>+91-9864-9864-85</li>
									<li><i class="fa fa-phone fa-fw"></i>+91-11-49025288</li>
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
								<li><a href="about-us.php">About us</a></li>
								<li><a href="happy.php">Happy Customers</a></li>
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
								<li><img src="../../images/Office/1.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="../../images/Office/2.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="../../images/Office/3.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="../../images/Office/4.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="../../images/Office/5.jpg" alt="Office" class="img-rounded"></li>
								<li><img src="../../images/Office/6.jpg" alt="Office" class="img-rounded"></li>
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
<script type='text/javascript' src='../../assets/js/jquery.min.js'></script>
<script type='text/javascript' src='../../assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='../../assets/js/vendors.js'></script>
<script type='text/javascript' src='../../assets/js/jquery.swipebox.min.js'></script>
<script type='text/javascript' src='../../assets/js/theme.js'></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCaQjbVDR1vRh2iS_V3jLBXRrkQxmoxycQ'></script>
<script type='text/javascript' src='../../assets/js/gmap.js'></script>
</body>
</html>