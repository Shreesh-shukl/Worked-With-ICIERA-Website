	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<?php include("./application/views/includes/navigation.php"); ?>

		<!-- promo-banner-section 
			================================================== -->
		<!--<section class="promo-banner-section">
			<div class="container">
				<div class="promo-banner-box">
					<span>13-15 April 2018, San Francisco</span>
					<h1>Business Meets Innovation</h1>
					<a class="default-button" href="#">Join Us</a>
				</div>
			</div>
		</section>-->
		<section style="background:#002e46; min-height:150px">
			<div class="container-fluid p-0" style="min-height:180px">
				<div class="row h-100 align-items-center" style="min-height:180px">
					<div class="col">
						<img src="<?=base_url('assets/images/banner_new.png')?>" class="img-fluid">
					</div>
				</div>
			</div>
		</section>
		
		<!-- End promo-banner section -->

		<!-- about-conference-section 
			================================================== -->
		<section class="about-conference-section" id="about-section">
			<div class="container">
				<div class="about-event-box">
					<div class="row">
						<div class="col-lg-4">
							<h2>Venue <i class="ionicons ion-ios-location-outline"></i></h2>
							<p>Maharaja Agrasen Institute Of Technology <br> New Delhi, India</p>
							<a href="<?=base_url('venue')?>">view venue</a>
						</div>
						<div class="col-lg-4">
							<h2>When? <i class="ionicons ion-ios-calendar-outline"></i></h2>
							<p>Sunday to Tuesday <br> 14 Jan to 16 Jan 2024</p>
							<a href="<?=base_url('conference-schedule')?>">view schedule</a>
						</div>
						<div class="col-lg-4">
							<h2>Organized by <i class="ionicons ion-ios-people-outline"></i></h2>
							<p>Department of ECE<br>MAIT, New Delhi</p>
							<a href="<?=base_url('organizing-committees')?>">view committees</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="agenda-section py-5 d-none">
			<div class="container py-5">
				<div class="row">
					<div class="col-lg-6">
						<div class="article-box m-0">
							<div class="title-line">
								<span>International Conference on</span>
								<h1>Industrial Electronics Research and Applications</h1>
							</div>
							<p><span><?=$aim?></span></p>
							<p><?=$theme?></p>
							<a class="default-button" href="#">SUBMIT PAPER</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="schedule-box">
							<div class="collapse-box">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													News and Updates
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body p-3 pb-5" style="max-height:400px; overflow:auto;">
												<ul class="schedule-list">
													<li>
														<img src="<?=base_url('assets/images/logo.png')?>" alt="">
														<div class="schedule-cont">
															<span class="time">15th Feb 2021</span>
															<p>Paper submission is open now.</p>
														</div>
													</li>
													<li>
														<img src="<?=base_url('assets/images/logos/ieee.png')?>" alt="">
														<div class="schedule-cont">
															<span class="time">April 2021</span>
															<p>Conference is now approved by IEEE</p>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="about-conference-section agenda-section py-5" id="about-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="conference-features">
							<div class="row">
								<div class="conference-post col-12 col-md-6">
									<div class="inner-box">
										<i class="ionicons ion-android-upload text-light"></i>
										<h2>Dec 2023</h2>
										<p>Paper Submission Deadline</p>
									</div>
								</div>
								<div class="conference-post col-12 col-md-6">
									<div class="inner-box">
										<i class="ionicons ion-speakerphone text-light"></i>
										<h2>Dec 2023</h2>
										<p>Acceptance Notification</p>
									</div>
								</div>
								<div class="conference-post col-12 col-md-6">
									<div class="inner-box">
										<i class="ionicons ion-camera text-light"></i>
										<h2>Dec 2023</h2>
										<p>Final Camera-ready paper</p>
									</div>
								</div>
								<div class="conference-post col-12 col-md-6">
									<div class="inner-box">
										<i class="ionicons ion-android-checkbox-outline text-light"></i>
										<h2>Dec 2023</h2>
										<p>Registration Deadline</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mt-5">
						<div class="article-box mb-0">
							<div class="title-line">
								<h1>Call For Papers</h1>
							</div>
							<p><span>The ICIERA 2024 committee invites researchers worldwide to submit papers and share valuable experiences.</span></p>
							<p><span>The duly accepted and presented papers will be published on IEEE Xplore.</span></p>
							<p>The conference will consists of 6 different Tracks as listed below:</p>
							<h6>Track 01: Industrial Communications and Signal Processing</h6>
							<h6>Track 02: Industrial Electronics</h6>
							<h6>Track 03: Industrial Sensors and Industrial Informatics</h6>
							<h6>Track 04: Industrial Control & Applications</h6>
							<h6>Track 05: Power and energy systems (Special Focus on Smart Applications)</h6>
							<h6>Track 06: Invited and Special Tracks</h6>
							<a class="default-button" href="<?=base_url('call-for-papers')?>">MORE DETAILS</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		

		<!-- speaking-section2
			================================================== -->
		<section class="speaking-section2">
			<div class="container">
				<div class="speakers-box">

					<div class="row">
						<div class="col-md-6">
							<div class="article-box white-style">
								<div class="title-line">
									<span>Who's speaking?</span>
									<h1>Invited Speakers</h1>
								</div>
								
							</div>
						</div>

						<?php for($k=0;$k<count($invited_speakers); ++$k){ ?>
						<div class="col-md-3 col-sm-6">
							<div class="speaker-post">
								<a href="#"><img src="<?=base_url('assets/images/speakers/' . $invited_speakers[$k][0] . ".jpg")?>" alt=""></a>
								<div class="speaker-content">
									<h2><a href="#"><?=$invited_speakers[$k][0]?></a></h2>
									<span><?=$invited_speakers[$k][1]?></span>
									<ul class="social-links d-none">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a class="personal-web" href="#"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>

					
				</div>
			</div>
		</section>
		<!-- End speaking section2 -->

		<!-- agenda-section
			================================================== -->
		<section class="agenda-section d-none">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="schedule-box">
							
							<div class="collapse-box">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													Day 1 / Friday, 13
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<ul class="schedule-list">
													<li>
														<img src="<?=base_url('assets')?>/upload/others/sc1.jpg" alt="">
														<div class="schedule-cont">
															<span class="time">10:00-11:00</span>
															<p>Pellentesque aliquet nibh nec urna. </p>
															<p class="schedule-auth">by <span>Hubert Aguilar</span></p>
														</div>
													</li>
													<li>
														<img src="<?=base_url('assets')?>/upload/others/sc2.jpg" alt="">
														<div class="schedule-cont">
															<span class="time">11:00-12:00</span>
															<p>In nisi neque, aliquet vel.</p>
															<p class="schedule-auth">by <span>John Cornick</span></p>
														</div>
													</li>
													<li class="time-off-item">
														<i class="ionicons ion-coffee"></i>
														<span class="time">12:00-13:30</span>
														<span class="time-off">Lunch Time!</span>
													</li>
													<li>
														<img src="<?=base_url('assets')?>/upload/others/sc3.jpg" alt="">
														<div class="schedule-cont">
															<span class="time">13:30-15:00</span>
															<p>Nullam mollis ut justo. Suspendisse potenti.</p>
															<p class="schedule-auth">by <span>Dalim Kumar</span></p>
														</div>
													</li>
													<li>
														<img src="<?=base_url('assets')?>/upload/others/sc4.jpg" alt="">
														<div class="schedule-cont">
															<span class="time">15:00-16:00</span>
															<p>Morbi purus libero. </p>
															<p class="schedule-auth">by <span>Seth Rollis</span></p>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													Day 2 / Saturday, 14
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											<div class="panel-body">
												<ul class="schedule-list">
													<li>
														<img src="<?=base_url('assets')?>/upload/others/sc5.jpg" alt="">
														<div class="schedule-cont">
															<span class="time">10:00-11:00</span>
															<p>Nullam mollis.</p>
															<p class="schedule-auth">by <span>Amy Adams</span></p>
														</div>
													</li>
													<li>
														<img src="<?=base_url('assets')?>/upload/others/sc1.jpg" alt="">
														<div class="schedule-cont">
															<span class="time">11:00-12:00</span>
															<p>Suspendisse potenti.</p>
															<p class="schedule-auth">by <span>John Cornick</span></p>
														</div>
													</li>
													<li class="time-off-item">
														<i class="ionicons ion-coffee"></i>
														<span class="time">12:00-13:30</span>
														<span class="time-off">Lunch Time!</span>
													</li>
													<li>
														<img src="<?=base_url('assets')?>/upload/others/sc2.jpg" alt="">
														<div class="schedule-cont">
															<span class="time">13:30-15:00</span>
															<p>Sed egestas, ante et vulputate volutpat</p>
															<p class="schedule-auth">by <span>Dalim Kumar</span></p>
														</div>
													</li>
													<li>
														<img src="<?=base_url('assets')?>/upload/others/sc4.jpg" alt="">
														<div class="schedule-cont">
															<span class="time">15:00-16:00</span>
															<p>Praesent elementum hendrerit tortor.</p>
															<p class="schedule-auth">by <span>Seth Rollis</span></p>
														</div>
													</li>
													<li>
														<img src="<?=base_url('assets')?>/upload/others/sc3.jpg" alt="">
														<div class="schedule-cont">
															<span class="time">15:00-16:00</span>
															<p>Sed semper lorem at felis.</p>
															<p class="schedule-auth">by <span>Andrea Willson</span></p>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingThree">
											<h4 class="panel-title">
												<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													Day 3 / Sunday, 15
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body">
												<ul class="schedule-list">
													<li>
														<img src="<?=base_url('assets')?>/upload/others/sc2.jpg" alt="">
														<div class="schedule-cont">
															<span class="time">10:00-11:00</span>
															<p>Morbi purus libero, faucibus adipiscing, commodo</p>
															<p class="schedule-auth">by <span>Hubert Aguilar</span></p>
														</div>
													</li>
													<li>
														<img src="<?=base_url('assets')?>/upload/others/sc5.jpg" alt="">
														<div class="schedule-cont">
															<span class="time">11:00-12:00</span>
															<p>Vestibulum volutpat, lacus a ultrices sagittis</p>
															<p class="schedule-auth">by <span>John Cornick</span></p>
														</div>
													</li>
													<li class="time-off-item">
														<i class="ionicons ion-coffee"></i>
														<span class="time">12:00-13:30</span>
														<span class="time-off">Lunch Time!</span>
													</li>
													<li>
														<img src="<?=base_url('assets')?>/upload/others/sc1.jpg" alt="">
														<div class="schedule-cont">
															<span class="time">13:30-15:00</span>
															<p>Morbi purus libero, faucibus adipiscing</p>
															<p class="schedule-auth">by <span>Dalim Kumar</span></p>
														</div>
													</li>
													<li class="time-off-item">
														<i class="ionicons ion-beer"></i>
														<span class="time">17:00-23:30</span>
														<span class="time-off">After Party!</span>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="article-box">
							<div class="title-line">
								<span>Conference strategy</span>
								<h1>ICIERA 2024</h1>
								<span>Sponsored By</span>
							</div>
							<p><span>GBC is a gathering of thousands of leaders and influencers from all walks of life and all around the world</span></p>
							<p>Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. </p>
							<p>Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
							<a class="default-button" href="#">Buy Ticket</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End agenda section -->

		<!-- event-banner-section 
			================================================== -->
		<section class="event-banner-section d-none">
			<div class="container">
				<div class="subscribe-banner-box">
					<div class="title-section white-style center">
						<span class="italic-style">Subscribe to stay informed</span>
						<h1>Are you ready joing us?</h1>
					</div>
					<form class="subscribe">
						<input type="text" name="enter-your-email" id="enter-your-email" placeholder="enter your email ..." />
						<input type="submit" name="subscribe-button" id="subscribe-button" value="Subscribe" />
					</form>
				</div>
			</div>
		</section>
		<!-- End event-banner section -->

		<!-- pricing-section 
			================================================== -->
		<section class="pricing-section3 d-none">
			<div class="container">
				<div class="pricing-box">

					<div class="row">
						<div class="col-lg-6">
							<div class="article-box white-style">
								<div class="title-line">
									<span>Our Pricing</span>
									<h1>Buy tickets</h1>
								</div>
								<p>Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar.</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="table-box">
								<h2>Early Bird</h2>
								<p><span>$29</span>/ PER DAY</p>
								<ul class="pricing-list">
									<li>Entrance</li>
									<li>Coffee Break</li>
									<li>Launch</li>
									<li>Photos Allowed</li>
									<li>Certificate</li>
									<li>Workshop</li>
								</ul>
								<a href="#" class="default-button">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="table-box enterprise">
								<h2>Enterprise</h2>
								<p><span>$119</span>/ PER DAY</p>
								<ul class="pricing-list">
									<li>VIP Seating</li>
									<li>Premium Access</li>
									<li>Coffee Break</li>
									<li>Launch</li>
									<li>Photos and Video Allowed</li>
									<li>Certificate</li>
									<li>Workshop</li>
									<li>Free After Party</li>
								</ul>
								<a href="#" class="default-button">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End pricing section -->

		<!-- clients-section 
			================================================== -->
		<section class="clients-section with-article d-none">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="client-box">
							<ul class="client-list">
								<li><a href="#"><img src="<?=base_url('assets')?>/images/clients/1.png" alt=""></a></li>
								<li><a href="#"><img src="<?=base_url('assets')?>/images/clients/2.png" alt=""></a></li>
								<li><a href="#"><img src="<?=base_url('assets')?>/images/clients/3.png" alt=""></a></li>
								<li><a href="#"><img src="<?=base_url('assets')?>/images/clients/4.png" alt=""></a></li>
								<li><a href="#"><img src="<?=base_url('assets')?>/images/clients/5.png" alt=""></a></li>
								<li><a href="#"><img src="<?=base_url('assets')?>/images/clients/6.png" alt=""></a></li>
								<li><a href="#"><img src="<?=base_url('assets')?>/images/clients/9.png" alt=""></a></li>
								<li><a href="#"><img src="<?=base_url('assets')?>/images/clients/8.png" alt=""></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="article-box">
							<div class="title-line">
								<span>Thank you to our sponsors</span>
								<h1>The Partners</h1>
							</div>
							<p>Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
							<a class="default-button" href="#">Become a Sponsor</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End clients section -->

		<!-- contact-section 
			================================================== -->
		<section class="contact-section4 d-none">
			<div class="contact-box">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="title-section white-style">
								<span class="italic-style">Connect with us</span>
								<h1>Venue &amp; Contacts</h1>
							</div>
							<div class="contact-info">
								<p><i class="ionicons ion-ios-location-outline"></i>Brookwood Ave San Jose, CA 95116</p>
								<p><i class="ionicons ion-ios-telephone-outline"></i>1-800-123-1234</p>
								<p><i class="ionicons ion-ios-email-outline"></i>gbc@mail.com</p>
							</div>
							<ul class="social-icons">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-6">
							<div class="title-section white-style">
								<span class="italic-style">Join the newsletter</span>
								<h1>Sign up for updates</h1>
							</div>
							<form class="join-newsletter">
								<input type="text" name="your-name" id="your-name" placeholder="Your Name (required)" />
								<input type="text" name="your-email" id="your-email" placeholder="Your Email (required)" />
								<input type="submit" name="join-button" id="join-button" value="Join Us" />
							</form>
						</div>
					</div>	
				</div>

			</div>
			<div id="map"></div>
		</section>
		<!-- End contact section -->

