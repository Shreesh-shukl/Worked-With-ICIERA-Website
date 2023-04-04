		<!-- footer 
			================================================== -->
		<style>

		</style>
		<footer class="third-style">
			<div class="container">
				<p class="copyright-line">&copy; Copyright ICIERA 2024 | All rights reserved</p>
				<div class="text-center d-block mb-4 counter">
					<a href='https://www.symptoma.it/'>Symptoma®</a>
					<script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=225b5c4f65f10ebb445100fd3bd0a752a7821015'></script>
					<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/844400/t/13"></script>
				</div>
			</div>
		</footer>
		<!-- End footer -->

		</div>
		<!-- End Container -->
		<div class="preloader">
			<img alt="" src="images/loader.gif">
		</div>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:999999">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Important Updates</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<ul>
							<!--<li><strong>Paper submission is open.</strong> Last date for paper submission is extended till 20th Nov 2021. <a href="https://ece.mait.ac.in/iciera21/paper-submission">Submit Your Paper</a></li>-->
							<li><strong>Conference is now a Hybrid conference.</strong> Authors can present their papers in online mode or offline mode as per their convenience.</li>
							
							<!--<li><strong>Registration fee reduced to ₹4000 only</strong> Author registration fee has been reduced to ₹4000 for IEEE members and ₹5000 for Non-IEEE members. (This is valid for Research Scholars). <a href="https://ece.mait.ac.in/iciera21/registration-fee-and-guidelines">Registration Fee Details </a></li>-->
						</ul>
						<a href="https://ece.mait.ac.in/iciera21/assets/downloads/program_outline1.pdf" style="font-size:18px;" class="text-center d-block">
                            <span class=" d-block text-center" style="font-size:22px; font-weight:bold">Click Here to Download Program Outline</span>
                        </a>
					</div>
				</div>
			</div>
		</div>
		<style>
			.modal-backdrop.fade.show{
				z-index: 999991;
			}
		</style>
		<script src="<?= base_url('assets') ?>/js/eventium-plugins.min.js"></script>
		<script src="<?= base_url('assets') ?>/js/countdown.js"></script>
		<script src="<?= base_url('assets') ?>/js/jquery.countTo.js"></script>
		<script src="<?= base_url('assets') ?>/js/popper.js"></script>
		<script src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>
		<!--<script src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en"></script>
	<script src="<?= base_url('assets') ?>/js/gmap3.min.js"></script>-->
		<script src="<?= base_url('assets') ?>/js/script.js"></script>
		<?php if(!isset($_SESSION['show'])){ $_SESSION['show'] = 1; ?>
		<script>
			$(function() {
				$('#exampleModal').modal('show');
			});
		</script>
		<?php } ?>
	</body>

</html>