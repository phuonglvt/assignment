<?php
require_once("../db/dbconnection.php");
$shopname=$_POST['shop_name'];
$prid=$_POST['product_id'];
$query = "DELETE FROM product where product_id ='$prid' and shop_name='$shopname' ";
$result = pg_query($conn,$query);
pg_close($conn);
header("location: ../shoper/Shop.php");
?>