<?php
	session_start();
	$dns = "mysql:host=localhost;port=3306;dbname=test;charset=utf8";

	$options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

	$pdo = new PDO($dns, 'root', 'root', $options);

	define("SITE_URL", "http://test.loc/");
	define("SALT", "salt");
?>