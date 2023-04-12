<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		
	include("db_connect.php");
		
		$name = $_POST["name"];
		$email = $_POST["email"];
		$username = $_POST["username"];
		$contact_num = $_POST["contact_num"];
		$address = $_POST["address"];
		$age = $_POST["age"];
		$password = $_POST["password"];
		$pass_confirm = $_POST["confirm"];
			
	
			if (isset($_POST["save"]))
			{
				$name = mysqli_real_escape_string($connect, $name);
				$email = mysqli_real_escape_string($connect, $email);
				$username = mysqli_real_escape_string($connect, $username);
				$contact_num = mysqli_real_escape_string($connect, $contact_num);
				$address = mysqli_real_escape_string($connect, $address);
				$age = mysqli_real_escape_string($connect, $age);
				$password = mysqli_real_escape_string($connect, $password);
				$pass_confirm = mysqli_real_escape_string($connect, $pass_confirm); 
					
					if ($password != $pass_confirm)
						{	
							header("Location: register.php?message=Password Should Match");
							exit();
						}
				
					else{
							$sql = "insert into employee (name, email, username, contact_num, age, password) values ('$name', '$email','$username','$contact_num','$age','$password')";
							$query = mysqli_query($connect,$sql);
						
							if($query)
							{
								header("Location: register.php?message=Data Recorded Sucessfully");
								exit();
							}
							else
							{
								header("Location: register.php?message=Database is not connected");
								exit();
							}
						
					}
			}
	?>
	
</body>
</html>