 <?php require_once ("C:/xampp/htdocs/restaurant/include/autoloaders/CommentAutoloader.php") ?>
<?php 

class CommentController extends CommentModel{

	public function save(){
		$this->insert_comment();
		header("Location:../../index.php");
	}

	public function show(){
	 	return $this->show_comments();
	}

	public function search(){
		return $this->search_comment();
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
?>