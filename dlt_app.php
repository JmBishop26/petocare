<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
	include("db_connect.php");
			
			if (isset ($_GET['dlt'])){
				$book_id = $_GET['dlt']; 
				$dlt_query = "delete from book where book_id = $book_id";
				mysqli_query($connect, $dlt_query);
				
				header("Location: app_logs.php?message=Booking completed and was already moved to Booking History");
			}
?>
</body>
</html>