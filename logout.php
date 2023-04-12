<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
	session_start();
	include("db_connect.php");
	
	$emp_id = 0;
	
	if (isset ($_GET['id'])){
			$emp_id = $_GET['id']; 
			$status = "Logged Out";	
			
			$query = "update employee set status='$status' where emp_id = $emp_id";
			mysqli_query($connect, $query);
			
			$sql = "SELECT * FROM employee_login WHERE emp_id='$emp_id' order by login_id desc limit 1";
			$result = mysqli_query($connect, $sql);
			$row = mysqli_fetch_assoc($result);
			$id = $row['login_id'];
			$e_id = $row['emp_id'];
			
			$sql1 = "select * from employee_login where login_id ='$id' and emp_id='$e_id'"; 
			$result1 = mysqli_query($connect, $sql1);
			$row1 = mysqli_fetch_assoc($result1);
			$new_id = $row1['login_id'];
			$new_emp = $row1['emp_id'];
		
				$query2 = "update employee_login set time_out = curtime(), total_time = subtime(curtime(), time_in) where login_id = '$new_id' and emp_id='$new_emp'";
				mysqli_query($connect, $query2);

			session_unset();
			session_destroy();
			header("Location: login.php");
		}
		

?>
</body>
</html>