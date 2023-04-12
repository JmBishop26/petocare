<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		include("db_connect.php");
	
		$order_id = 0;
		$ord_deliv = false;
	
		if (isset ($_GET['upd_stat'])){
				$order_id = $_GET['upd_stat']; 
				$status = "Parcel has been delivered";	
				
				$upd_stat = "update orders set status='$status' where order_id = $order_id";
				mysqli_query($connect, $upd_stat);
			
				$dlt = "delete from orders where order_id = $order_id";
				mysqli_query($connect, $dlt);
			
				header("Location: order_logs.php?message=Order completed and was already moved to Order History");
			}
		
	?>
</body>
</html>