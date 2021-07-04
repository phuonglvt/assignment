<?php
require_once("../db/dbconnection.php");
$shopname=$_POST['shop_name'];
$prid=$_POST['product_id'];
$prname=$_POST['product_name'];
$price=$_POST['price'];
$prcount=$_POST['amount'];
$query = "INSERT INTO product(shop_name,product_id,product_name,price,amount) VALUES ('$shopname','$prid','$prname', '$price','$prcount');";
$result = pg_query($conn,$query);
pg_close($conn);
header("location: ../shoper/Shop.php");
?>