
<?php 
require_once('../db/dbconnection.php');
show_table();

function show_table () {
	if(!empty($_POST['shop'])) {
		table1();
	} else {
		table2();
	}
}
function table1(){
	?><table class="table">
            <thead>
                <tr>
					<th>Shop Name</th>
					<th>Product Name</th>
					<th>Price</th>
					<th>Amount</th>
                </tr>
             
		<?php
			global $conn;

	$shop=$_POST['shop'];					
						$query="select * from product where shop_name='$shop'";
						$result1=pg_query($conn,$query);
						if(pg_num_rows($result1)>0) {
							while($row = pg_fetch_assoc($result1)){
							echo "<tr><td>".$row["shop_name"]."</td>";
                                                                
                            echo "<td>".$row["product_name"]."</td>";
							
                            echo "<td>".$row["price"]."</td>";
							
                            echo "<td>".$row["amount"]."</td>";
                                
                                "</td></tr>";
							}
						} ?></thead>
		</table> <?php
}
function table2(){
	?><table class="table">
            <thead>
                <tr>
					<th>USERNAME</th>
					<th>Shop name</th>
                </tr>
             <?php
			global $conn;
			$select1 ="SELECT username,shop_name from shop_user";
			$result3 = pg_query($conn, $select1);
			if ( pg_num_rows($result3) >0){
				while($row = pg_fetch_assoc($result3)){
					echo "<tr><td>".$row["username"]."</td>";
											
					echo "<td>".$row["shop_name"]."</td>";
																				
				"</td></tr>";
				}
			}?>
		</thead>
		</table> 
	<?php
}
?>
