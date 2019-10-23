
<?php

class DishModel extends MySQLDatabase
{
	
	public $table = 'dishes';
	public $id='dis_id';
	public $array_attributes;
	public $dis_name;
	public $dis_price;
	public $restaurent_id;
	public $pic_name;
	public $pic_tmp_name;
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
	public function insert_dish(){
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
		$pic_string = implode(",", $_FILES['image']['name']);
		$this->dis_name = $_POST["name"];
		$this->dis_price = $_POST["price"];
		$this->restaurent_id = $_POST["res_id"];
		$this->registration_date = $this->today_data();
		$this->updation_date = $this->today_data();

		for ($i=0;  $i < count($_FILES['image']['name'])  ; $i++)  { 
		$this->pic_name = $_FILES['image']['name'][$i];
		$this->pic_tmp_name = $_FILES['image']['tmp_name'][$i];
		move_uploaded_file($this->pic_tmp_name,"../../vendors/images/dish/{$this->pic_name}");
		}


		$this->array_attributes = [
		 	"dis_name" => "\"{$this->dis_name}\"",
		    "dis_price" => "\"{$this->dis_price}\"",
		    "dis_image" => "\"{$pic_string}\"",
			"dis_adding_date" => "\"{$this->registration_date}\"",
			"dis_update_date" => "\"{$this->updation_date}\"",
			"usr_id" => "\"{$_SESSION['id']}\"",
			"res_id" => "\"{$this->restaurent_id}\"" 
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
		if(!empty($_FILES['image']['name'] )){
			$pic = $_GET['picture'];
			unlink("C:/xampp/htdocs/restaurant/vendors/images/dish/$pic");
			$this->pic_name = $_FILES['image']['name'];
			$this->pic_tmp_name = $_FILES['image']['tmp_name'];
			move_uploaded_file($this->pic_tmp_name,"../../vendors/images/dish/{$this->pic_name}");
		}
		else{
			$this->pic_name=$_GET['picture'];
		}

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
	public function show_dishes(){
	return $this->show_record();

	}

	/**
	*search user
	*
	*@param
	*@return array
	**/
	public function search_dish(){
	return $this->search_record();
	}	

	/**
	*update user 
	*
	*@param
	*@return
	**/
	public function update_dish(){
		$this->updated_fields();
		$this->update_record();
	}

	/**
	*delete user
	*
	*@param
	*@return
	**/
	public function delete_dish(){
		$this->delete_record();
	}

	}
	$dishModel=new DishModel();


?>