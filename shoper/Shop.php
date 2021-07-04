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
		<form action='Shop.php' method="POST">
		<div class="form-group">
                    SHOW SHOP: 
        <br><label for="shop_name">SHOP NAME</label>
        <input type="text" class="form-control" id="shop_name" placeholder="Enter shop name" name="shop">
        </div>
		<button type="submit" class="btn btn-default">Show SHOP</button>
		</form>
		

        <table class="table">
            <thead>
                <tr>
                    <th>Shop Name</th>
					<th>Product ID</th>
                    <th>Products Name</th> 
                    <th>Price</th> 
                    <th>Amount</th> 
                </tr>
            </thead>
            <tbody>
            <div id="refresh">
            <?php
			include("db_display.php");
			if(!empty($_POST['shop'])) {
			$shop=$_POST['shop'];					
						$query="select * from product where shop_name='$shop'";
						$result1=pg_query($conn,$query);
						if(pg_num_rows($result1)>0) {
							while($row = pg_fetch_assoc($result1)){
							echo "<tr><td>".$row["shop_name"]."</td>";
                                
                                echo "<td>".$row["product_id"]."</td>";
                                
                                echo "<td>".$row["product_name"]."</td>";
								
                                echo "<td>".$row["price"]."</td>";
								
                                echo "<td>".$row["amount"]."</td>";
                                
                                "</td></tr>";
							}
						}else{

							$query2="select * from product ";
							$result2=pg_query($conn,$query2);
							if(pg_num_rows($result2)>0) {
								while($row = pg_fetch_assoc($result2)){
								echo "<tr><td>".$row["shop_name"]."</td>";
                                
                                echo "<td>".$row["product_id"]."</td>";
                                
                                echo "<td>".$row["product_name"]."</td>";
								
                                echo "<td>".$row["price"]."</td>";
								
                                echo "<td>".$row["amount"]."</td>";
                                
                                "</td></tr>";
								}
							}
						}
			 } else{
				 $query3="select * from product ";
							$result3=pg_query($conn,$query3);
							if(pg_num_rows($result3)>0) {
								while($row = pg_fetch_assoc($result3)){
								echo "<tr><td>".$row["shop_name"]."</td>";
                                
                                echo "<td>".$row["product_id"]."</td>";
                                
                                echo "<td>".$row["product_name"]."</td>";
								
                                echo "<td>".$row["price"]."</td>";
								
                                echo "<td>".$row["amount"]."</td>";
                                
                                "</td></tr>";
								}
							}
			}
			
                        pg_close($conn);
                ?> 
            </div>
            </tbody>
        </table>
    </div>
    <div class="container" >
                                <!---insert -->
                <form action="../method/insert.php" method="post" style="width: 40%; float:left;">    
                    <div class="form-group">
                    SHOP NAME: 
                    <br><label for="shop_name">SHOP NAME</label>
                    <input type="text" class="form-control" id="shop_name" placeholder="Enter shop name" name="shop_name">
                    </div>
					
					<div class="form-group">
                    ADD PRODUCTS ID: 
                    <br><label for="product_id">PRODUCTS ID</label>
                    <input type="text" class="form-control" id="product_id" placeholder="Enter Products ID" name="product_id">
                    </div>
					
					<div class="form-group">
                    ADD PRODUCTS: 
                    <br><label for="product_name">PRODUCTS NAME</label>
                    <input type="text" class="form-control" id="product_name" placeholder="Enter Products name" name="product_name">
                    </div>

					<div class="form-group">
                    PRICE: 
                    <br><label for="price">PRICE</label>
                    <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
                    </div>

                    <div class="form-group">
					AMOUNT:
                    <label for="count">AMOUNT</label>
                    <input type="text" class="form-control" id="count" placeholder="Enter amount" name="amount">
                    </div>
                    <button type="submit" class="btn btn-default">ADD PRODUCTS</button>
                </form>

                                <!---update -->

                <form action="../method/update.php" method="post" style="width: 40%; float:right"> 
                UPDATE:  
					<div class="form-group">
                    SHOP NAME: 
                    <br><label for="shop_name">SHOP NAME</label>
                    <input type="text" class="form-control" id="shop_name" placeholder="Enter shop name" name="shop_name">
                    </div>
					
                    <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="id" class="form-control" id="ID" placeholder="Enter id" name="product_id">
                    </div>
                
                    <div class="form-group">
                    <br><label for="namePR">PRODUCTS NAME</label>
                    <input type="text" class="form-control" id="namePR" placeholder="Enter Products name" name="product_name">
                    </div>
					
					<div class="form-group">
                    <br><label for="price">PRICE</label>
                    <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price">
                    </div>

                    <div class="form-group">
                    <label for="count">AMOUNT</label>
                    <input type="text" class="form-control" id="count" placeholder="Enter Amount" name="amount">

                    <button type="submit" class="btn btn-default">UPDATE</button>
                    <br> 
                </form>

                                <!---delete -->
                     
                <form action="../method/delete.php" method="post" style="width: 40%; "> 
                <br> <br> <br> 
                DELETE:
					<div class="form-group">
                    SHOP NAME: 
                    <br><label for="shop_name">SHOP NAME</label>
                    <input type="text" class="form-control" id="shop_name" placeholder="Enter shop name" name="shop_name">
                    </div>
					
                    <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="id" class="form-control" id="ID" placeholder="Enter id" name="product_id">
                    </div> 
                    <button type="submit" class="btn btn-default">DELETE</button>
                    <br> <br> <br> 
                </form>
                        
                                  
        </div>
        
</html>