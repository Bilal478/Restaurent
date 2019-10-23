<?php require_once("C:/xampp/htdocs/restaurant/include/controllers/RestaurentController.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="src/plugins/dropzone/src/dropzone.css">
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
								<h4>Registration Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dishes</li>
							</ol>
						</nav>	
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Add New Dish</h4>
							<p class="mb-30 font-14">please provide information</p>
						</div>
					</div>
					<form action="include/controllers/DishController.php" method="post"
					enctype="multipart/form-data">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Dish Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Name" 
								name="name" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Dish Price</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="Price" type="Number" 
								name="price" required >
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Select Restaurent</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" required name="res_id">
									<option selected="">Choose...</option>

									<?php $data=$restaurentController->show();
									foreach ($data as $data) {?>
									<option value="<?php echo $data['res_id'] ?>"><?php echo $data['res_name'] ?></option>
								<?php } ?>
									
								</select>
							</div>
						</div>
						<label>Select Image</label>
						<div class="form-group" style="margin-left: 17%">
							<input type="file" class="form-control-file form-control height-auto"
							name="image[]" multiple="">
						</div>
						
				
				
				<!-- <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue">Dropzone</h4>
						</div>
					</div>
					<div class="dropzone" action="#" id="my-awesome-dropzone">
						<div class="fallback">
							<input type="file" name="image" />
						</div>
					</div>
				</div> -->
				<div class="text-right">
					<input class="btn btn-primary" type="submit" value="Submit" name="submit">
					</div>	
			</form>		
				</div>
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	
	<?php include('include/script.php'); ?>
	<script src="src/plugins/dropzone/src/dropzone.js"></script>
	<script>
		Dropzone.autoDiscover = false;
		$(".dropzone").dropzone({
			addRemoveLinks: true,
			removedfile: function(file) {
				var name = file.name;
				var _ref;
				return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
			}
		});
	</script>
</body>
</html>