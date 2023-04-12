<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pet-O-Care Administrator | Edit Profile</title>
<link rel="icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="products.css" rel="stylesheet">	
</head>

<body>
<?php
	session_start();
	include ("db_connect.php");
	
	$emp_id = $_GET['emp_id'];
	$query = "select * from employee where emp_id = '$emp_id'";
	$result = mysqli_query($connect, $query);
	$rows = mysqli_fetch_assoc($result);
	
	if ($rows['emp_id'] === $emp_id) 
				{
						$_SESSION['name'] = $rows['name'];
						$_SESSION['username'] = $rows['username'];
						$_SESSION['email'] = $rows['email'];
						$_SESSION['contact_num'] = $rows['contact_num'];
						$_SESSION['age'] = $rows['age'];
						$_SESSION['password'] = $rows['password'];
						$_SESSION['emp_id'] = $rows['emp_id'];
				}
	
?>
	
		<div class="disp-profile">
		<a href = "profile.php?emp_id=<?php echo $_SESSION['emp_id']; ?>"><i class="bi bi-box-arrow-left"></i></a>
		<div class="logo-cont"><img class="logo" src="images/logo4.png"></div>
			<form method="post" action="upd_profile.php?emp_id=<?php echo $_SESSION['emp_id']; ?>">
			<table class="profile">
				<tr>
					<th class="header" colspan="2"><h1>Edit Profile</h1></th>
				</tr>
				<tr>
					<td><input type="text" name="name" placeholder="Name" value="<?php echo $_SESSION['name']; ?>"></td>
				</tr>		
				<tr>
					<td><input type="email" name="email" placeholder="Email" value="<?php echo $_SESSION['email']; ?>"></td>
				</tr>		
				<tr>
					<td><input type="text" name="username" placeholder="Username" value="<?php echo $_SESSION['username']; ?>"></td>
				</tr>		
				<tr>
					<td><input type="text" name="contact_num" placeholder="Contact Number" value="<?php echo $_SESSION['contact_num']; ?>"></td>
				</tr>	
				<tr>
					<td><input type="text" name="age" placeholder="Age" value="<?php echo $_SESSION['age']; ?>"></td>
				</tr>	
				<tr>
					<td><input type="password" name="password" placeholder="Password"></td>
				</tr>
				<tr>
					<td><input type="password" name="cfpassword" placeholder="Confirm Password"></td>
				</tr>
				<tr>
					<td class="empty"><input type="submit" name="update" class="btn" value="Update"></td>
				</tr>
			</table>	
	</div>	
</body>
</html>