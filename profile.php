<?php require_once ("include/controllers/UserController.php"); ?>
<?php
$userController->search_id =$_GET['id']; 
 $row=$userController->search(); 

  ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/cropperjs/dist/cropper.css">
</head>
<body>
	<div id="hs">
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	</div>
	<div id="profile-style">
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
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
					<div class="  mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<div class="text-center">
							<div class="profile-photo">
								
								<img src="vendors/images/photo2.jpg" alt="" class="avatar-photo">
								
							</div>

							<h5 class="text-center">
								<?php foreach ($row as $data ){
								
							 echo $data['usr_first_name']." ".$data['usr_last_name']; ?>
									
								</h5>
							<div class="profile-info">
								<h5 class="mb-20 weight-500">Contact Information</h5>
								<ul>
									<li>
										<span>Email Address:</span>
										<?php echo $data['usr_email']; ?>
									</li>
									<li>
										<span>City:</span>
										<?php echo $data['usr_address']; ?>
									</li>
									<li>
										<span>Registration Date:</span>
										<?php echo $data['usr_register_date']; ?>
									</li>
								</ul>
							<?php } ?>
							</div>
						</div>
						<a class='btn btn-secondary' href='user-update-form.php?id=<?php echo $_SESSION['id'] ?>'>update</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('include/script.php'); ?>
	<script src="src/plugins/cropperjs/dist/cropper.js"></script>
	<?php 
		if($_SESSION['type'] == "user"){ ?>
			<script>
		 	document.getElementById('hs').style.display = 'none'
		 	document.getElementById('profile-style').style.marginRight = "20%";
		 	document.getElementById('profile-style').style.marginTop = "-7%";
		 </script>
	<?php	}

		?>   	
</body>
</html>