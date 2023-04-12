<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pet-O-Care Administrator | Booking History</title>
<link href="products.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
<?php
	include("db_connect.php");
	
	if (isset($_GET['dlt'])){
		$book_id = $_GET['dlt'];
	}
	
	$query = "select * from book_history";
	$result = mysqli_query($connect, $query);
?>
<div class="order">
	<a href = "app_logs.php"><i class="bi bi-box-arrow-left"></i></a>
	<div class="logo-cont"><img class="logo-ord" src="images/logo4.png"></div>&nbsp;
	<table class="prod-tbl">
	  	<tbody>
		<tr>
			<td colspan="8"><h1>Booking History</h1></td>
		</tr>
		<tr>
		  <th class="prods">Booking History ID</th>
		  <th class="prods">Book ID</th>
		  <th class="prods">Name</th>
		  <th class="prods">Email</th>
		  <th class="prods">Pet Name</th>
		  <th class="prods">Room Number</th>
		  <th class="prods">Check In Date</th>
		  <th class="prods">Check Out Date</th>
		</tr>
<?php
	while($rows = mysqli_fetch_assoc($result))
	{
?>		  
		<tr>
		  <th class="prods"><?php echo $rows['book_hist_id']; ?></th>
		  <th class="prods"><?php echo $rows['book_old_id']; ?></th>
		  <td class="prod"><?php echo $rows['name']; ?></td>
		  <td class="prod"><?php echo $rows['email']; ?></td>
		  <td class="prod"><?php echo $rows['pet_name']; ?></td>
		  <td class="prod"><?php echo $rows['rm_num']; ?></td>
		  <td class="prod"><?php echo $rows['check_in']; ?> </td>	
		  <td class="prod"><?php echo $rows['check_out']; ?> </td>	
		</tr>  
	<?php }?>	
		</tbody>
	</table>
</div>
</body>
</html>