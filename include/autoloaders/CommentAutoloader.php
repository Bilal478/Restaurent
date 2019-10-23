<?php
//root file
require_once ("C:/xampp/htdocs/restaurant/include/root.php");

//configuration
require_once(LIB_PATH.DS."config.php");

//database
require_once(LIB_PATH.DS."MySqlDatabase.php");

//user controller
require_once(LIB_PATH.DS.'controllers'.DS."CommentController.php");

//user Model
require_once(LIB_PATH.DS.'models'.DS."CommentModel.php");

?>