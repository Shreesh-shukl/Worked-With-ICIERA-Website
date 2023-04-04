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
						<img src="<?=base_url('assets/images/banner.jpg')?>" class="img-fluid">
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
							<a href="#">view venue</a>
						</div>
						<div class="col-lg-4">
							<h2>When? <i class="ionicons ion-ios-calendar-outline"></i></h2>
							<p>Wednesday to Friday <br> 22 Dec to 24 Dec 2021</p>
							<a href="#">view schedule</a>
						</div>
						<div class="col-lg-4">
							<h2>Organized by <i class="ionicons ion-ios-people-outline"></i></h2>
							<p>Department of ECE<br>MAIT, New Delhi</p>
							<a href="#">view committees</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="agenda-section py-5">
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
		<section class="about-conference-section py-5" id="about-section">
			<div class="container pt-5">
				<div class="row">
					<div class="col-lg-6">
						<div class="conference-features">
							<div class="row">
								<div class="conference-post col-12 col-md-6">
									<div class="inner-box">
										<i class="ionicons ion-android-upload text-light"></i>
										<h2>15th Jul 2021</h2>
										<p>Paper Submission Deadline</p>
									</div>
								</div>
								<div class="conference-post col-12 col-md-6">
									<div class="inner-box">
										<i class="ionicons ion-speakerphone text-light"></i>
										<h2>30th Aug 2021</h2>
										<p>Acceptance Notification</p>
									</div>
								</div>
								<div class="conference-post col-12 col-md-6">
									<div class="inner-box">
										<i class="ionicons ion-camera text-light"></i>
										<h2>01st Oct 2021</h2>
										<p>Final Camera-ready paper</p>
									</div>
								</div>
								<div class="conference-post col-12 col-md-6">
									<div class="inner-box">
										<i class="ionicons ion-android-checkbox-outline text-light"></i>
										<h2>15th Nov 2021</h2>
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
							<p><span>The ICIERA 2021 committee invites researchers worldwide to submit papers and share valuable experiences.</span></p>
							<p>The conference will consists of 6 different Tracks as listed below:</p>
							<h6>Track 01: Industrial Communications and Signal Processing</h6>
							<h6>Track 02: Industrial Electronics</h6>
							<h6>Track 03: Industrial Sensors and Industrial Informatics</h6>
							<h6>Track 04: Industrial Control & Applications</h6>
							<h6>Track 05: Power and energy systems (Special Focus on Smart Applications)</h6>
							<h6>Track 06: Invited and Special Tracks</h6>
							<a class="default-button" href="#">MORE DETAILS</a>
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
								<p>Will be updated soon</p>
								<!--<p>Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. </p>
								<a class="default-button" href="#">Apply to be a speaker</a>-->
							</div>
						</div>

						<!--
						<div class="col-md-3 col-sm-6">
							<div class="speaker-post">
								<a href="#"><img src="<?=base_url('assets')?>/upload/speakers/sp1.jpg" alt=""></a>
								<div class="speaker-content">
									<h2><a href="#">Daniel Robert</a></h2>
									<span>CEO, Founder at GBC</span>
									<ul class="social-links">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a class="personal-web" href="#"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="speaker-post">
								<a href="#"><img src="<?=base_url('assets')?>/upload/speakers/sp2.jpg" alt=""></a>
								<div class="speaker-content">
									<h2><a href="#">Katie Stricker</a></h2>
									<span>Brand Manager</span>
									<ul class="social-links">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>-->
					</div>

					<div class="row d-none">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="speaker-post">
								<a href="#"><img src="<?=base_url('assets')?>/upload/speakers/sp3.jpg" alt=""></a>
								<div class="speaker-content">
									<h2><a href="#">Jack Peterson</a></h2>
									<span>Head Engineering</span>
									<ul class="social-links">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a class="personal-web" href="#"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="speaker-post">
								<a href="#"><img src="<?=base_url('assets')?>/upload/speakers/sp4.jpg" alt=""></a>
								<div class="speaker-content">
									<h2><a href="#">Andrea Willson</a></h2>
									<span>Brand Manager</span>
									<ul class="social-links">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="speaker-post">
								<a href="#"><img src="<?=base_url('assets')?>/upload/speakers/sp5.jpg" alt=""></a>
								<div class="speaker-content">
									<h2><a href="#">Darren Doe</a></h2>
									<span>Creative Director</span>
									<ul class="social-links">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a class="personal-web" href="#"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="speaker-post">
								<a href="#"><img src="<?=base_url('assets')?>/upload/speakers/sp6.jpg" alt=""></a>
								<div class="speaker-content">
									<h2><a href="#">Piera Mcclure</a></h2>
									<span>Partner Startup</span>
									<ul class="social-links">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="personal-web" href="#"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="row d-none">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="speaker-post">
								<a href="#"><img src="<?=base_url('assets')?>/upload/speakers/sp7.jpg" alt=""></a>
								<div class="speaker-content">
									<h2><a href="#">Martin Smith</a></h2>
									<span>Producer, CSI</span>
									<ul class="social-links">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a class="personal-web" href="#"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="speaker-post">
								<a href="#"><img src="<?=base_url('assets')?>/upload/speakers/sp8.jpg" alt=""></a>
								<div class="speaker-content">
									<h2><a href="#">Robert Reed</a></h2>
									<span>Web Technologist</span>
									<ul class="social-links">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="speaker-post">
								<a href="#"><img src="<?=base_url('assets')?>/upload/speakers/sp9.jpg" alt=""></a>
								<div class="speaker-content">
									<h2><a href="#">Steve Smith</a></h2>
									<span>Brand Manager</span>
									<ul class="social-links">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a class="personal-web" href="#"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End speaking section2 -->

		