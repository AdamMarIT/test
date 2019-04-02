<?php
// Login
	function logIN($pdo, $name, $password){
		$smtp = $pdo->prepare("SELECT `id` FROM test.users WHERE name = ? AND password = ? LIMIT 1");
		$smtp->execute([$name, $password]);
		$userId = $smtp->fetch(PDO::FETCH_COLUMN);
		return $userId;
	}
?>