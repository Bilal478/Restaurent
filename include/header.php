	<?php session_start(); ?>
	<div class="pre-loader"></div>
	<div id='header' class="header clearfix">
		<div class="header-right">
			<div class="brand-logo">
				<a href="index.php">
					<img src="vendors/images/ulogo.png" alt="" class="mobile-logo">
				</a>
			</div>
			<div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon"><i class="fa fa-user-circle" style="font-size:17px"></i></span>
						<span class="user-name"><?php  echo $_SESSION['name']; ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.php?id=<?php echo $_SESSION['id']; ?>"><i class="fa fa-user-md" aria-hidden="true"></i> Profile</a>
						<a class="dropdown-item" href="reset-password.php?id=<?php echo $_SESSION['id']; ?>"><i class="fa fa-user-md" aria-hidden="true"></i>Change Password</a>
						<form action="include/controllers/SessionController.php=" method="post">
						<input type="hidden" name="logout">
						<a class="dropdown-item" href="include/controllers/SessionController.php?a=logout" ><i class="fa fa-user-md" aria-hidden="true"></i> Log Out</a>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	