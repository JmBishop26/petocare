<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pet-O-Care Administrator | Order Logs</title>
<link rel="icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="products.css" rel="stylesheet">	
</head>

<body>
<?php
	include("db_connect.php");
	
	if (isset($_GET['upd_stat'])){
		include("orders.php");
		$ord_id = $_GET['upd_stat'];
		$ord_deliv = true;
		
		$syntax = "select * from orders where order_id = $ord_id";		
		$sql = mysqli_query($connect, $syntax);
		$final = mysqli_fetch_assoc($sql);
		
		$order_id = $final['order_id'];
	}
	
	
	$query = "select * from orders";
	$result = mysqli_query($connect, $query);
?>
<div class="order">
	<a href = "admin.php"><i class="bi bi-box-arrow-left"></i></a>
	<div class="logo-cont"><img class="logo-ord" src="images/logo4.png"></div>&nbsp;
	<table class="prod-tbl">
	  	<tbody>
		<tr>
			<td colspan="13"><h1>Order Logs</h1></td>
		</tr>
			<tr>
				<td colspan="12" class="message-box"><?php if (isset($_GET['message'])) { ?> <h4 class="message"><?php echo $_GET['message']; ?></h4><?php } ?></td>
			</tr>	
		<tr>
		  <th class="prods">Order ID</th>
		  <th class="prods">Product ID</th>
		  <th class="prods">Name</th>
		  <th class="prods">Email</th>
		  <th class="prods">Address</th>
		  <th class="prods">Contact Number</th>
		  <th class="prods">Order Date</th>
		  <th class="prods">Price</th>
		  <th class="prods">Delivery Fee</th>
		  <th class="prods">Total Cost</th>
		  <th class="prods">Mode of Payment</th>
		  <th class="prods">Order Status</th>
		</tr>
<?php
	while($rows = mysqli_fetch_assoc($result))
	{
?>		  
		<tr>
		  <th class="prods"><?php echo $rows['order_id']; ?><input name="order_id" value="<?php echo $order_id ?>" hidden></th>
		  <th class="prods"><?php echo $rows['product_id']; ?></th>
		  <td class="prod"><?php echo $rows['name']; ?></td>
		  <td class="prod"><?php echo $rows['email']; ?></td>
		  <td class="prod"><?php echo $rows['address']; ?></td>
		  <td class="prod"><?php echo $rows['contact_num']; ?></td>
		  <td class="prod"><?php echo $rows['order_date']; ?></td>
		  <td class="prod">&#36;<?php echo $rows['price']; ?></td>
		  <td class="prod">&#36;<?php echo $rows['delivery_fee']; ?></td>
		  <td class="prod">&#36;<?php echo $rows['total_cost']; ?></td>
		  <td class="prod"><?php echo $rows['pay_mode']; ?></td>
		  <td class="prod"><?php echo $rows['status']; ?> </td>
		  
		  <td class="prod"><table><tr><td class="upd-dlt"><a href="order_logs.php?upd_stat=<?php echo $rows['order_id']; ?>"><button type="button" name="upd_stat" class="btn-order">Delivered</button></a></td></tr></table></td>
		</tr>  
	<?php }?>	
		</tbody>
	</table>
	<p class="book"><a href="order_hist.php"><br>Order History</a></p>
</div>		
</body>
</html>