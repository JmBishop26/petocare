<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		
		include("db_connect.php");
					
			if (isset($_POST["book"]))
			{	
				$name = $_POST["name"];
				$email = $_POST["email"];
				$contact_num = $_POST["contact_num"];
				$address = $_POST["address"];
				$type_pet = $_POST["type_pet"];
				$pet_name = $_POST["pet_name"];
				$rm_num = $_POST["rm_num"];
				$check_in = $_POST["check_in"];
				$check_out = $_POST["check_out"];
				$diff = date_diff(date_create($check_in), date_create($check_out));
				$interval = date_interval_format($diff,"%d");
				$price = $interval * 15.00;
				
					$name = mysqli_real_escape_string($connect, $name);
					$email = mysqli_real_escape_string($connect, $email);
					$contact_num = mysqli_real_escape_string($connect, $contact_num);
					$address = mysqli_real_escape_string($connect, $address);
					$type_pet = mysqli_real_escape_string($connect, $type_pet);
					$pet_name = mysqli_real_escape_string($connect, $pet_name); 
					$rm_num = mysqli_real_escape_string($connect, $rm_num); 
					$check_in = mysqli_real_escape_string($connect, $check_in); 
					$check_out = mysqli_real_escape_string($connect, $check_out); 
					$price = mysqli_real_escape_string($connect, $price);
					
					if ($check_in===$check_out){
							
							header("Location: book.php?message=Booking with same day is not allowed. You can only book a room for atleast one day.");
							exit();
					} 
					elseif($check_in > $check_out){
							header("Location: book.php?message=There is an error with the dates chosen. You cannot choose previous dates as check-out date.");
							exit();
					}
					else{	
						
						$sql = "insert into book (name, email, contact_num, address, type_pet, pet_name, rm_num, check_in, check_out, price) values ('$name', '$email', '$contact_num', '$address', '$type_pet', '$pet_name', '$rm_num', '$check_in', '$check_out', '$price')";
						$query = mysqli_query($connect,$sql);
						
						if($query)
						{	
							session_start();
							$_SESSION['name'] = $name;
							$_SESSION['pet_name'] = $pet_name;
							$_SESSION['rm_num'] = $rm_num;
							$_SESSION['price'] = $price;
							$_SESSION['check_in'] = $check_in;
							$_SESSION['check_out'] = $check_out;

							header("Location: receipt.php");
							exit();
						}
						else
						{
							header("Location: book.php?message=Database is not connected");
							exit();
						}
						}
			}
	?>
</body>
</html>