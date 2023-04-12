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
			
				$username = $_POST["username"];
				$password = $_POST["password"];
	
				if (isset($_POST["signin"]))
				{
						$sql = "SELECT * FROM employee WHERE username='$username'";
						$result = mysqli_query($connect, $sql);
						$numrows = mysqli_num_rows($result);
						if ($numrows===1) 
						{
							$row = mysqli_fetch_assoc($result);
							if ($row['username'] === $username && $row['password'] === $password) 
							{								
										echo "Logged in!";
											$_SESSION['username'] = $row['username'];
											$_SESSION['email'] = $row['email'];
											$_SESSION['contact_num'] = $row['contact_num'];
											$_SESSION['age'] = $row['age'];
											$_SESSION['password'] = $row['password'];
											$_SESSION['emp_id'] = $row['emp_id'];

											$status = "Logged In";
											$id = $row['emp_id'];
											$name = $row['name'];
											$sql1 = "update employee set status='$status' where emp_id='$id'";
											mysqli_query($connect, $sql1);
								
												$sql2="insert employee_login(emp_id, emp_name, date, time_in) values ('$id','$name',curdate(),curtime())";
												mysqli_query($connect, $sql2);
					
									header("Location: admin.php");
									exit();
							}
							else
							{
								header("Location: login.php?message=Username/Password is Incorrect!");
								exit();
							}
						}
						else
						{
							header("Location: login.php?message=Username is not recorded in the database. Click Sign Up now to Register.");
							exit();
						}
						
				
				}
	?>
	
</body>
</html>