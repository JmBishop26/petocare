<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="products.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
	include("db_connect.php");
	
	if (isset($_GET['info'])){
		$order_id = $_GET['info'];
		$query = "call sp_info($order_id)";
		$result = mysqli_query($connect, $query);
	}
?>
<div class="order">
	<a href = "order_hist.php"><i class="bi bi-box-arrow-left"></i></a>
	<div class="logo-cont"><img class="logo-ord" src="images/logo4.png"></div>&nbsp;
	<table class="prod-tbl">
	  	<tbody>
		<tr>
			<td colspan="13"><h1>Order-Product Information</h1></td>
		</tr>
		<tr>
		  <th class="prods">Order History ID</th>
		  <th class="prods">Order ID</th>
		  <th class="prods">Product ID</th>
		  <th class="prods">Product Name</th>
		  <th class="prods">Product Image</th>
		  <th class="prods">Product Description</th>
		  <th class="prods">Price</th>
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
		  <th class="prods"><?php echo $rows['product_name']; ?></th>
		  <th class="prods"><img class="prod-img" src="<?php echo $rows['product_image']; ?>"</th>
		  <th class="prods"><?php echo $rows['product_description']; ?></th>
		  <th class="prods">&#36;<?php echo $rows['price']; ?></th>
		  <td class="prod"><?php echo $rows['name']; ?></td>
		  <td class="prod"><?php echo $rows['email']; ?></td>
		  <td class="prod"><?php echo $rows['order_date']; ?></td>
		  <td class="prod">&#36;<?php echo $rows['total_cost']; ?></td>
		  <td class="prod"><?php echo $rows['status']; ?> </td>	
		  <td class="prod"><?php echo $rows['date_deliver']; ?> </td>
		</tr>  
	<?php }?>	
		</tbody>
	</table>
</div>
</body>
</html>