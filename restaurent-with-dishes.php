<?php require_once ("include/controllers/RestaurentController.php"); ?>
<?php require_once("include/controllers/DishController.php"); ?>
<?php require_once ("include/controllers/UserController.php"); ?>
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
				<li class="breadcrumb-item active" aria-current="page">Restaurents</li>
			</ol>
		</nav>
		<form action="restaurent-with-dishes.php" method="post">		
<div class="form-group row">
	<div class="col-sm-12 col-md-10">
		<select class="custom-select col-12" name="res_id">
			<option value="">Choose Restaurent</option>
			<?php 
				$data=$restaurentController->show();
				while ($row=mysqli_fetch_assoc($data)) { ?>
				<option value="<?php echo $row['res_id'] ?>">
					<?php echo $row['res_name'] ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="text-right">
	<input class="btn btn-primary" type="submit" value="Search" name="search">
	</div>
</div>	
</form>
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
<table class="table table-striped">
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
 
  <?php 
   	if(isset($_POST['search'])){
   		$dishController->id = "res_id";
   		$dishController->search_id =$_POST['res_id']; 
		$data =$dishController->search();
//		var_export($data, true);
  		foreach ($data as $row) {

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
  		}
  	}
  ?>

</table>			
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>