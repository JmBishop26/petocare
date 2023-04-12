<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pet-O-Care Administrator | Profile</title>
<link rel="icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="products.css" rel="stylesheet">	
</head>

<body>
<?php 
	include("db_connect.php");
	session_start();
	$emp_id = $_GET['emp_id'];
	
		$sql = "SELECT * FROM employee WHERE emp_id='$emp_id'";
		$result = mysqli_query($connect, $sql);
		$row = mysqli_fetch_assoc($result);
				if ($row['emp_id'] === $emp_id) 
				{
						$_SESSION['name'] = $row['name'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['contact_num'] = $row['contact_num'];
						$_SESSION['age'] = $row['age'];
						$_SESSION['password'] = $row['password'];
						$_SESSION['emp_id'] = $row['emp_id'];
				}
		if($emp_id===$row['emp_id']){
	
?>	
	<div class="disp-profile">
		<a href = "admin.php"><i class="bi bi-box-arrow-left"></i></a>
		<div class="logo-cont"><img class="logo" src="images/logo4.png"></div>&nbsp;
			<table class="profile">
				<tr>
					<th class="header" colspan="2"><h1>Profile</h1></th>
				</tr>	
				<tr>
					<th class="creds">Name: <?php echo $_SESSION['name']; ?></th>
					<td class="creds">&nbsp;</td>
				</tr>		
				<tr>
					<th class="creds">Email: <?php echo $_SESSION['email'];?></th>
					<td class="creds">&nbsp;</td>
				</tr>		
				<tr>
					<th class="creds">Username: <?php echo $_SESSION['username'];?></th>
					<td class="creds">&nbsp;</td>
				</tr>		
				<tr>
					<th class="creds">Contact Number: <?php echo $_SESSION['contact_num'];?></th>
					<td class="creds">&nbsp;</td>
				</tr>	
				<tr>
					<th class="creds">Age: <?php echo $_SESSION['age'];?> years old</th>
					<td class="creds">&nbsp;</td>
				</tr>	
				<tr>
					<td class="empty"></td>
					<td class="empty"><a href="edit_pfl.php?emp_id=<?php echo $_SESSION['emp_id']?>"><button type="button" name="update" class="btn">Edit Profile</button></a></td>
				</tr>
			</table>	
	</div>	
	<?php }?>
</body>
</html>