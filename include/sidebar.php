		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
		<div id = "sidebar"class="left-side-bar">
		<div class="brand-logo">
			<a href="index.php">
				<img src="vendors/images/ulogo.png" alt="">
			</a>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="index.php" class="dropdown-toggle no-arrow">
							<span class="fa fa-home"></span><span class="mtext">Home</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fas fa-user-alt" style="margin-left: -35px"></span><span class="mtext" style="margin-left: 17px">Users</span>
						</a>
						<ul class="submenu">
							<li><a href="user-form.php">Add</a></li>
							<li><a href="user-table.php">List</a></li>
							<!-- <li><a href="include/controllers/UserController.php?action=show">List</a></li> -->
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class='fas fa-hotel' style="margin-left: -35px"></span><span class="mtext" style="margin-left: 17px">Resturants</span>
						</a>
						<ul class="submenu">
							<li><a href="restaurent-form.php">Add</a></li>
							<li><a href="restaurent-table.php">List</a></li>
							<li><a href="restaurent-with-dishes.php">Restaurent With Dishes List</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fas fa-mortar-pestle" style="margin-left: -35px"></span><span class="mtext" style="margin-left: 17px"> Dishes </span>
						</a>
						<ul class="submenu">
							<li><a href="dishes-form.php">Add</a></li>
							<li><a href="dishes-table.php">List</a></li>
						</ul>
					</li>

				</ul>
			</div>
		</div>
	</div>
<!-- 	<i class="icon-copy fa fa-user-o" aria-hidden="true"></i> -->