<?php /* Template Name: Template Contacts 

             
               */ 
               get_header(); ?>  <!-- END HEADER -->

			<!-- PAGE HERO
			============================================= -->
			<section id="contacts-page" class="bg-fixed page-hero-section division">
				<div class="container">

					<!-- PAGE HERO TEXT -->
					<div class="row justify-content-center">
						<div class="col-md-10 col-xl-8">
							<div class="hero-txt text-center white--color">
								<h2 class="h2-xl">Let's Talk Beauty!</h2>
							</div>
						</div>
					</div>

					<!-- BREADCRUMB -->
					<div id="breadcrumb">
						<div class="row d-flex align-items-center">
							<div class="col">
								<div class="breadcrumb-nav">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="demo-1.html">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page">Contact
												Us</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
					</div> <!-- END BREADCRUMB -->

				</div> <!-- End container -->
			</section> <!-- END PAGE HERO -->

			<!-- CONTACTS-2
			============================================= -->
			<section id="contacts-2" class="wide-50 contacts-section division">
				<div class="container">

					<!-- CONTACTS-2 WRAPPER -->
					<div class="contacts-2-wrapper">

						<!-- CONTACT INFO & MAP -->
						<div class="row d-flex align-items-center">

							<!-- HOURS & LOCATION -->
							<div class="col-md-5">

								<!-- WORKING HOURS -->
								<div class="cbox-2 mb-40">

									<!-- Title -->
									<h5 class="h5-lg">Salon Hours:</h5>

									<!-- Text -->
									<p class="p-lg">Monday: <span>11:00AM - 7:00PM</span></p>
									<p class="p-lg">Tue - Wed: <span>10:00AM - 9:00PM</span></p>
									<p class="p-lg">Thursday: <span>10:00AM - 7:30PM</span></p>
									<p class="p-lg">Friday: <span>10:00AM - 9:00PM</span></p>
									<p class="p-lg">Saturday: <span>10:00AM - 6:30PM</span></p>
									<p class="p-lg">Sunday: <span>11:00PM - 5:00PM</span></p>

								</div>

								<!-- LOCATION -->
								<div class="cbox-2 mb-40">

									<!-- Title -->
									<h5 class="h5-lg">Our Location:</h5>

									<!-- Title -->
									<p class="p-lg">8721 M Central Avenue,</p>
									<p class="p-lg">Los Angeles, CA 90036</p>

									<!-- Text -->
									<p class="p-lg"><a href="tel:123456789"> 12 9 8765 4321</a></p>
									<p class="p-lg"><a href="mailto:yourdomain@mail.com">hello@yourdomain.com</a></p>

								</div>

							</div> <!-- END HOURS & LOCATION -->

							<!-- GOOGLE MAP -->
							<div class="col-md-7">
								<div class="google-map mb-40">

									<!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8393924898796!2d144.9536363151022!3d-37.817230742014345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4e793770d3:0x9e44d6ad0d76ba7c!2zMTIxIEtpbmcgU3QsIE1lbGJvdXJuZSBWSUMgMzAwMCwg0JDQstGB0YLRgNCw0LvQuNGP!5e0!3m2!1sru!2sua!4v1469002590349" width="600" height="450"></iframe>

								</div>
							</div> <!-- END GOOGLE MAP -->

						</div> <!-- END CONTACT INFO & MAP -->

						<!-- CONTACT FORM -->
						<div class="row">

							<!-- SECTION TITLE -->
							<div class="row justify-content-center">
								<div class="col-lg-10 col-xl-8">
									<div class="section-title title-01 mb-60">

										<!-- Section ID -->
										<span class="section-id">Online Enquiry</span>

										<!-- Title -->
										<h2 class="h2-md">Let's Get In Touch</h2>

									</div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-holder mb-40">
									<form name="contactform" class="row contact-form">

										<!-- Form Input -->
										<div class="col-lg-6">
											<input type="text" name="name" class="form-control name" placeholder="Your Name*">
										</div>

										<!-- Form Input -->
										<div class="col-lg-6">
											<input type="email" name="email" class="form-control email" placeholder="Email Address*">
										</div>

										<!-- Form Input -->
										<div class="col-md-12">
											<input type="text" name="subject" class="form-control subject" placeholder="What's this about?">
										</div>

										<!-- Form Textarea -->
										<div class="col-md-12">
											<textarea name="message" class="form-control message" rows="6" placeholder="Your Message ..."></textarea>
										</div>

										<!-- Form Button -->
										<div class="col-md-12 mt-15 text-end">
											<button type="submit" class="btn rose--btn tra-black--hover submit">Send Message</button>
										</div>

										<!-- Form Message -->
										<div class="col-md-12 contact-form-msg text-center">
											<div class="sending-msg"><span class="loading"></span></div>
										</div>

									</form>
								</div>
							</div>
						</div> <!-- END CONTACT FORM -->

					</div> <!-- END CONTACTS-2 WRAPPER -->

				</div> <!-- End container -->
			</section> <!-- END CONTACTS-2 -->

			<!-- PROMO-1
			============================================= -->
			<section id="promo-1" class="promo-section division">
				<div class="container">
					<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">

						<!-- PROMO BOX #1 -->
						<div class="col">
							<div id="pb-1-1" class="promo-box">
								<div class="hover-overlay">

									<!-- Image -->
									<img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()."/images/promo-01.jpg"); ?>" alt="promo-image">
									<div class="item-overlay"></div>

									<!-- Image Description -->
									<div class="pbox-description white--color">
										<div class="pbox-caption">
											<p class="txt-upcase">Meet Your Match</p>
											<h5 class="h5-lg pbox-link"><a href="pricing.html">Our
													Services</a></h5>
										</div>
									</div>

								</div>

							</div>
						</div> <!-- END PROMO BOX #1 -->

						<!-- PROMO BOX #2 -->
						<div class="col">
							<div id="pb-1-2" class="promo-box">
								<div class="hover-overlay">

									<!-- Image -->
									<img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()."/images/promo-02.jpg"); ?>" alt="promo-image">
									<div class="item-overlay"></div>

									<!-- Image Description -->
									<div class="pbox-description white--color">
										<div class="pbox-caption">
											<p class="txt-upcase">Share The Love</p>
											<h5 class="h5-lg pbox-link"><a href="gift-cards.html">Refer a
													Friend</a></h5>
										</div>
									</div>

								</div>

							</div>
						</div> <!-- END PROMO BOX #2 -->

						<!-- PROMO BOX #3 -->
						<div class="col">
							<div id="pb-1-3" class="promo-box">
								<div class="hover-overlay">

									<!-- Image -->
									<img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()."/images/promo-03.jpg"); ?>" alt="promo-image">
									<div class="item-overlay"></div>

									<!-- Image Description -->
									<div class="pbox-description white--color">
										<div class="pbox-caption">
											<p class="txt-upcase">Be Part Of Us</p>
											<h5 class="h5-lg pbox-link"><a href="careers.html">Join Our
													Team</a></h5>
										</div>
									</div>

								</div>

							</div>
						</div> <!-- END PROMO BOX #3 -->

						<!-- PROMO BOX #4 -->
						<div class="col">
							<div id="pb-1-4" class="promo-box">
								<div class="hover-overlay">

									<!-- Image -->
									<img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()."/images/promo-04.jpg"); ?>" alt="promo-image">
									<div class="item-overlay"></div>

									<!-- Image Description -->
									<div class="pbox-description white--color">
										<div class="pbox-caption">
											<p class="txt-upcase">Enjoy 10% OFF</p>
											<h5 class="h5-lg pbox-link"><a href="#footer-2">Join Our
													Newsletter</a></h5>
										</div>
									</div>

								</div>

							</div>
						</div> <!-- END PROMO BOX #4 -->

					</div> <!-- End row -->
				</div> <!-- End container -->
			</section> <!-- END PROMO-1 -->

			<!-- FOOTER-2
			============================================= -->
			

               <?php
              // get_sidebar();
               get_footer(); 
               ?>
               