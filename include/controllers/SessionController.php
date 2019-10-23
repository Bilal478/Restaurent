<?php require_once ("C:/xampp/htdocs/restaurant/include/autoloaders/SessionAutoloader.php") ?>

<?php

class SessionController extends SessionModel{
	public function user_login(){
		$this->login_user();
	}

	public function user_logout(){
		$this->logout();
	}
}

$sessionController=new SessionController();

if(isset($_POST['login']))
{
	$sessionController->user_login();
}
if(isset($_GET['a']))
{
	$sessionController->user_logout();
}
?>
