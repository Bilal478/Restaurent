<?php require_once ("include/controllers/RestaurentController.php"); ?>
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
		<div class="title">
			<h4>Restaurents List</h4>
		</div>	
		<nav aria-label="breadcrumb" role="navigation">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Restaurents</li>
			</ol>
		</nav>
		<?php $data=$restaurentController->show(); 
		 ?>
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
<table class="table table-striped">
  <thead>
    <tr>
	    <th scope="col">ID</th>
	    <th>Name</th>
		<th>Address</th>
	    <th>Registration Date</th>
	    <th>Update ago</th>
	    <th>Action</th>
    </tr>
  </thead>
  <?php while ($row=mysqli_fetch_assoc($data)) {

  		echo "<tr>";

  		echo "<td>".$row['res_id']."</td>";
  		echo "<td>".$row['res_name']."</td>";
  		echo "<td>".$row['res_address']."</td>";
  		echo "<td>".$row['res_register_date']."</td>";
  		echo "<td>".$restaurentController->update_before($row['res_update_date'],$row['res_register_date'])."</td>";

  		echo "<td><span>
  		<a class='btn btn-danger' href='restaurent-delete.php?id={$row['res_id']}'>delete</a>
  		<a class='btn btn-secondary' href='restaurent-update.php?id={$row['res_id']}'>update</a>
  		<a class='btn btn-primary' href='restaurent-profile.php?id={$row['res_id']}'>view<a>
  		</span></td>";

  		echo "</tr>";
  	}?>
    
</table>			
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>