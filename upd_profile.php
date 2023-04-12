<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		include("db_connect.php");	
		
		if (isset($_POST['update']))
		{
			$emp_id = $_GET['emp_id'];
			$name = $_POST['name'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$contact_num = $_POST['contact_num'];
			$age = $_POST['age'];
			$password = $_POST['password'];
			$cfpassword = $_POST['cfpassword'];
			
			
			if ($password==="" && $cfpassword===""){
				$upd_prof_query = " update employee set name='$name', email='$email', username='$username', contact_num='$contact_num', age='$age' where emp_id='$emp_id'";
				$result = mysqli_query($connect, $upd_prof_query);
				echo "<script>alert('Password Did Not Matched. Please Retry.'); window.location='profile.php'</script>";
				header ("Location: profile.php?emp_id=".$emp_id);
				exit();
			}
			elseif (!empty($password) === !empty($cfpassword)){
				$upd_prof_query = " update employee set name='$name', email='$email', username='$username', contact_num='$contact_num', age='$age', password='$password' where emp_id='$emp_id'";
				$result = mysqli_query($connect, $upd_prof_query);
				
				echo "<script>alert('Password Did Not Matched. Please Retry.'); window.location='profile.php'</script>";
				header ("Location: profile.php?emp_id=".$emp_id);
			}
			else
			{
				echo "<script>alert('Password Did Not Matched. Please Retry.'); window.location='edit_pfl.php'</script>";
			}
		}
		else{
			header("Location: edit_pfl.php");
			exit();
		}
	
	?>
</body>
</html>