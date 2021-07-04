<?php
require_once("../db/dbconnection.php");
$username=$_POST['username'];
$password=$_POST['password'];
$shopname=$_POST['shop_name'];

$query = "INSERT INTO shop_user(username,password,shop_name) VALUES ('$username', '$password','$shopname');";
$result = pg_query($conn,$query);
pg_close($conn);
header("location: ../admin/admin.php");
?>