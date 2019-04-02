<?php
// проверяем на уникальность имя пользователя 
    function checkName($pdo, $name){
		$smtp = $pdo->prepare("SELECT `name` FROM test.users WHERE name = ?");
		$smtp->execute([$name]);
		$userName = $smtp->fetch(PDO::FETCH_COLUMN);
		return $userName;
	}
// регистрируем нового пользователя
	function saveUser($pdo, $name, $password, $email){
		$smtp = $pdo->prepare("INSERT INTO test.users (`name`, `email`, `password`) VALUES(:name, :email, :password)");
		$smtp->execute(["name" => $name, "email" => $email, "password" => $password]);
		return true;
	}

// получаем Id зарегистрировавшегося пользователя
    function getUserId($pdo, $name){
		$smtp = $pdo->prepare("SELECT `id` FROM test.users WHERE name = ? LIMIT 1");
		$smtp->execute([$name]);
		$UserId = $smtp->fetch(PDO::FETCH_COLUMN);
		return $UserId;
	}
?>