<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<!-- Slick Slider css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/slick/slick.css">
	<!-- bootstrap-touchspin css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css">
</head>
<body>
	<div class="container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<div class="product-wrap">
					<div class="product-detail-wrap mb-30">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12">
										<div class="product-slider slider-arrow">
											<div class="product-slide">
												<img src="vendors/images/product-img1.jpg" alt="">
											</div>
											<div class="product-slide">
												<img src="vendors/images/product-img2.jpg" alt="">
											</div>
											<div class="product-slide">
												<img src="vendors/images/product-img3.jpg" alt="">
											</div>
											<div class="product-slide">
												<img src="vendors/images/product-img4.jpg" alt="">
											</div>
										</div>
												<div class="product-slider-nav">
													<div class="product-slide-nav">
														<img src="vendors/images/product-img1.jpg" alt="">
													</div>
													<div class="product-slide-nav">
														<img src="vendors/images/product-img2.jpg" alt="">
													</div>
													<div class="product-slide-nav">
														<img src="vendors/images/product-img3.jpg" alt="">
													</div>
													<div class="product-slide-nav">
														<img src="vendors/images/product-img4.jpg" alt="">
													</div>
												</div>
							</div>
							
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<!-- Slick Slider js -->
	<script src="src/plugins/slick/slick.min.js"></script>
	<!-- bootstrap-touchspin js -->
	<script src="src/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"></script>
	<script>
		jQuery(document).ready(function() {
			jQuery('.product-slider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				infinite: true,
				speed: 1000,
				fade: true,
				asNavFor: '.product-slider-nav'
			});
			jQuery('.product-slider-nav').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				asNavFor: '.product-slider',
				dots: false,
				infinite: true,
				arrows: false,
				speed: 1000,
				centerMode: true,
				focusOnSelect: true
			});
			$("input[name='demo3_22']").TouchSpin({
				initval: 1
			});
		});
	</script>
</body>
</html>