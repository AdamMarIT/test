<?php
	function saveProduct($pdo, $product, $userId){
		if ($_SESSION['user_id'] > 0){
		$smtp = $pdo->prepare("INSERT INTO `shopping_cart`(`item_id`, `user_id`, `amount`) VALUES(:item_id, :user_id, :amount) ON DUPLICATE KEY UPDATE amount = amount + :amount");
		$smtp->execute(["item_id" => $product["id"], "user_id" => $userId, "amount" => $product["amount"]]);
		return true;
	    }
	}

	function getProductsCount($pdo, $userId){
		$smtp = $pdo->prepare("SELECT count(DISTINCT(item_id)) as cnt FROM shopping_cart WHERE user_id = ?");
		$smtp->execute([$userId]);
		$count = $smtp->fetch(PDO::FETCH_COLUMN);
		return $count;
	}

	function getCartProducts($pdo, $userId){
		$smtp = $pdo->prepare("SELECT item_id, shopping_cart.amount, items.price, (shopping_cart.amount*items.price) as sum, 
			                   items.item, categories.category FROM shopping_cart 
                               JOIN items ON items.id=shopping_cart.item_id
                               JOIN categories ON categories.id = items.category_id
		                       WHERE user_id = ? ");
		$smtp->execute([$userId]);
		$cartProducts = $smtp->fetchAll();
		return $cartProducts;
	}
?>