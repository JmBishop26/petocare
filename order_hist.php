<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pet-O-Care Administrator | Order History</title>
<link rel="icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="products.css" rel="stylesheet">	
</head>

<body>
<?php
	include("db_connect.php");
	
	$query = "select * from order_history";
	$result = mysqli_query($connect, $query);
?>
<div class="order">
	<a href = "order_logs.php"><i class="bi bi-box-arrow-left"></i></a>
	<div class="logo-cont"><img class="logo-ord" src="images/logo4.png"></div>&nbsp;
	<table class="prod-tbl">
	  	<tbody>
		<tr>
			<td colspan="8"><h1>Order History</h1></td>
		</tr>
		<tr>
		  <th class="prods">Order History ID</th>
		  <th class="prods">Order ID</th>
		  <th class="prods">Product ID</th>
		  <th class="prods">Name</th>
		  <th class="prods">Email</th>
		  <th class="prods">Order Date</th>
		  <th class="prods">Total Cost</th>
		  <th class="prods">Status</th>
		  <th class="prods">Date Delivered</th>
		</tr>
<?php
	while($rows = mysqli_fetch_assoc($result))
	{
?>		  
		<tr>
		  <th class="prods"><?php echo $rows['order_hist_id']; ?></th>
		  <th class="prods"><?php echo $rows['order_old_id']; ?></th>
		  <th class="prods"><?php echo $rows['product_id']; ?></th>
		  <td class="prod"><?php echo $rows['name']; ?></td>
		  <td class="prod"><?php echo $rows['email']; ?></td>
		  <td class="prod"><?php echo $rows['order_date']; ?></td>
		  <td class="prod">&#36;<?php echo $rows['total_cost']; ?></td>
		  <td class="prod"><?php echo $rows['status']; ?> </td>	
		  <td class="prod"><?php echo $rows['date_deliver']; ?> </td>
		  <td class="prod"><a href="prod_info.php?info=<?php echo $rows['order_old_id']; ?>"><button type="button" name="upd_stat" class="btn-order">More Info</button></td>
		</tr>  
	<?php }?>	
		</tbody>
	</table>
</div>
</body>
</html>