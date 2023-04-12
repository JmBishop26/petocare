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
		$product = $_POST['buy'];
?>
		
	<div class="signin-div">
		<form action="buy-process.php" method="post" name="admin-login">
			<table class="login-table">
				 <tbody>
					<tr>
					  <td colspan="2" class="first"><a href="index.html"><i class="bi bi-box-arrow-in-left"></i></a></td>
					</tr>
					<tr>
					  <td colspan="2"><img class="logo2" src="images/logo2.png"></td>
					</tr>
					<tr>
					  <td colspan="2"><h2>Buy Now</h2></td>
					</tr>
					<tr>
					  <td colspan="2"><?php 
						  					if (isset($product)){
													if ($product == "1"){
															$sql="SELECT * from products WHERE product_id='$product'";
														}
													elseif ($product == "2"){
															$sql="SELECT * from products WHERE product_id='$product'";
														}
													elseif ($product== "3"){
															$sql="SELECT * from products WHERE product_id='$product'";
														}
													elseif ($product == "4"){
															$sql="SELECT * from products WHERE product_id='$product'";
														}
													elseif ($product == "5"){
															$sql="SELECT * from products WHERE product_id='$product'";
														}
													else{
														header("index.html");
														}
												$result = mysqli_query($connect,$sql);
												while ($rows = mysqli_fetch_assoc($result)){  
													if ($rows['product_id']===$product){
														$_SESSION['product_id'] = $product;
														$_SESSION['product_name'] = $rows['product_name'];
														$_SESSION['price'] = $rows['price'];
														header("buy-process.php");
													}	
						  			  ?>
													<img src="<?php echo $rows['product_image']; ?>" class="prod-img"><br>
													&nbsp;
													  <span class="price" style="color:yellow;"><?php
														  		  echo "&#36;";								
														          echo $rows['price'];
														     ?></span>
						  							  <br><strong><?php echo $rows['product_name'];?></strong>
						  				<?php
																						   }
											}
						  			  ?>
					  </td>
					</tr>
					<tr>
					  <td colspan="2" class="message-box"> <?php if (isset($_GET['message'])) { ?> <h4 class="message"><?php echo $_GET['message']; ?></h4><?php } ?></td>
					</tr>
					<tr>
					  <td colspan="2"><input type="text" name="name" placeholder="Name" required></td>
					</tr>					
					 <tr>
					  <td colspan="2"><input type="email" name="email" placeholder="Email" required></td>
					</tr>
					<tr>
					  <td colspan="2"><input type="text" name="address" placeholder="Address" required></td>
					</tr>
					<tr>
						<td colspan="2"><input type="text" name="contact_num" placeholder="Contact Number" required></td>
					</tr>
					<tr>
						<td colspan="2"><input type="text" name="zip_code" placeholder="Zip Code" required></td>
					</tr>
					<tr>	
					  <td colspan="2"><h4>Select Mode of Payment:</h4>
						  			  <input class="radio" type="radio" id="pay_mode1" name="pay_mode" value="COD" required>&nbsp;Cash on Delivery<br>
						  			  <input class="radio" type="radio" id="pay_mode2" name="pay_mode" value="GCash" required>&nbsp;GCash (Currently Not Available)
					  </td>
					</tr>
					<tr>
					  <td colspan="2">&nbsp;</td>
					</tr> 
					 <tr>
					  <td class="button" colspan="2"><input class="register" type="submit" name="place_order" value="Place Order"></td>
					</tr>
				 </tbody>
			</table>
		</form>	
	</div>
</body>
</html>