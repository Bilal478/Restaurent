<?php  session_start(); 
if(isset($_SESSION['email'])){
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="vendors/images/login-img.png" alt="login" class="login-img">
			<h2 class="text-center mb-30">Login</h2>
			<p class="text-center" style="color: #FF0000"><?php 
					 if(isset($_SESSION['loginError'])){ echo $_SESSION['loginError'];
					  unset($_SESSION['loginError']); } ?></p>
			<form action="include/controllers/SessionController.php" method="post">
				<div class="input-group custom input-group-lg">
					<input type="text" class="form-control" placeholder="email" name="email">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" placeholder="**********" name="password">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
							-->
							<input type="submit" value="Sign in" name="login"  class="btn btn-outline-primary btn-lg btn-block"></a>
							
						</div>
					</div>
					
				</div>
			</form>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>