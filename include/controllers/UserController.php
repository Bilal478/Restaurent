<?php 
require_once ("C:/xampp/htdocs/restaurant/include/autoloaders/UserAutoloader.php") ?>
<?php 

class UserController extends UserModel{

	public function save(){
		$this->insert_user();
		if($_SESSION['type'] == "admin"){
			
		header("Location:../../user-form.php");
		
		}
		else{
			
			header("Location:../../index.php");
			
		}
	}

	public function show(){
	 	return $this->show_users();
	}

	public function search(){
		return $this->search_user();
	}

	public function update(){

		session_start();
		$this->search_id=$_GET['id']; 
		$this->update_user();
		if($_SESSION['type'] == "admin"){
 echo "<script type='text/javascript'>alert('ffffffffffffffffffffff');</script>";
		header("Location:../../user-table.php");
 
	}
		if($_SESSION['type'] == "user"){
			header("Location:../../index.php");
		}
	}

	public function delete(){
		$this->search_id=$_GET['id']; 
		$this->delete_user();
		header("Location:../../user-table.php");
	}

	public function update_password(){
		$this->search_id=$_GET['id']; 
		$this->change_password();
	}
	
}

$userController=new UserController();
if (isset($_POST['submit'])) {
	$userController->save();
}
if (isset($_POST['delete'])) {
	$userController->delete();
}
if (isset($_POST['update'])) {
	$userController->update();
}
if (isset($_POST['update_Password'])) {
	$userController->update_password();
}

?>
