
<?php

class UserModel extends MySQLDatabase
{
	
	public $table = 'user';
	public $id='usr_id';
	public $array_attributes;
	public $first_name;
	public $last_name;
	public $email;
	public $password;
	public $address;
	public $type;
	public $name;
	public $pass;
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
	public function insert_user(){
		$this->save_fields();

		
	}

	/**
	*save fields
	*
	*@param
	*@return
	**/
	public  function save_fields(){

		$this->first_name = $_POST["firstname"];
		$this->last_name = $_POST["lastname"];
		$this->email = $_POST["email"];
		$this->password = $_POST["password"];
		$hashing_password = password_hash($this->password, PASSWORD_DEFAULT);
		$this->address = $_POST["address"];
		$this->registration_date = $this->today_data();
		$this->updation_date = $this->today_data();
		$this->type = $_POST["type"];
		$user_side = $_POST["user_side"];

		$this->array_attributes = [
		 	"usr_first_name" => "\"{$this->first_name}\"",
		    "usr_last_name" => "\"{$this->last_name}\"",
			"usr_email" => "\"{$this->email}\"",
			"usr_pasword" => "\"{$hashing_password}\"",
			"usr_address" => "\"{$this->address}\"",
			"usr_register_date" => "\"{$this->registration_date}\"",
			"usr_update_date" => "\"{$this->updation_date}\"",
			"usr_role" => "\"{$this->type}\""
		];
		session_start();
		
	if(!empty($this->auth())){
			
			$_SESSION['passworError'] = "* Email already exists";
			if($user_side != 'user_side')
			header("Location:../../user-form.php");
			else{
				header("Location:../../user-signup.php");
			}
	}
		
	 else if( strlen($this->password) < 6){
			$_SESSION['passworError'] = "* Pleaz enter password greater then 6 character";
			if($user_side != 'user_side')
			header("Location:../../user-form.php");
			else{
				header("Location:../../user-signup.php");
			}
	}

	else if( $this->password != $_POST["confirm_password"]){
		$_SESSION['passworError'] = "* password does not match";
			
			if($user_side != 'user_side')
			header("Location:../../user-form.php");
			else{
				header("Location:../../user-signup.php");
			}
	}
	
	 else if(  strlen($this->password) > 6 && empty($this->auth()) && $this->password == $_POST["confirm_password"] ){
		$this->insert_record();
	}
	} 					
		
	public function auth(){
		return $this->authentication();
	}
	/**
	*update login 
	*
	*@param
	*@return
	**/
	public  function updated_fields(){

		$this->first_name = $_POST["firstname"];
		$this->last_name = $_POST["lastname"];
		$this->address = $_POST["address"];
		$this->updation_date = $this->today_data();
		$this->type = $_POST["type"];

		$this->array_attributes = [
		 	"usr_first_name" => "\"{$this->first_name}\"",
		    "usr_last_name" => "\"{$this->last_name}\"",
			"usr_address" => "\"{$this->address}\"",
			"usr_update_date" => "\"{$this->updation_date}\"",
			"usr_role" => "\"{$this->type}\""
		];
	 					
	}

	/**
	*show users 
	*
	*@param
	*@return array
	**/
	public function show_users(){
	return $this->show_record();

	}

	/**
	*search user
	*
	*@param
	*@return array
	**/
	public function search_user(){
	return $this->search_record();
	}	

	/**
	*update user 
	*
	*@param
	*@return
	**/
	public function update_user(){
			
		$this->updated_fields();
		$this->update_record();
	}

	/**
	*delete user
	*
	*@param
	*@return
	**/
	public function delete_user(){
		$this->delete_record();
	}

	public function change_password(){
		session_start();
	
		if ($_SESSION['password'] == $_POST['Previous_password']){

			if( strlen($_POST['new_password']) < 6){
				$_SESSION['passworError'] = "Pleaz enter password greater then 6 character";
				header("Location:../../reset-password.php");
			}
			else{
				if ($_POST['new_password'] == $_POST['confirm_password']) {
					$hashing_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
					$this->array_attributes = [
					"usr_pasword" => "\"{$hashing_password}\""
						];
						$this->update_record();
					}
					else{
						$_SESSION['passworError'] = "Password does not match";
					
					header("Location:../../reset-password.php");
					}	
			}
		}
		else{
			$_SESSION['passworError'] = "Password is incroccet";
			
			header("Location:../../reset-password.php");	
		}

	}

	}
	$userModel=new UserModel();


?>

