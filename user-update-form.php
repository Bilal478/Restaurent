<?php require_once ("include/controllers/UserController.php"); ?>
<?php
$userController->search_id =$_GET['id']; 
 $row=$userController->search(); 
  ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
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
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Updating Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">users</li>
							</ol>
						</nav>	
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Update User</h4>
							<p class="mb-30 font-14">please update your information</p>
						</div>
					</div>
					<?php foreach($row as $user) {?>
					<form action="include/controllers/UserController.php?id=<?php echo $user['usr_id'] ?>" method="post">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">First Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="First Name" name="firstname" required="name" value="<?php echo $user['usr_first_name'] ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Last Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="Last Name" type="text" name="lastname" required value="<?php echo $user['usr_last_name'] ?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">City</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="City" type="text" name="address" required value="<?php echo $user['usr_address'] ?>">
							</div>
						</div>
						<div class="form-group row" id="type">
							<label class="col-sm-12 col-md-2 col-form-label">User Type</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="type"  
								value="<?php echo $user['usr_address'] ?>">
									<option value="" >Chose...</option>
									<option value="user" 
									<?php if($user['usr_role'] == "user") echo 'selected'; ?>>User</option>
									<option value="admin" 
									<?php if($user['usr_role'] == "admin") echo 'selected'; ?>>Admin</option>
								</select>
							</div>
						</div>
						<div class="text-right">
						<input class="btn btn-primary" type="submit" value="Update" name="update" 
						</div>
						</div>
					</form>
					<?php } ?>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>
<?php 
		if($_SESSION['type'] == "user"){ ?>
			<script>
		 	document.getElementById('type').style.display = 'none'
		 	document.getElementById('hs').style.display = 'none'
		 	document.getElementById('profile-style').style.marginRight = "20%";
		 	document.getElementById('profile-style').style.marginTop = "-7%";
		 </script>
	<?php	}

		?>   	