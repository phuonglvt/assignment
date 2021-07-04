<?php
require_once("../db/dbconnection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>admin page</title>
    <style>
        #contain {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #contain td, #contain th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #contain tr:nth-child(even){background-color: #f2f2f2;}

        #contain tr:hover {background-color: #ddd;}

        #contain th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
        }
    </style>
</head>

<body>
    
    <div class="container" id="contain">
        <a href="../index.php"><button type="button" class="btn btn-secondary">Logout</button></a>
        <br>
        <br>
        <h2>Dabase table</h2>
        <p>Show data</p>
		<form action='admin.php' method="POST">
		<div class="form-group">
                    SHOW SHOP: 
        <br><label for="shop_name">SHOP NAME</label>
        <input type="text" class="form-control" id="shop_name" placeholder="Enter shop name" name="shop">
        </div>
		<button type="submit" class="btn btn-default">Show SHOP</button>
		</form>
        	
            <tbody>
            <div id="refresh">
            <?php
						include 'function_table.php';
                        echo header("refresh: 30");
                ?> 
            </div>
            </tbody>
        </table>
    </div>
    <div class="container" >
                                <!---insert -->
                <form action="../method/insert-shop.php" method="post" style="width: 40%; float:left;">
			   <div class="form-group">
                    USERNAME: 
                    <br><label for="username">USERNAME</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter user name" name="username">
                    </div>

   			   <div class="form-group">
                    PASSWORD: 
                    <br><label for="password">PASSWORD</label>
                    <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">
                    </div>
    
                    <div class="form-group">
                    SHOP NAME: 
                    <br><label for="shop_name">SHOP NAME</label>
                    <input type="text" class="form-control" id="shop_name" placeholder="Enter shop name" name="shop_name">
                    </div>
                    <button type="submit" class="btn btn-default">ADD SHOPS</button>
                </form>

                                <!---update -->

                                <!---delete -->
                     
                <form action="../method/delete-shop.php" method="post" style="width: 40%; "> 
                <br> <br> <br> 
                DELETE:
                    <div class="form-group"> 
                    <br><label for="shop_name">SHOP NAME</label>
                    <input type="text" class="form-control" id="shop_name" placeholder="Enter shop name" name="shop_name">
                    </div>
                    <button type="submit" class="btn btn-default">DELETE</button>
                    <br> <br> <br> 
                </form>
                        
                                  
        </div>
        
</html>