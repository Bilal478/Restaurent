<?php require_once ("include/controllers/DishController.php"); ?>
<?php require_once ("include/controllers/UserController.php"); ?>
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
			<h4>Dishes List</h4>
		</div>	
		<nav aria-label="breadcrumb" role="navigation">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Dishes</li>
			</ol>
		</nav>
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
<table class="table table-striped">
	<?php $data=$dishController->show(); ?>
  <thead>
    <tr>
	    <th scope="col">ID</th>
	    <th>Name</th>
		<th>Price</th>
	    <th>Restaurent</th>
	    <th>Added By</th>
	    <th>Registration Date</th>
	    <th>Update ago</th>
	    <th>Action</th>
    </tr>
  </thead>
  <?php foreach($data as $row) {

  		$userController->search_id = $row['usr_id']; 
 		$user = $userController->search();

  		foreach ($user as $user) {
  		$usr=$user['usr_first_name'];}

 		$restaurentController->search_id = $row['res_id']; 
 		$restaurent = $restaurentController->search();

 		foreach ($restaurent as $restaurent) {
  		$res=$restaurent['res_name'];}

  		echo "<tr>";

  		echo "<td>".$row['dis_id']."</td>";
  		echo "<td>".$row['dis_name']."</td>";
  		echo "<td>".$row['dis_price']."</td>";
  		echo "<td>".$res."</td>";
  		echo "<td>".$usr."</td>";
  		echo "<td>".$row['dis_adding_date']."</td>";
  		echo "<td>".$dishController->update_before($row['dis_update_date'],$row['dis_adding_date'])."</td>";

  		echo "<td><span>
  		<a class='btn btn-danger' href='dish-delete.php?id={$row['dis_id']}'>delete</a>
  		<a class='btn btn-secondary' href='dish-update.php?id={$row['dis_id']}'>update</a>
  		<a class='btn btn-primary' href='dish-profile.php?id={$row['dis_id']}'>view<a>
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