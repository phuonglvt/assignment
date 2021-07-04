<?php
require_once("../db/dbconnection.php");
$shopname=$_POST['shop_name'];
$prname=$_POST['product_name'];
$price=$_POST['price'];
$prcount=$_POST['amount'];
$prid=$_POST['product_id'];
$query = "UPDATE product SET product_name = '$prname', price = '$price', amount = '$prcount' where product_id='$prid' and shop_name = '$shopname'";
$result = pg_query($conn,$query);
pg_close($conn);
header("location: ../shoper/Shop.php");
?>