<?php
    try{
        $conn = pg_connect("
        host=ec2-52-0-67-144.compute-1.amazonaws.com
        dbname=ddpunoc3djhqte
        user=mjxqyujcjwxlwz
        port=5432
        password=683d1e1f3dd2cebf46063f8c803aa4adf773d3e445d5750eff693ca6a059a052
        ");
    echo"connect OK!";
    }catch(Exception $e){
        $e->getMessage();
    }
?>