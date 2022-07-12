<!-- ここに配列を定義 -->
<?php
   $products_names = ['春の新作', '夏の新作', '秋の新作'];
?>
<!-- ここまで -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>
</head>
<body>

  <div class="container">
    <?php foreach ($products_names as $product_name) :?>
      <div class="product-box">
        <img src="./clothes.jpg" alt="" class="image">
        <p>商品名</p>
        <span><?php echo $product_name;?></span>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
