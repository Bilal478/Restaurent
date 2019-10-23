<?php require_once ("C:/xampp/htdocs/restaurant/include/autoloaders/RestaurentAutoloader.php") ?>
<?php 

class RestaurentController extends RestaurentModel{

	public function save(){
		$this->insert_restaurent();
		header("Location:../../restaurent-table.php");
	}

	public function show(){
	 	return $this->show_restaurents();
	}

	public function search(){
		return $this->search_restaurents();
	}

	public function update(){
		$this->search_id=$_GET['id']; 
		$this->update_restaurent();
		//header("Location:../../../restaurent-table.php");
	}

	public function delete(){
		$this->search_id=$_GET['id']; 
		$pic = $_GET['picture'];
		unlink("C:/xampp/htdocs/restaurant/vendors/images/restaurant/$pic");
		$this->delete_restaurent();
		header("Location:../../restaurent-table.php");
	}
	 public function by_join(){
	 return $this->search_comment_by_join();
	}
}

$restaurentController = new RestaurentController();
if (isset($_POST['submit'])) {
	$restaurentController->save();
}
if (isset($_POST['delete'])) {
	$restaurentController->delete();
}
if (isset($_POST['update'])) {
	$restaurentController->update();
}

?>