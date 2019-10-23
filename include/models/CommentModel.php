
<?php

class CommentModel extends MySQLDatabase
{
	
	public $table = 'comments';
	public $id='dis_id';
	public $array_attributes;
	public $com_text;
	public $res_id="res_id";
	public $dis_id="dis_id";
/*	function __construct()
	{
		
	}
*/
	/**
	*insert user 
	*
	*@param
	*@return
	**/
	public function insert_comment(){
		$this->save_fields();
		$this->insert_record();
	}

	/**
	*save fields
	*
	*@param
	*@return
	**/
	public  function save_fields(){
		session_start();
		$this->com_text = $_POST["comment"];
		$this->dis_id = $_POST["dis_id"];
		$this->res_id = $_POST["res_id"];
		$this->com_date = $this->today_data();
		$this->com_update_date = $this->today_data();
		
		$this->array_attributes = [
		 	"com_text" => "\"{$this->com_text}\"",
		    "com_date" => "\"{$this->com_date}\"",
		    "com_update_date" => "\"{$this->com_update_date}\"",
			"dis_id" => "\"{$this->dis_id}\"",
			"res_id" => "\"{$this->res_id}\"",
			"usr_id" => "\"{$_SESSION['id']}\""
		];
	 					
	}	

	/**
	*update login 
	*
	*@param
	*@return
	**/
	public  function updated_fields(){
		session_start();
		$this->dis_name = $_POST["name"];
		$this->dis_price = $_POST["price"];
		$this->updation_date = $this->today_data();
		

		$this->array_attributes = [
		 	"dis_name" => "\"{$this->dis_name}\"",
		    "dis_price" => "\"{$this->dis_price}\"",
		    "dis_image" => "\"{$this->pic_name}\"",
			"dis_update_date" => "\"{$this->updation_date}\"",
			"usr_id" => "\"{$_SESSION['id']}\"",
		];
	 					
	}

	/**
	*show users 
	*
	*@param
	*@return array
	**/
	public function show_comments(){
	return $this->show_record();

	}

	/**
	*search user
	*
	*@param
	*@return array
	**/
	public function search_comment(){
	return $this->search_record();
	}	

	/**
	*update user 
	*
	*@param
	*@return
	**/
	public function update_comment(){
		$this->updated_fields();
		$this->update_record();
	}
	public function search_comment_by_join(){
	return $this->search_by_join();
	}	
	/**
	*delete user
	*
	*@param
	*@return
	**/
	public function delete_comment(){
		$this->delete_record();
	}

	public function count_comments(){
		return $this->num_rows();
	}	
	}
	$commentModel=new CommentModel();


?>
