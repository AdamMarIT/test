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
        <a href="<?php echo SITE_URL.'/cart.php';?>">Корзина (<?php echo $productsIntoCart;?>)</a>
    </div>
    <div align="center">
        <h1>Товары</h1>
        <form action="<?php echo SITE_URL.'/index.php';?>" method="post">
        		<?php foreach($products as $product):?>
                    <p>Категория: <?php echo $product['category'];?></p>
                    <p><?php echo $product['item'];?></p>
                    <h3>
                    <?php echo $product['price'];?> грн.
                    </h3>
                    <p> Выберите количество:
                	<select name="item_<?php echo $product['id'];?>">
                        <?php   
                                for($i = 0; $i <= $product['amount']; $i++): ?>
                                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                        <?php endfor; ?>              				
                	</select>
                    </p>
            		<hr>
        		<?php endforeach;?>
              <input type="submit" name = "submit" value="Купить">  
        </form>
    </div>
</body>
</html>