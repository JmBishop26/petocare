<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pet-O-Care Administrator | Booking Logs</title>
<link href="products.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
<?php
	include("dlt_app.php");
	
	if (isset($_GET['dlt'])){
		$book_id = $_GET['dlt'];
	}
	
	$query = "select * from book";
	$result = mysqli_query($connect, $query);
?>
<div class="order">
	<a href = "admin.php"><i class="bi bi-box-arrow-left"></i></a>
	<div class="logo-cont"><img class="logo-ord" src="images/logo4.png"></div>&nbsp;
	<table class="prod-tbl">
	  	<tbody>
		<tr>
			<td colspan="12"><h1>Booking Logs</h1></td>
		</tr>
		<tr>
			<td colspan="11" class="message-box"><?php if (isset($_GET['message'])) { ?> <h4 class="message"><?php echo $_GET['message']; ?></h4><?php } ?></td>
		</tr>	
		<tr>
		  <th class="prods">Book ID</th>
		  <th class="prods">Name</th>
		  <th class="prods">Email</th>
		  <th class="prods">Contact Number</th>
		  <th class="prods">Address</th>
		  <th class="prods">Type of Pet</th>
		  <th class="prods">Pet Name</th>
		  <th class="prods">Room Number</th>
		  <th class="prods">Check In Date</th>
		  <th class="prods">Check Out Date</th>
		  <th class="prods">Price</th>
		</tr>
<?php
	while($rows = mysqli_fetch_assoc($result))
	{
?>		  
		<tr>
		  <th class="prods"><?php echo $rows['book_id']; ?></th>
		  <td class="prod"><?php echo $rows['name']; ?></td>
		  <td class="prod"><?php echo $rows['email']; ?></td>
		  <td class="prod"><?php echo $rows['contact_num']; ?></td>
		  <td class="prod"><?php echo $rows['address']; ?></td>
		  <td class="prod"><?php echo $rows['type_pet']; ?></td>
		  <td class="prod"><?php echo $rows['pet_name']; ?></td>
		  <td class="prod"><?php echo $rows['rm_num']; ?></td>
		  <td class="prod"><?php echo $rows['check_in']; ?> </td>	
		  <td class="prod"><?php echo $rows['check_out']; ?> </td>	
		  <td class="prod">&#36;<?php echo $rows['price']; ?></td>
		  <td class="prod"><a href="dlt_app.php?dlt=<?php echo $rows['book_id']; ?>"><button type="button" name="delete" class="btn">Delete</button></td>
		</tr>  
	<?php }?>	
		</tbody>
	</table>
	<p class="book"><a href="bk_hist.php"><br>Booking History</a></p>
</div>
</body>
</html>