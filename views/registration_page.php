<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Сайт с корзиной</title>
</head>
<body>
    <div>
        <h1>Зарегистрируйтесь</h1>
        <form method="post" action="<?php echo SITE_URL.'/registration.php';?>">
            
            <p><label>Логин:<br>
            <input type="text" required value="<?php echo $name;?>" name="name"> </label></p> 
            <p><label>Пароль:<br>
            <input type="password" name="password"></label></p>
            <p><label>Повторите пароль:<br>
            <input type="password" name="repassword"></label></p>
            <p><label>Ваш email:<br>
            <input type="email" name="email"></label></p>
            
            <p><input type="submit" name="registration" value="Регистрация"></p>
            <p><a href="login.php">Уже зарегистрированы?</a></p>
        </form>
    </div>
</body>
</html>