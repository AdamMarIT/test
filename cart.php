<?php
	require_once("config.php");
	require_once(dirname(__FILE__)."/models/shopping_cart.php");
	if(empty($_SESSION['name'])){
		include_once("login.php");
		$_SESSION['user_id'] = 0;
	} else{
		echo "Привет, ".$_SESSION['name']." <a href='/logout.php'>Выйти</a>";
	}

	$cart = getCartProducts($pdo, $_SESSION['user_id']);
	
	require_once(dirname(__FILE__)."/views/cart.php");
?>