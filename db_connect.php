<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$rec_upd = false;
		$connect = mysqli_connect('localhost','root','','petocare');
		if (!$connect)
		{
			echo "Database not connected";	
		}
	?>
</body>
</html>