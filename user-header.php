<body style="background: #EBF3F6">

<div style="width: 100%;background: #FFFFFF; height: 12%;border: 2px solid #E6E6F2; margin-top: -10%;position: relitive;">

	<div class="text-right" style="padding-top: 1%">
		<img src="vendors/images/ulogo.png" style="margin-right: 1100px; margin-top: -1%">
	<a id="logOut" style="color: #FFFF;margin-right: 2%;margin-top: -9%" href ="include/controllers/SessionController.php?a=logout" class="btn btn-secondary" >Log out</a>
	<a id = "signIn" style="color: #FFFF;margin-right: 10%;margin-top: -9%" href ="login.php" class="btn btn-secondary"  >Sign in</a>
	<a id = "signUp" style="color: #FFFF;margin-right: 1%;margin-top: -9%;margin-left: -10%" href ="user-signup.php" class="btn btn-secondary"  >Sign Up</a>
	<a id = "dashboard" style="color: #FFFF;margin-right: 1%;margin-top: -9%;margin-left: 0%" href ="admin.php" class="btn btn-secondary"  >DashBoard</a>
	<a id = "profile" style="color: #FFFF;margin-right: 1%;margin-top: -9%;margin-left: 0%" href ="profile.php?id=<?php echo $_SESSION['id'] ?>" class="btn btn-secondary"  >Profile</a>
	<a id = "reset_password" style="color: #FFFF;margin-right: 1%;margin-top: -9%;margin-left: 0%" href ="reset-password.php?id=<?php echo $_SESSION['id'] ?>" class="btn btn-secondary"  >Change Passsword</a>
	</div>
</div>

