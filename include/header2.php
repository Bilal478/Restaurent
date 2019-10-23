 	<?php session_start(); ?>
	
	
		<div class="header-right">
			
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon"><i class="fa fa-user-circle" style="font-size:17px"></i></span>
						<span class="user-name"><?php  echo $_SESSION['name']; ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.php?id=<?php echo $_SESSION['id']; ?>"><i class="fa fa-user-md" aria-hidden="true"></i> Profile</a>
						<form action="include/controllers/SessionController.php=" method="post">
						<input type="hidden" name="logout">
						<a class="dropdown-item" href="include/controllers/SessionController.php?a=logout"> Log Out</a>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	