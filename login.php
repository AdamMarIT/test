<?php
	require_once(dirname(__FILE__)."/config.php");
	require_once(dirname(__FILE__)."/models/login_model.php");

	$name = "";

	if(!empty($_POST['name']) && !empty($_POST['password'])){
		$password = sha1($_POST['password'].'SALT');
		$userId = logIN($pdo, $_POST['name'], $password);

		if (!empty($userId)) {
			$_SESSION['name'] = $_POST['name'];
			$_SESSION['user_id'] = $userId;
		} else {
			echo "Вы ввели неверный данные!";
		}
	}
    
    require_once(dirname(__FILE__)."/views/login_page.php");

?>