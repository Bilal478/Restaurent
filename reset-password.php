<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="vendors/images/login-img.png" alt="login" class="login-img">
			<h2 class="text-center mb-30">Reset Password</h2>
			<p style="color: #FF0000;margin-top: -5%" class="text-center"> <?php 
					 if(isset($_SESSION['passworError'])){ echo $_SESSION['passworError'];
					  unset($_SESSION['passworError']); } ?></p>
			<form action="include/controllers/UserController.php?id=<?php echo $_SESSION['id'] ?>" method="post">
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" placeholder="Previous Password" name="Previous_password" required>
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				
				<p>Enter your new password, confirm and submit</p>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" placeholder="New Password" name="new_password" required>
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" placeholder="Confirm New Password" name="confirm_password"required>
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
							-->
							
							<input class="btn btn-primary" type="submit" value="Submit" name="update_Password">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>