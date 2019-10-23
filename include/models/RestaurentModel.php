 
<?php

class RestaurentModel extends MySQLDatabase
{
	
	public $table = 'restaurant';
	public $id='res_id';
	public $array_attributes;
	public $res_name;
	public $res_address;
	public $pic_name;
	public $pic_tmp_name;
	
	/**
	*insert user 
	*
	*@param
	*@return
	**/
	public function insert_restaurent(){
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
		$this->res_name = $_POST["restaurent_name"];
		$this->address = $_POST["restaurent_address"];
		$this->registration_date = $this->today_data();
		$this->updation_date = $this->today_data();
		$this->pic_name = $_FILES['image']['name'];
		$this->pic_tmp_name = $_FILES['image']['tmp_name'];
		move_uploaded_file($this->pic_tmp_name,"../../vendors/images/restaurant/{$this->pic_name}");

		$this->array_attributes = [
		 	"res_name" => "\"{$this->res_name}\"",
			"res_address" => "\"{$this->address}\"",
			"res_register_date" => "\"{$this->registration_date}\"",
			"res_update_date" => "\"{$this->updation_date}\"",
			"res_image" => "\"{$this->pic_name}\"",
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
		$this->res_name = $_POST["name"];
		$this->address = $_POST["address"];
		$this->updation_date = $this->today_data();

		if(!empty($_FILES['image']['name'] )){
			$pic = $_GET['picture'];
			unlink("C:/xampp/htdocs/restaurant/vendors/images/restaurant/$pic");
			$this->pic_name = $_FILES['image']['name'];
			$this->pic_tmp_name = $_FILES['image']['tmp_name'];
			move_uploaded_file($this->pic_tmp_name,"../../vendors/images/restaurant/{$this->pic_name}");
		}
		else{
			$this->pic_name=$_GET['picture'];
		}
		$this->array_attributes = [
		 	"res_name" => "\"{$this->res_name}\"",
			"res_address" => "\"{$this->address}\"",
			"res_update_date" => "\"{$this->updation_date}\"",
			"res_image" => "\"{$this->pic_name}\"",
			"usr_id" => "\"{$_SESSION['id']}\""
		];
	 					
	}

	/**
	*show users 
	*
	*@param
	*@return array
	**/
	public function show_restaurents(){
	return $this->show_record();

	}

	/**
	*search user
	*
	*@param
	*@return array
	**/
	public function search_restaurents(){
	return $this->search_record();
	}	

	/**
	*update user 
	*
	*@param
	*@return
	**/
	public function update_restaurent(){
		$this->updated_fields();
		$this->update_record();
	}

	/**
	*delete user
	*
	*@param
	*@return
	**/
	public function delete_restaurent(){
		$this->delete_record();
	}
public function search_comment_by_join(){
	return $this->search_by_join();
	}	
	}
	$restaurentModel=new RestaurentModel();


?>