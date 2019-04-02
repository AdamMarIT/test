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
    <div align="right">
        <h1>Вход:</h1>
        <form method="post" action="<?php echo SITE_URL.'/index.php';?>">
            <p><label>Логин:<br>
            <input type="text" required value="<?php echo $name;?>" name="name"> </label></p> 
            <p><label>Пароль:<br>
            <input type="password" name="password"></label></p>
            <p><input name="login" type= "submit" value="Войти"></p>
            <p><a href="<?php echo SITE_URL.'/registration.php';?>"> Регистрация </a></p>
        </form>
    </div>
</body>
</html>