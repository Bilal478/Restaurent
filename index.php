<?php
session_start();
require_once ("include/controllers/CommentController.php"); 
require_once ("include/controllers/DishController.php"); 
require_once ("include/controllers/RestaurentController.php");
?>

<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	
	<!-- Slick Slider css -->
	<link rel="stylesheet" type="text/css" href="src/plugins/slick/slick.css">
	<!-- bootstrap-touchspin css -->
	<link rel="stylesheet" type="text/css" href="src/plugin+s/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css">
</head>
<body>

	<div style="margin-bottom: 9.8%;"></div>
	<?php include('user-header.php'); ?>
	<?php	
	$restaurent = $restaurentController->show();
	foreach ($restaurent as $restaurent) { ?>
<div class="text-center"><h1 style="font-family: Impact"><?php echo $restaurent['res_name'] ?> Restaurent</h1></div>
	<div  class="image-size">
	<div class="text-center">
	<?php if (empty($restaurent['res_image'])) {
				$restaurent['res_image'] = "kfc.jpg";
				} ?>							
	<img src="vendors/images/restaurant/<?php echo $restaurent['res_image'] ?>">						
	</div>
	</div>
	<div class="container">

		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
					
					<div class="text-center" style="background: #FF0000;margin-bottom: 10px">
					<h4 class="text-white" class="mb-20" style="font-family: Bangers; padding-top: 5px;padding-bottom: 5px; ">Dishes Of restaurent</h4>
					</div>
 						<div class="product-list">
						<ul class="row">
							<?php 
						$dishController->id="res_id";
						$dishController->search_id =$restaurent['res_id']; 
 						$dish=$dishController->search(); 
						foreach ($dish as $dish) {
 						?>

							<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="producct-box">
									
										<?php if (empty($dish['dis_image'])) {
											$dish['dis_image'] = "grill.jpg";
										} ?>
										<div class="producct-img">
										 <img src="vendors/images/dish/<?php echo $dish['dis_image']?>" alt="">
									</div>
									 

									<div class="product-caption">
										
										<h4><?php echo $dish['dis_name']; ?></h4>
										<div class="price">
											Price<ins><?php echo $dish['dis_price']; ?></ins>
										
										<?php 
										$commentController->search_id = $dish['dis_id'];
										$num = $commentController->count_rows(); ?>
										<img src="vendors/images/commenTr.png" style="width: 35%;height: 35%;margin-left: 70%;margin-top: -20%">
										<p style="margin-left: 85%;margin-top: -17%"><?php echo $num ?></p>
										

										<a href="dish-comment.php?dis_id=<?php echo $dish['dis_id']?>&name=<?php echo $dish['dis_image']?>&res_id=<?php echo $restaurent['res_id']?>" class="btn btn-outline-primary">Comment</a>

									
									</div>
									</div>
								
							</li>

							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<hr>
	<?php } ?>
	</div>
	<?php include('include/script.php'); ?>
	<!-- Slick Slider js -->
	<script src="src/plugins/slick/slick.min.js"></script>
	<!-- bootstrap-touchspin js -->
	<script src="src/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js">
		
	</script>
	
		
					 <?php 
					 if(isset($_SESSION['email'])){ ?>
					 	<script>
					 	document.getElementById('signUp').style.display = 'none'
						document.getElementById('signIn').style.display = 'none'
						
					</script>
					<?php  }
					 elseif(!isset($_SESSION['email'])) { ?>
					 	<script>
					 	document.getElementById('logOut').style.display = 'none'
					 	document.getElementById('dashboard').style.display = 'none'
					 	document.getElementById('profile').style.display = 'none'
					 	document.getElementById('reset_password').style.display = 'none'
					 </script>
					<?php } 
					if(isset($_SESSION['type']) &&  $_SESSION['type'] ==  "user"){ ?>
						<script>
					 	document.getElementById('dashboard').style.display = 'none'

					 </script>
				<?php	}
					if(isset($_SESSION['type']) &&  $_SESSION['type'] == "admin"){?>
					<script>
					 	document.getElementById('profile').style.display = 'none'
					 	document.getElementById('reset_password').style.display = 'none'

					 </script>
				<?php	} ?>   	
				
		<script>
			
		//document.getElementById("signIn").style.margin-top = "5%"
		document.getElementById("name").style.margin = "40 px"
		
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