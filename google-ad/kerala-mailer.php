<?php
    

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $cont_subject = trim($_POST["cont_subject"]);
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($cont_subject) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "info@micetravelo.com";

        // Set the email subject.
        $subject = "New contact from $name";

        // Build the email content.
        $email_content = "Name: $name\n\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Phone: $cont_subject\n\n";
        $email_content .= "Message: $message\n\n";
        $email_content .= "From Kerala tour packages\n\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mice Travelo : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/purple-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet"> 
    <!-- Main Style -->
    <link href="form.css" rel="stylesheet">   
     

    <!-- Fonts -->

    <!-- Poppins For Title -->
	<link href="assets/css/css.css" rel="stylesheet">
      
      
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
  <body>

  

   <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->
  	
  	<!-- Start Header -->
	<header id="mu-hero">
		<div class="container">
			<div class="mu-hero-area">
				
				<div class="mu-hero-top">
					<!-- Start center Logo -->
					<div class="mu-logo-area">
						<!-- text based logo -->
						<!--<a class="mu-logo" href="index.html"><span>Mice Travelo</span></a> -->
						<!-- Image based logo -->
						 <a class="mu-logo" href="index.html"><img src="assets/images/logo.png" alt="Mice Travelo" width="50%" height="auto"></a>
					</div>
					<!-- End center Logo -->
					<div class="mu-hero-top-info">
						<ul>
							<li>
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<span> info@micetravelo.com</span>
							</li>
							<li>
								<div class="mu-telephone">
									<i class="fa fa-phone" aria-hidden="true"></i>
									<span> +91-99900-52288</span>
								</div>
							</li>
						</ul>
						
					</div>
				</div>

				<!-- Start hero featured area -->
				<div class="mu-hero-featured-area">
					<div class="mu-hero-featured-content">
						<h2>Welcome To The Mice Travelo</h2>
						<h1>WE PROVIDE ONLY THE BEST TOURS</h1>
						<p>When you travel with us, we take care of the details, from handpicked hotels and authentic cuisine to the expert Tour Directors by your side throughout the journey. With the perfect balance of expertly planned sightseeing and free time to seek out your interests, our guided tours give you an in-depth look into your destination's culture — all with the ease of experienced planners working behind the scenes.</p>

						<a href="#mu-contact" class="mu-book-now-btn">Get Free Quotes</a>
						
						<div class="mu-scrolldown-area">
							<a href="#mu-about" class="mu-scrolldown" id="mu-scrolldown"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<!-- End hero featured area -->

			</div>
		</div>
	</header>
	<!-- End Header -->

	
	<!-- Start main content -->
	<main>
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left">
										<img class="" src="assets/images/office.jpg" alt="img">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<h2>About Mice Travelo</h2>
										<p>The Tourism Award Winner, Mice Travelo Expert Pvt. Ltd, is India's leading Inbound Travel Solution Company for the Indian sub continent. We provide comprehensive travel solutions for leisure, group, charters & small business travelers, backed by real-time websites & unmatched products. Since its inception in 1998, we have been growing rapidly, aspiring to emerge as one of the foremost travel companies in India. Fairly young, we are receptive to new ideas, flexible and adaptable to our clients needs. Our India Travel Guide is embellished with the very best of tourist destinations, attractions, cuisines and things to do in India.</p>								
									</div>
								</div>
							</div>
							<!-- End Feature Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->
		
		<!-- Start Why Us -->
		<section id="mu-why-us">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-why-us-area">
							<h2>Why Mice Travelo ?</h2>
							<div class="mu-why-us-content">
								<div class="row">
									
									<div class="col-md-4">
										<div class="mu-why-us-single">
											<div class="my-why-us-single-icon">
												<i class="fa fa-building" aria-hidden="true"></i>
											</div>
											<h3>Our Presence</h3>
											<p>Mumbai - Rajkot - Ahmedabad -  Surat - Morbi - Hyderabad - Jaipur - Lucknow -  Srinagar - Haridwar -  Jim-Corbett -   Shimla  - Manali - </p>
										</div>
									</div>                                    
								
                                    <div class="col-md-4">
										<div class="mu-why-us-single">
											<div class="my-why-us-single-icon">
												<i class="fa fa-thumbs-up" aria-hidden="true"></i>
											</div>
											<h3>The Best Service</h3>
											<p>From the Tour Consultant who helps you plan your trip to the Tour Director by your side, our personalized service before, during, and after your tour lets you enjoy every minute of your experience.</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mu-why-us-single">
											<div class="my-why-us-single-icon">
												<i class="fa fa-plane" aria-hidden="true"></i>
											</div>
											<h3>Unique Experience</h3>
											<p>As a leading and respected tour agency, we offer a plethora of ideas and inspiration for all types of holiday experiences. From family holidays and luxury escapes - book your next travel experience with us.</p>
										</div>
									</div>
                                    

								</div>
                                <div class="alignc">
		Our <a href="https://www.google.com/search?q=mice+travelo&oq=mice+travelo&aqs=chrome.0.69i59l2j69i60l3j69i59.6269j0j7&sourceid=chrome&ie=UTF-8#lrd=0x390d03e4b1e8504d:0xcf90b1d1d842cd7c,1,,,"><img class="valign" src="assets/images/google-reviews.png" alt="Google Reviews"/></a> Rating
		<p class="valign iblock"><b class="fa fa-star star"></b><b class="fa fa-star star"></b><b class="fa fa-star star"></b><b class="fa fa-star star"></b><b class="fa fa-star star"></b> <span>(4.5 / 5 From 46 Reviews)</span></p>
	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Why Us -->

		<!-- Start Video -->
		<!-- <section id="mu-video">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-video-area">
							<h2>Watch Our Recent Trip Video</h2>
							<p class="mu-title-content">Watch some of our favorite Travel Video</p>

							<!-- Start Video content -->
							<!-- <div class="mu-video-content"><iframe width="854" height="480" src="https://www.youtube.com/embed/Y45Mb0F3bK0" allowfullscreen></iframe>	                               
                            

						</div>
					</div>
				</div>
			</div>	
		</section>-->
		<!-- End Video -->

		<!-- Start Featured Tours -->
		<section id="mu-featured-tours">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-featured-tours-area">
							<h2>Best Selling Packages</h2>
							<p class="mu-title-content">Take to any of these Kerala tour packages. Get free quotes and customisable itineraries for Kerala inclusive of sightseeing, stay and transport from Mice Travelo</p>

							<!-- Start Featured Tours content -->
							<div class="mu-featured-tours-content">
								<div class="row">

									<div class="col-md-4">
										<div class="mu-featured-tours-single">
											<img src="assets/images/kerala/tour-ker-1.jpg" alt="img">
											<div class="mu-featured-tours-single-info">
												<h3>Kerala</h3>
												<h4>4 Nights 5 Days</h4>
												<span class="mu-price-tag">INR 7,999 Onwards</span>
												<p>Munnar (2 Nights)Thekkady(1 Night) Allappy(1 Night)</p>
												<a href="#mu-contact" class="mu-book-now-btn">Get Free Quotes</a>
											</div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="mu-featured-tours-single">
											<img src="assets/images/kerala/tour-ker-2.jpg" alt="img">
											<div class="mu-featured-tours-single-info">
												<h3>Kerala</h3>
												<h4>5 Nights 6 Days</h4>
												<span class="mu-price-tag">INR 9,999 Onwards</span>
												<p>Munnar (2 Nights)Thekkady(1 Night)Thekkady(1 Night) Kovlam (1 Night)</p>
												<a href="#mu-contact" class="mu-book-now-btn">Get Free Quotes</a>
											</div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="mu-featured-tours-single">
											<img src="assets/images/kerala/tour-ker-3.jpg" alt="img">
											<div class="mu-featured-tours-single-info">
												<h3>Kerala</h3>
												<h4>6 Nights 7 Days</h4>
												<span class="mu-price-tag">INR 11,999 Onwards</span>
												<p>Munnar (2 Nights)Thekkady (1 Night) Thekkady (1 Night) Kovlam (2 Night)</p>
												<a href="#mu-contact" class="mu-book-now-btn">Get Free Quotes</a>
											</div>
										</div>
									</div>
										

									
									<!--<div class="col-md-4">
										<div class="mu-featured-tours-single">
											<img src="assets/images/kerala/tour-ker-6.jpg" alt="img">
											<div class="mu-featured-tours-single-info">
												<h3>Kerala</h3>
												<h4>9 Nights 10 Days</h4>
												<span class="mu-price-tag">INR 17,999 Onwards</span>
												<p>Nanital (2 Nights) - Kausani (2 Night)- Jim Corbett(1 Night)- Haridwar (1 Night)- Risikesh (1 Night) - Mussoorie (2 Nights)</p>
												<a href="#mu-contact" class="mu-book-now-btn">Get Free Quotes</a>
											</div>
										</div>
                                        
                                        
									</div>-->
                                    
                                   
                                    
                                    
                                    
                                    
                                    

								</div>
							</div>
							<!-- End Featured Tours content -->
						</div>
					</div>
				</div>
                
                <div class="row">
                    <div class="col-md-4" ></div>
                    <div class="col-md-4" ><div class="more-pac"><a href="#mu-contact" class="mu-book-now-btn67">More Packages</a> </div></div>
                     <div class="col-md-4" ></div>
                </div>
			</div>
		</section>
		<!-- End Featured Tours -->

		<!-- Start Client Testimonials -->
		<section id="mu-testimonials">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-testimonials-area">
							<h2>What Our Travelers Says</h2>

							<div class="mu-testimonials-block">
								<ul class="mu-testimonial-slide">

									<li>
										<i class="fa fa-quote-left mu-client-quote" aria-hidden="true"></i>
										<p>"I travelled with my family..Very nice hospitality and cooperative nature..Staying facility is also very nice ...We enjoyed a lot at Kerala"</p>
										<img class="mu-rt-img" src="assets/images/traveler-1.jpg" alt="img">
										<h5 class="mu-rt-name"> - MAHENDRA HANMANTE - </h5>
										<span class="mu-rt-title">Mumbai, India</span>
									</li>

									<li>
										<i class="fa fa-quote-left mu-client-quote" aria-hidden="true"></i>
										<p>"Excellent service , we are proud being they are with us always ,since inception of the travel programme till we reach back to home , their service, hospitality is fantastic.
                                            Again my self repeat the tour programme with them also we recommend next travellers."</p>
										<img class="mu-rt-img" src="assets/images/traveler-2.jpg" alt="img">
										<h5 class="mu-rt-name"> - ANKIT - </h5>
										<span class="mu-rt-title">Gujarat, India</span>
									</li>
                                    <li>
										<i class="fa fa-quote-left mu-client-quote" aria-hidden="true"></i>
										<p>"Nice trip of Kerala with mice travelo  hope to have long lasting bonding For vacation trips."</p>
										<img class="mu-rt-img" src="assets/images/traveler-4.jpg" alt="img">
										<h5 class="mu-rt-name"> - TEJAS DESAI - </h5>
										<span class="mu-rt-title">Mumbai, India</span>
									</li>

									<li>
										<i class="fa fa-quote-left mu-client-quote" aria-hidden="true"></i>
										<p>"It was pleasant n pocket friendly experience of Kerala without their kind support would not have been possible.Thank you MICE TRAVELO."</p>
										<img class="mu-rt-img" src="assets/images/traveler-3.jpg" alt="img">
										<h5 class="mu-rt-name"> - NITUL - </h5>
										<span class="mu-rt-title">Gujarat, India</span>
									</li>

								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Client Testimonials -->

		<!-- Start Clients -->
		<section id="mu-clients">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-clients-area">
							<h2>Our Awesome Clients</h2>

							<!-- Start Clients brand logo -->
							<div class="mu-clients-slider">

								<div class="mu-clients-single">
									<img src="assets/images/uttarakhand-1.jpg" alt="Our Awesome Clients">
								</div>

								<div class="mu-clients-single">
									<img src="assets/images/uttarakhand-2.jpg" alt="Our Awesome Clients">
								</div>

								<div class="mu-clients-single">
									<img src="assets/images/uttarakhand-3.jpg" alt="Our Awesome Clients">
								</div>

								<div class="mu-clients-single">
									<img src="assets/images/uttarakhand-4.jpg" alt="Our Awesome Clients">
								</div>

								<div class="mu-clients-single">
									<img src="assets/images/uttarakhand-5.jpg" alt="Our Awesome Clients">
								</div>

								<div class="mu-clients-single">
									<img src="assets/images/uttarakhand-6.jpg" alt="Our Awesome Clients">
								</div>
                                <div class="mu-clients-single">
									<img src="assets/images/Kerala-7.jpg" alt="Our Awesome Clients">
								</div>
                                <div class="mu-clients-single">
									<img src="assets/images/Kerala-8.jpg" alt="Our Awesome Clients">
								</div>
                                 <div class="mu-clients-single">
									<img src="assets/images/Kerala-9.jpg" alt="Our Awesome Clients">
								</div>
                                 <div class="mu-clients-single">
									<img src="assets/images/Kerala-10.jpg" alt="Our Awesome Clients">
								</div>
                                <div class="mu-clients-single">
									<img src="assets/images/Kerala-11.jpg" alt="Our Awesome Clients">
								</div>
							</div>
							<!-- End Clients brand logo -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Clients -->

		<!-- Start Call to Action -->
		<section id="mu-callto-action">
			<div class="container">
				<div class="row col-md-12">
					<div class="mu-callto-action-area">
						<h2>Explore the Kerala by making journey with us</h2>
						<a class="mu-book-now-btn" href="#mu-contact">Start Journey</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Start Call to Action -->

		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">
							<h2>Get Free Quotes</h2>
							<p>Get the Best Holiday Planned by Experts on Lowest Prices!</p>
							
							<!-- Start Contact Content -->
	
                        <div class="container"> 
                        <?if (mail($recipient, $phone, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    } ?>                       
                        <form id="contact" action="kerala-mailer.php" method="post">     
                            <fieldset>
                              <input placeholder="Your Name"  name="name" type="text" tabindex="1" required autofocus>
                            </fieldset>
                            <fieldset>
                              <input placeholder="Your Email Address"  name="email" type="email" tabindex="2" required>
                            </fieldset>
                            <fieldset>
                              <input placeholder="Your Phone Number" type="tel" name="cont_subject" tabindex="3" required>
                            </fieldset>    
                            <fieldset>
                              <textarea placeholder="Type your Message Here...." tabindex="5" name="message" required></textarea>
                            </fieldset>
                            <fieldset>
                              <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                            </fieldset>
                          </form>  
                        </div>    
 

							<!-- End Contact Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->

		<!-- Start Google Map -->

		<div id="mu-google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13998.787750409845!2d77.114439!3d28.698711!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf90b1d1d842cd7c!2sMICE+TRAVELO+EXPERTS+PVT+LTD!5e0!3m2!1sen!2sin!4v1522666555359" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

		<!-- End Google Map -->

	</main>
	
	<!-- End main content -->	
			
			
	<!-- Start footer -->
	<footer id="mu-footer">
		<div class="container">
			<div class="mu-footer-area">
				<div class="row">
					<div class="col-md-6">
						<div class="mu-footer-left">
							<p class="mu-copy-right">&copy; Copyright <a rel="nofollow" href="#">Mice Travelo</a>. All right reserved.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mu-footer-right">
							<div class="mu-social-media">
								<a href="https://www.facebook.com/travelexpertsadvice"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-youtube"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End footer -->

	
	<!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js//popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="assets/js/app.js"></script>
  
      
	
    <!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>

	
	
    
  </body>
</html>
