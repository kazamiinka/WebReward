<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Daftar Reward</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">  	

		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
		<!-- Animate.css -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/icomoon.css">
		<!-- Themify Icons-->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/themify-icons.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">

		<!-- Magnific Popup -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css">

		<!-- Owl Carousel  -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css">

		<!-- Theme style  -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

		<!-- Modernizr JS -->
		<script src="<?php echo base_url() ?>assets/js/modernizr-2.6.2.min.js"></script>
	
	</head>

	<body>
		
		<div class="gtco-loader"></div>
	
		<div id="page">

	
		<!-- <div class="page-inner"> -->
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<img src="<?php echo base_url() ?>assets/images/logo.png" style="float: left; position: relative; width: 42px; height: 35px">
					<div id="gtco-logo"><a href="https://www.telkom.co.id/" >TELKOM INDONESIA</a></div>								
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="btn-cta"><a href="https://www.telkom.co.id/servlet/tk/id_ID/contact_detail/detail_kontak.html"><span>Contacts</span></a></li>
					</ul>	
				</div>
			</div>
			
			</div>
		</nav>
	
		<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url('<?php echo base_url() ?>assets/images/img1.jpg')" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-left" >					

						<div class="row row-mt-15em">

						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab" >
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Please Login</h3>
											<?php echo form_open('login') ?>
												
												<div class="row form-group">
													<div class="col-md-12">
														<label>Username</label>
														<input type="text" id="username" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label>Password</label>
														<input type="password" id="password" class="form-control">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Login">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12" style="text-align: center;color:white;">
														<?php if(isset($_SESSION)) {
														echo $this->session->flashdata('flash_data');
														} ?>
														
													</div>											
												</div>
											<?php echo form_close() ?>										
										</div>
									</div>
								</div>
							</div>

						</div>						
						</div>
					</div>
				</div>
			</div>
		</header>


		<footer id="gtco-footer" role="contentinfo" style="background-image: url('<?php echo base_url() ?>assets/images/black.jpg')" data-stellar-background-ratio="0.7">
			<div class="gtco-cover gtco-cover-sm">
			<div class="overlay"></div>
				<div class="gtco-container text-center">
					<div class="display-t">
						<div class="display-tc">
							<h1>&ldquo; We are here to make a victory for glory&rdquo;</h1>
							<p>&mdash; AJS, CEO of TelkomGroup</p>
						</div>	
					</div>
				</div>
			</div>

			<div class="overlay"></div>

			<div class="gtco-container">
				<div class="row row-pb-md">
					<div class="col-md-12 text-center copyright">
						<p>	<small class="block">&copy; 2017 PT Telkom Indonesia (Persero) Tbk. All Rights Reserved.</small> 
							<small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> </small></p>
					</div>
				</div>		
			</div>
		</footer>
		<!-- </div> -->

		</div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
		</div>
	
		<!-- jQuery -->
		<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="<?php echo base_url() ?>assets/js/jquery.waypoints.min.js"></script>
		<!-- Carousel -->
		<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
		<!-- countTo -->
		<script src="<?php echo base_url() ?>assets/js/jquery.countTo.js"></script>

		<!-- Stellar Parallax -->
		<script src="<?php echo base_url() ?>assets/js/jquery.stellar.min.js"></script>

		<!-- Magnific Popup -->
		<script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/magnific-popup-options.js"></script>
	
		<script src="<?php echo base_url() ?>assets/js/moment.min.js"></script>

		<!-- Main -->
		<script src="<?php echo base_url() ?>assets/js/main.js"></script>

	</body>
</html>


