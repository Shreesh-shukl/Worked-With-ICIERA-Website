    <!-- Container -->
    <div id="container">
        <!-- Header
		    ================================================== -->
        <?php include("./application/views/includes/navigation.php"); ?>
        <section class="pt-5">
            <div class="container">
                <div class="pricing-box">
                    <div class="row">
                        <div class="col text-justify">
                            <div class="title-section">
                                <h1>Invited Speakers</h1>
                            </div>
                            
                        </div>
                        <div class="col-lg-4 d-none">
                            <div class="table-box shadow-large p-5">
                                <h2 class="pt-3">Important Links</h2>
                                <a href="" class="text-dark pt-3 pl-1 d-block">Important Dates</a>
                                <a href="" class="text-dark pt-3 pl-1 d-block">Important Dates</a>
                                <a href="" class="text-dark pt-3 pl-1 d-block">Important Dates</a>
                                <a href="" class="text-dark pt-3 pl-1 d-block">Important Dates</a>
                                <a href="" class="text-dark pt-3 pl-1 d-block">Important Dates</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="speaking-section pt-0 mt-0">
			<div class="container">
				<div class="speakers-box">

					<div class="row">
						<?php for($k=0;$k<count($invited_speakers); ++$k){ ?>
						<div class="col-md-3 col-sm-6">
							<div class="speaker-post">
								<a href="#" class="w-100"><img src="<?=base_url('assets/images/speakers/' . $invited_speakers[$k][0] . ".jpg")?>" style="width:100%" alt=""></a>
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