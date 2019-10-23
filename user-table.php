
<?php $count=0; $value = 0; require_once ("include/controllers/UserController.php"); 
session_start();
?>
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
			<h4>Users List</h4>
		</div>	
		<nav aria-label="breadcrumb" role="navigation">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Users</li>
			</ol>
		</nav>
		<?php $data=$userController->show(); ?>
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
<table class="table table-striped">
  <thead>
    <tr>
	    <th scope="col">ID</th>
	    <th>First </th>
		<th>Last </th>
	    <th>City</th>
	    <th>Register Date</th>
	    <th>Update ago</th>
	    <th>Type</th>
	    <th>Action</th>
    </tr>
  </thead>

  	<?php $a=0; foreach ($data as $row ) {
  		$count++;
  		echo "<tr>";

  		echo "<td>".$row['usr_id']."</td>";
  		echo "<td>".$row['usr_first_name']."</td>";
  		echo "<td>".$row['usr_last_name']."</td>";
  		echo "<td>".$row['usr_address']."</td>";
  		echo "<td>".$row['usr_register_date']."</td>";
  		echo "<td>".$userController->update_before($row['usr_update_date'],$row['usr_register_date'])."</td>";
  		echo "<td>".$row['usr_role']."</td>";


  		echo "<td><span>
  		<a id ='del' class='btn btn-danger' href='user-delete.php?id={$row['usr_id']}'>delete</a>
  		<a class='btn btn-secondary' href='user-update-form.php?id={$row['usr_id']}'>update</a>
  		<a class='btn btn-primary' href='profile.php?id={$row['usr_id']}'>view<a>
  		</span></td>";

  		

  		 if($row['usr_id'] == $_SESSION['id']){ 
        $value = --$count;
  			echo "</tr>";} 
  		

  	}?>
    

</table>			
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
  <script type="text/javascript"> 
function disable(){

}
    var v  = document.querySelectorAll('#del')
  v["<?php echo $value ?>"].style.background = "#Fe0000"
  v["<?php echo $value ?>"].style.pointerEvents="none";
</script>
</body>
</html>