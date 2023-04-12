<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pet-O-Care Administrator | Products</title>
<link rel="icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="products.css" rel="stylesheet">	
</head>

<body>
<?php
	include("db_connect.php");
	$query = "select * from products";
	$result = mysqli_query($connect, $query);	
?>	
<div class="display">
	<a href = "admin.php"><i class="bi bi-box-arrow-left"></i></a>
	<div class="logo-cont"><img class="logo" src="images/logo4.png"></div>
	<?php if (isset($_GET['message'])) { ?> <h4 class="message"><?php echo $_GET['message']; ?></h4><?php } ?>
	<div class="buttons">
		<form method="post" action="insert.php">
			<table class="prod-tbl1">
				<tbody>
					<tr>
					  <th class="prods">Product ID</th>
					  <th class="prods">Product Name</th>
					  <th class="prods">Product Image</th>
					  <th class="prods">Product Description</th>
					  <th class="prods">Price</th>
					  <th class="prods">Stocks</th>
					</tr>
					<tr>
					  <td class="prod"><input type="hidden" name="product_id" placeholder="Product ID" required></td>
					  <td class="prod"><input type="text" class="prd" name="product_name" placeholder="Product Name" required></td>
					  <td class="prod"><input type="text" class="prd" name="product_link" placeholder="Product Link" required></td>
					  <td class="prod"><select name="product_description">
						  	<option value="">Select</option>
						  	<option value="Pet Accessories">Pet Accessories</option>
						  	<option value="Pet Food">Pet Food</option>
						  	<option value="Pet Hygiene">Pet Hygiene</option>
						  	<option value="Pet Toy">Pet Toy</option>
					  </td>
					  <td class="prod"><input type="text" class="price" name="price" placeholder="Price" required></td>
					  <td class="prod"><input type="text" class="stocks" name="stocks" placeholder="Stocks" required></td>
					</tr>
					<tr>
					  <td class="empty"></td>
					  <td class="empty"></td>
					  <td class="empty"></td>
					  <td class="empty"></td>
					  <td class="empty"></td>
					  <td class="empty"><button type="submit" name="add" class="btn">Add Product</button></td>
					</tr>
				</tbody>	
			</table>
		</form>	
	</div>
	<table class="prod-tbl">
	  <tbody>
		<tr>
		  <th class="prods">Product ID</th>
		  <th class="prods">Product Name</th>
		  <th class="prods">Product Image</th>
		  <th class="prods">Product Description</th>
		  <th class="prods">Price</th>
		  <th class="prods">Stocks</th>
		</tr>
<?php
	while($rows=mysqli_fetch_assoc($result))
	{
?>		  
		<tr>
		  <th class="prods"><?php echo $rows['product_id']; ?></th>
		  <td class="prod"><?php echo $rows['product_name']; ?></td>
		  <td class="prod"><img class="prod_img" src="<?php echo $rows['product_image']; ?>"></td>
		  <td class="prod"><?php echo $rows['product_description']; ?></td>
		  <td class="prod">&#36;<?php echo $rows['price']; ?></td>
		  <td class="prod"><?php echo $rows['stocks']; ?></td>
		  <td class="prod"><table><tr><td class="upd-dlt"><a href="update.php?Prod_ID=<?php echo $rows['product_id']?>"><button type="button" class="btn">Update</button></a><a href="#"></td><td class="upd-dlt"><button type="button" class="btn">Delete</button></a></td></tr></table></td>
		</tr>  
	  </tbody>
	<?php }?>	
	</table> 	
</div>	
</body>
</html>