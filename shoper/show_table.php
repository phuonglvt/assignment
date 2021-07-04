<?php
require_once("../db/dbconnection.php");
require_once("../method/login.php");

 $user1;
 $pwd1;
show_table($user1,$pwd1);
function show_table(string $user1,string $pwd1){
	?>
	<table class="table">
            <thead>
                <tr>
					<th>Shop Name</th>
					<th>Product ID</th>
					<th>Product Name</th>
					<th>Price</th>
					<th>Amount</th>
                </tr>
             
		<?php
			global $conn;
			

	$shop=$_POST['shop'];					
						$query="select shop_name from shop_user where username='$user1' and password='$pwd1'";
						$result1=pg_query($conn,$query);
						if(pg_num_rows($result1)>0) {
							while($row = pg_fetch_assoc($result1)){
							echo "<tr><td>".$row["shop_name"]."</td>";
							                                
                                "</td></tr>";
							}
						} ?></thead>
		</table> <?php
}
?>