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
  <form method="post" action="">  
    <div align="center">
        <h1>Корзина Товаров</h1>
    		<?php foreach($cart as $product):?>
            <div >
                <div style="float:left;margin: 40px;">
                  <p>Категория: <?php echo $product['category'];?></p>
                  <p><?php echo $product['item'];?></p>
                    <h3>
                       <?php echo $product['price'];?> грн.
                    </h3>
                </div>
                <div style="float:left; margin: 30px; margin-top: 110px;">
                    <h3>
                   <p><?php echo $product['amount'];?></p>
                   </h3>
                </div>
                <div style="float:left;margin: 30px;margin-top: 110px;">
                   <h3>
                      <?php echo $product['sum'];?> грн.
                   </h3>
                </div>
                <div style="clear: both;"></div>
            </div>
        		<hr>
    		<?php endforeach;?>
        <p><input type="submit" name="" value="Оплатить"></p>
        <p><a href="index.php">Продолжить покупки</a></p>
      </form>  
    </div>
</body>
</html>