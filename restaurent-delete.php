<?php require_once ("include/controllers/RestaurentController.php"); ?>
<?php
$restaurentController->search_id =$_GET['id']; 
 $row=$restaurentController->search(); 
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
							
								<?php foreach($row as $data){?>

								<div class="profile-photo">
								<?php if (empty($data['res_image'])) {
											$dish['res_image'] = "kfc.jpg";
										} ?>
								<img src="vendors/images/restaurant/<?php echo $data['res_image'] ?>" alt="" >
							</div>	
							<h5 class="text-center"><?php echo $data['res_name']; ?></h5>
							<div class="profile-info">
								<h5 class="mb-20 weight-500">Basic Information</h5>
								<ul>
									<li>
										<span>City:</span>
										<?php echo $data['res_address']; ?>
									</li>
									<li>
										<span>Registration Date:</span>
										<?php echo $data['res_register_date']; ?>
									</li>
								</ul>
							</div>
						<?php } ?>
						</div>
						<form action="include/controllers/RestaurentController.php?id=<?php echo $data['res_id'] ?>&picture=<?php echo $data['res_image'] ?>" method="post" enctype="multipart/form-data" >
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