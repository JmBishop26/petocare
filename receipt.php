<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pet-O-Care Booking | Receipt</title>
<link rel="icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="receipt.css" rel="stylesheet">	
</head>

<body>
<?php

	include("book-process.php");
	session_start();
	$name = $_SESSION['name'];
	$pet_name = $_SESSION['pet_name'];
	$rm_num = $_SESSION['rm_num'];
	$price = $_SESSION['price'];
	$check_in = $_SESSION['check_in'];
	$check_out = $_SESSION['check_out'];
	
?>	
	<div class="field">
		<a href="index.html"><i class="bi bi-box-arrow-in-left"></i></a>
		<table class="receipt">
			<tr>
				<td class="center" colspan="2"><img class="logo" src="images/logo2.png"></td>
			</tr>	
			<tr>
				<td class="center" colspan="2"><h1>Booking Receipt</h1></td>
			</tr>	
			<tr>
				<td class="center" colspan="2">&nbsp;</td>
			</tr>	
			<tr>
				<td class="uncen top-left"><strong>Name: </strong><?php echo $name; ?></td>
				<td class="uncen top-right"><strong>Pet's Name: </strong><?php echo $pet_name; ?></td>
			</tr>	
			<tr>
				<td class="uncen"><strong>Room Number: </strong><?php echo $rm_num; ?></td>
				<td class="uncen"><strong>Price: &#36;</strong><?php echo $price; ?></td>
			</tr>	
			<tr>
				<td class="uncen bottom-left"><strong>Check-In Date: </strong><?php echo $check_in; ?></td>
				<td class="uncen bottom-right"><strong>Check-Out Date: </strong><?php echo $check_out; ?></td>
			</tr>	
			<tr>
				<td class="center" colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td class="center tnx" colspan="2"><strong>Thank you for booking at Pet-O-Care.<br>We assure you, your pet is in good hands.</strong></td>
			</tr>
			<tr>
				<td class="center" colspan="2"><p class="bottom">(Kindly go to our shop on your booked date to bring your pet<br>and pay the amount stated above.)</p></td>
			</tr>
		</table>	
	</div>
</body>
</html>