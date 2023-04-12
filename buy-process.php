<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pet-O-Care | Buy Products Now</title>
<link rel="icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="register_login.css" rel="stylesheet">
</head>
	
<body>
	<?php
		
	include("db_connect.php");
	session_start();	
		$product = $_SESSION['product_id'];
		$prod_name = $_SESSION['product_name'];
		$name = $_POST["name"];
		$email = $_POST["email"];
		$address = $_POST["address"];
		$zip_code = $_POST["zip_code"];
		$contact_num = $_POST["contact_num"];
		$pay_mode = $_POST["pay_mode"];
		$prod_price = $_SESSION['price'];
		$delivery_fee = 2.00;
		$total_cost = $prod_price + $delivery_fee;
		$status = "Parcel is out for delivery";
	
	
			if (isset($_POST["place_order"]))
			{
				$product_id = mysqli_real_escape_string($connect, $product);
				$product_name= mysqli_real_escape_string($connect, $prod_name);
				$name = mysqli_real_escape_string($connect, $name);
				$email = mysqli_real_escape_string($connect, $email);
				$address = mysqli_real_escape_string($connect, $address);
				$zip_code = mysqli_real_escape_string($connect, $zip_code);
				$contact_num = mysqli_real_escape_string($connect, $contact_num);
				$price = mysqli_real_escape_string($connect, $prod_price);
				$tot_cost = mysqli_real_escape_string($connect, $total_cost);
				$add_fee = mysqli_real_escape_string($connect, $delivery_fee);
				$pay_mode = mysqli_real_escape_string($connect, $pay_mode);
				$status = mysqli_real_escape_string($connect, $status);
					
					if ($pay_mode == "GCash")
						{	
							header("Location: buy-now.php?message=Selected Mode of Payment is Currently Not Supported.");
							exit();
						}
					else{
							$sqlstocks = "select * from products where product_id = $product_id";
							$querystocks = mysqli_query($connect, $sqlstocks);
							$rows = mysqli_fetch_assoc($querystocks);
								if ($rows['stocks'] > 1) {
									$sql = "call sp_stocks('$product_id', '$product_name', '$name', '$email', '$address', '$zip_code', '$contact_num', curdate(), '$price', '$add_fee', '$tot_cost', '$pay_mode', '$status')";
									$query = mysqli_query($connect,$sql);
													if($query){
														 echo "<script>alert('Product successfully ordered. Please check your email for updates.'); window.location='index.html'</script>";
													}
													else{
														echo "<script>alert('Database not connected.'); window.location='index.html'</script>";
													}
								}
								else{
									echo "<script>alert('There is no available stock for the product you ordered.'); window.location='index.html'</script>";
								}
				
					}
			}
	?>
	
</body>
</html>