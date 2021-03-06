<?php

$db_host = 'db';
$db_username = 'root';
$db_password = 'example';
$db_name = 'trinity';

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if(!$conn) {
  die('Could not connect ' . mysql_error());
}

$result = $conn->query('SELECT * FROM product');
$products = $result->fetch_all(MYSQLI_ASSOC);
$conn->close();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Trinity Menu</title>
  </head>
  <body>
    <div class="page">
      <div class="main-region">
        <div class="sidebar">
          <div class="menu-title">Menu</div>
        </div>
        <div class="content">
          <div class="section">
            <div class="section-title">Espresso<br/> classics</div>
            <?php foreach($products as $product) { ?>
            <div class="item">
              <div class="item-name"><?php echo $product['name'] ?></div>
              <div class="item-description"><?php echo $product['description'] ?></div>
              <div class="item-price">R <?php echo $product['price'] ?></div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
          

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>