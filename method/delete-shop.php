<?php
require_once("../db/dbconnection.php");
$shopname=$_POST['shop_name'];
$query = "DELETE FROM shop_user where shop_name ='$shopname' ";
$result = pg_query($conn,$query);
pg_close($conn);
header("location: ../admin/admin.php");
?>