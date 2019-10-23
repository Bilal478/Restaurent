<?php require_once ("include/controllers/RestaurentController.php"); ?>
<?php
$restaurentController->search_id =$_GET['id']; 
 $row=$restaurentController->search(); 
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
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Updating Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Restaurent</li>
							</ol>
						</nav>	
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Update Restaurent</h4>
							<p class="mb-30 font-14">please update information</p>
						</div>
					</div>
					<?php foreach ($row as $restaurent) { ?>	
					<form action="include/controllers/RestaurentController.php?id=<?php echo 
					$restaurent['res_id'] ?>&picture=<?php echo $restaurent['res_image'] ?>" 
					method="post"
					enctype="multipart/form-data">
					<div class="profile-photo">
								<?php if (empty($restaurent['res_image'])) {
											$restaurent['res_image'] = "kfc.jpg";
										} ?>
								<img src="vendors/images/restaurant/<?php echo $restaurent['res_image'] ?>" alt="">
								
							</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Restaurent Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text"  name="name" value="<?php echo $restaurent['res_name'] ?>" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">City</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="City" type="text" name="address" required value="<?php echo $restaurent['res_address'] ?>">
							</div>
						</div>
						<div class="form-group">
							<label>Update Image</label>
							<input type="file" class="form-control-file form-control height-auto" 
							name="image">
						</div> 
						<div class="text-right">
						<input class="btn btn-primary" type="submit" value="Update" name="update"> 
						</div>
						
					</form>
					<?php } ?>
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>