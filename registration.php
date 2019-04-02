<?php
	require_once(dirname(__FILE__)."/config.php");
	require_once(dirname(__FILE__)."/models/registation_model.php");


    $name = "";

    if(!empty($_POST['name']) && !empty($_POST['password']) && !empty($_POST['repassword'])&& !empty($_POST['email'])){
		// проверяем на уникальность имя пользователя 
		if (checkName($pdo, $_POST['name']) == $_POST['name']){
             echo 'Этот Логин уже занят';
		} elseif ($_POST['password'] != $_POST['repassword']) {
			 echo 'Пароли не совпадают!'; // проверяем правильность пароля
		} else {
			// регистрируем нового пользователя
			$name = $_POST['name'];
			$password = sha1($_POST['password'].'SALT');
            $email = $_POST['email'];
            saveUser($pdo, $name, $password, $email);
            $_SESSION['user_id'] = getUserId($pdo, $name);
            $_SESSION['name'] = $name;
            echo 'Аккаунт успешно создан, '.$_SESSION['name']." <a href='index.php'>На главную</a>";
		}

	} else {
		if (!empty($_POST['registration'])) {
			echo 'Заполните все поля!';
		}
		
	}
    require_once(dirname(__FILE__)."/views/registration_page.php");

?>