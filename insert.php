<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	
$connect = mysqli_connect('localhost','root','','petocare');
if (!$connect)
{
	echo "Database not connected";	
}		
		
		$product_id = 0;
		$rec_upd = false;
		$product_name = "";
		$product_link = "";
		$product_desc = "";
		$price = "";
		$stocks = "";
	
			if (isset($_POST["add"]))
			{
				$product_name = $_POST["product_name"];
				$product_link = $_POST["product_link"];
				$product_desc = $_POST["product_description"];
				$price = $_POST["price"];
				$stocks = $_POST["stocks"];
				
					$product_name = mysqli_real_escape_string($connect, $product_name);
					$product_link = mysqli_real_escape_string($connect, $product_link);
					$product_desc = mysqli_real_escape_string($connect, $product_desc);
					$price = mysqli_real_escape_string($connect, $price);
					$stocks = mysqli_real_escape_string($connect, $stocks);

							$sql = "insert into products (product_name, product_image, product_description, price, stocks) values ('$product_name', '$product_link','$product_desc','$price','$stocks')";
							$query = mysqli_query($connect,$sql);

							if($query)
							{
								header("Location: products.php?message=New Product Has Been Added");
								exit();
							}
							else
							{
								header("Location: products.php?message=Database is not connected");
								exit();
							}

			}
	
			if (isset($_POST["update"])){
				
				$product_name= $_POST["product_name"];
				$product_link = $_POST["product_link"];
				$product_desc = $_POST["product_description"];
				$price= $_POST["price"];
				$stocks = $_POST["stocks"];
				
				$product_id = mysqli_real_escape_string($connect, $_POST["product_id"]);
				$product_name = mysqli_real_escape_string($connect, $product_name);
				$product_link = mysqli_real_escape_string($connect, $product_link);
				$product_desc = mysqli_real_escape_string($connect, $product_desc);
				$price = mysqli_real_escape_string($connect, $price);
				$stocks = mysqli_real_escape_string($connect, $stocks);
				
				$var = "Update products set product_name='$product_name', product_image='$product_link', product_description='$product_desc', price='$price', stocks='$stocks' where product_id='$product_id'";
				$check = mysqli_query($connect, $var);
				
				if($check){
					header("Location: products.php?message=Product Information Updated");
				}
				else{
					header("Location: products.php?message=Error");
				}
				
			}
	
			if (isset ($_GET['dlt'])){
				$prod_id = $_GET['dlt']; 
				$dlt_query = "delete from products where product_id = $prod_id";
				mysqli_query($connect, $dlt_query);
				
				header("Location: products.php?message=Product Deleted Successfully");
			}
	
	?>
	
</body>
</html>