<?php require_once ("include/controllers/DishController.php"); ?>
<?php
$dishController->search_id =$_GET['id']; 
 $data =$dishController->search();
 
  ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/cropperjs/dist/cropper.css">
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Profile</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Details</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
					<div class="  mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<div class="text-center">
					
							<h5 class="text-center">
								<?php foreach($data as $data){ ?>
									<div class="profile-photo">
								<?php if (empty($data['dis_image'])) {
											$data['dis_image'] = "grill.jpg";
										} ?>
								<img src="vendors/images/dish/<?php echo $data['dis_image'] ?>" alt="" class="avatar-photo">
								
								</div>
								<?php 
								echo $data['dis_name']; ?></h5>
							<div class="profile-info">
								<h5 class="mb-20 weight-500">Basic Information</h5>
								<ul>
									<li>
										<span>Price:</span>
										<?php echo $data['dis_price']; ?>
									</li>
									<li>
										<span>Registration Date:</span>
										<?php echo $data['dis_update_date']; ?>
									</li>
								</ul>
							</div>
						<?php }?>
						</div>
						<form action="include/controllers/DishController.php?id=<?php echo $data['dis_id'] ?>&picture=<?php echo $data['dis_image'] ?>" method="post" enctype="multipart/form-data" method="post">
						<div class="text-right">
						<input class="btn btn-danger" type="submit" value="Delete" name="delete" 
						onclick="window.alert('Agree')">
						</div>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/cropperjs/dist/cropper.js"></script>
</body>
</html>