<?php

class SessionModel extends MySQLDatabase
{
	public $table = 'user';
	public $name;
	public $password;
	
	function __construct(){
		parent::__construct();
		session_start();
	}
	/**
	*user login 
	*
	*@param
	*@return
	**/
	public function login_user(){
		$login_password = $_POST['password'];
    	$user = $this->login($_POST['email']);

    	if(!empty($user) && password_verify($login_password,$user['usr_pasword'])){

 		$_SESSION['password'] = $_POST['password'];	 
    	$_SESSION['type'] = $user['usr_role'];	
    	$type=$user['usr_role'];
    	$_SESSION['id'] = $user['usr_id'];
    	$_SESSION['email'] = $user['usr_email'];
    	$_SESSION['name'] = $user['usr_first_name'];
		if($type == 'admin'){
			header("Location:../../admin.php");
		}
		else if($type == 'user'){
			header("Location:../../index.php");
		}
	 }
		else{
			$_SESSION['loginError'] = "Email/Password is incroccet";
			
			header("Location:../../login.php");	
		}
	}

	/**
	*user logout
	*
	*@param
	*@return
	**/
	public function logout(){
		session_destroy();
		header("Location:../../index.php");	
	}
}
?>