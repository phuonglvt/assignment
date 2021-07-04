<?php
require_once("../db/dbconnection.php");
trackingadmin();

function trackingadmin()
{
    global $conn;
    $user=$_POST['username'];
    $pwd=$_POST['password'];
    $query1  = "SELECT * FROM user_table where username = '$user' and password='$pwd'";
    $result1=pg_query($conn,$query1);

    if(pg_num_rows($result1)>0){
        header("location: ../admin/admin.php");
          
    }else{
        $query2  = "SELECT * FROM shop_user where username = '$user' and password='$pwd'";
        $result2 = pg_query($conn,$query2);
        if(pg_num_rows($result2)>0){
            header("location: ../shoper/Shop.php");
            
        }
            else
            {
                pg_close($conn);
                header("location: ../index.php");
                exit; 
            }
    }
    
}
?>