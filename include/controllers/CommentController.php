<?php require_once ("C:/xampp/htdocs/restaurant/include/autoloaders/CommentAutoloader.php") ?>
<?php 

class CommentController extends CommentModel{

	public function save(){
		$this->insert_comment();
		header("Location:../../dish-comment.php");
	}

	public function show(){
	 	return $this->show_comments();
	}

	public function search(){
		return $this->search_comment();
	}

	public function update(){
		$this->search_id=$_GET['id']; 
		$this->update_comment();
		header("Location:../../dishes-table.php");
	}

	public function delete(){
		$this->search_id=$_GET['id']; 
		$this->delete_comment();
		header("Location:../../dishes-table.php");
	}
	 public function by_join(){
	 return $this->search_comment_by_join();
	}

	public function count_rows(){
		return $this->count_comments();
	}
}

$commentController = new CommentController();
if (isset($_POST['submit'])) {
	$commentController->save();
}
if (isset($_POST['delete'])) {
	$commentController->delete();
}
if (isset($_POST['update'])) {
	$commentController->update();
}

?>