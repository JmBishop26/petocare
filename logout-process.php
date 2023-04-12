<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		include("db_connect.php");
	
		$emp_id = 0;
	
		if (isset ($_GET['id'])){
				$emp_id = $_GET['id']; 
				$status = "Logged Out";	
			
				$query = "update employee set status='$status' where emp_id = $emp_id";
				mysqli_query($connect, $query);
			
				$sql = "SELECT * FROM employee_login WHERE emp_id='$emp_id'";
				$result = mysqli_query($connect, $sql);
				$numrows = mysqli_num_rows($result);
				if (isset($numrows))
						{
							$row = mysqli_fetch_assoc($result);
								if ($row['emp_id']===$emp_id){
									$id = $row['login_id'];
									$time_out="curtime()";

									$query2 = "update employee_login set time_out ='$time_out'  where login_id = '$id'";
									mysqli_query($connect, $query2);					
								}
						}
		}
	
	?>
</body>
</html>