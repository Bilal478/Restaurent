<?php require_once ("C:/xampp/htdocs/restaurant/include/autoloaders/DishAutoloader.php") ?>
<?php 

class DishController extends DishModel{

	public function save(){
		$this->insert_dish();
		header("Location:../../dishes-form.php");
	}

	public function show(){
	 	return $this->show_dishes();
	}

	public function search(){
		return $this->search_dish();
	}

	public function update(){
		$this->search_id=$_GET['id']; 
		$this->update_dish();
		header("Location:../../dishes-table.php");
	}

	public function delete(){
		$this->search_id=$_GET['id']; 
		$pic = $_GET['picture'];
		unlink("C:/xampp/htdocs/restaurant/vendors/images/dish/$pic");
		$this->delete_dish();
		header("Location:../../dishes-table.php");
	}
}

$dishController = new DishController();
if (isset($_POST['submit'])) {
	$dishController->save();
}
if (isset($_POST['delete'])) {
	$dishController->delete();
}
if (isset($_POST['update'])) {
	$dishController->update();
}

?>