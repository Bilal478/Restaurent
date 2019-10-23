<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Registration Form</h4>
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
							<h4 class="text-blue">Register New User</h4>
							<p class="mb-30 font-14">please provide your information</p>
						</div>
					</div>
					<p style="color: #FF0000" class="text-center"> <?php 
					 if(isset($_SESSION['passworError'])){ echo $_SESSION['passworError'];
					  unset($_SESSION['passworError']); } ?></p>
					<form action="include/controllers/UserController.php" method="post">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">First Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="First Name" name="firstname" required="name">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Last Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="Last Name" type="text" name="lastname" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label" >Email</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="abc@example.com" type="email" name="email" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">City</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="City" type="text" name="address" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder=******** type="password" name="password" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Confirm password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder=******** type="password" name="confirm_password" required>
							</div>
						</div>
						<div class="form-group row" id="user">
							<label class="col-sm-12 col-md-2 col-form-label">User Type</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name="type" required>
									<option value="">Chose...</option>
									<option value="user">User</option>
									<option value="admin">Admin</option>
								</select>
							</div>
						</div>
						<div class="text-right">
						<input class="btn btn-primary" type="submit" value="Submit" name="submit">
						</div>
					</form>
					
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>
