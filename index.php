<?php
	require_once("config.php");
	require_once(dirname(__FILE__)."/models/products.php");
	require_once(dirname(__FILE__)."/models/shopping_cart.php");
	
	//is login?
	if(empty($_SESSION['name'])){
		//var_dump($_SESSION['name']);
		if (!empty($_SESSION['wrongAutoriz'])) {
			$_SESSION['wrongAutoriz'] = 0;
			echo "<div align='right'>Вы ввели неверные данные!</div>";
		}
		include_once("login.php");   
		$_SESSION['user_id'] = 0;
		
	} else{
		echo "Привет, ".$_SESSION['name']." <a href='/logout.php'>Выйти</a>";	
	}
	
    //отображаем товары с возможносью добавить в корзину
	$productsIntoCart = 0;
	$products = getAllProducts($pdo);
    
	if(!empty($_POST)){
		foreach($_POST as $k => $v){
    		if(strpos($k, "item_") !== false){
    			if($v > 0){
    				$id = str_replace("item_", "", $k);
    				$product = ["id" => $id, "amount" => $v];
    				$saveProduct = saveProduct($pdo, $product, $_SESSION['user_id']);
    				    if (!$saveProduct && !empty($_POST['submit'])) {
    				    	echo "Авторизуйтесь, что бы добавить товар в корзину";
    				    }
    			}
    		}
    	}
    	
	}

	$productsIntoCart = getProductsCount($pdo, $_SESSION['user_id']);

	require_once(dirname(__FILE__)."/views/products_page.php");




?>