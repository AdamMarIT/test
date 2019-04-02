<?php
	function getAllProducts($pdo){
		$smtp = $pdo->prepare("SELECT items.id, items.item, items.price, items.amount, categories.category FROM items
						  INNER JOIN categories ON categories.id = items.category_id");
		$smtp->execute();
		$products = $smtp->fetchAll();
		return $products;
	}
?>