<?php
	require_once(dirname(__FILE__)."/config.php");
	require_once(dirname(__FILE__)."/models/login_model.php");

	$name = "";
	
	if(!empty($_POST['name']) && !empty($_POST['password'])){
		$password = sha1($_POST['password'].'SALT');
		$userId = logIN($pdo, $_POST['name'], $password); // checkLogin
        
		if (!empty($userId)) {
			$_SESSION['name'] = $_POST['name'];
			$_SESSION['user_id'] = $userId;
			header("Location: index.php");
			exit;

		} else {
			 $_SESSION['wrongAutoriz'] = 1;
			header("Location: index.php");
			exit;
		}
	}  
    require_once(dirname(__FILE__)."/views/login_page.php");

?>