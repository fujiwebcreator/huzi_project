<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>キャッシュミー</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" type="text/css" href="css/parts.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/toolbar.css">
  <link rel="stylesheet" type="text/css" href="css/order.css">
  <link rel="stylesheet" type="text/css" href="css/calendar.css">
</head>
<?php
    $a = 0;
    $b = 0;
    $c = 0;
    $d = 0;
    $e = 0;
?>

<?php include ('function.php'); ?>



<?php

$SqlRes = NGO('SELECT * FROM `order`');
while ($row = $SqlRes->fetch(PDO::FETCH_ASSOC)) {
    $unko[] = $row;
    $manko = $row['menu'];
    $sqlunko = NGO("select * from menu where id = '$manko'");
    $benki = $sqlunko->fetch(PDO::FETCH_ASSOC);
    $pantu[] = $benki['menu_name'];
    
    $seki = $row['table_id'];
    $kazu_d = $row['menu_order'];
    

}

?>


