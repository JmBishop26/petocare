<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pet-O-Care | Book Now!</title>
<link rel="icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="book.css">
</head>

<body>
	<div class="container">
		<a href="index.html"><i class="bi bi-box-arrow-in-left"></i></a>
			<form method="post" action="book-process.php">
				<table>
				  <tbody>
					<tr>
					  <td colspan="2"><img class="logo" src="images/logo2.png"></td>
					</tr>
					<tr>
					  <td colspan="2" class="message-box"><?php if (isset($_GET['message'])) { ?> <h4 class="message"><?php echo $_GET['message']; ?></h4><?php } ?></td>
					</tr>
					<tr>
					  <td><input type="text" name="name" placeholder="Name" required></td>
					  <td><input type="email" name="email" placeholder="Email" required></td>
					</tr><tr>
					  <td><input type="text" name="contact_num" placeholder="Contact Number" required></td>
					  <td><input type="text" name="address" placeholder="Address" required></td>
					</tr>
					<tr>
					  <td><label for="type_pet">Type of Pet:&nbsp;</label>
						  <select name="type_pet">
						  	<option value="select">Select</option>
						  	<option value="dog">Dog</option>
						  	<option value="cat">Cat</option>
						  </select>
					  </td>
					  <td><input type="text" name="pet_name" placeholder="Pet's Name"></td>
					</tr>
					<tr>
					  <td><label for="rm_num">Room Number:&nbsp;</label>
						  <select name="rm_num">
						  	<option value="select">Select</option>
						  	<option value="1">Room #1</option>
						  	<option value="2">Room #2</option>
						  	<option value="3">Room #3</option>
						  	<option value="4">Room #4</option>
						  	<option value="5">Room #5</option>
						  </select>
					  </td>
					  <td>&nbsp;</td>
					</tr>
					<tr>
					  <td colspan="2">&nbsp;</td>
					</tr>
					<tr>
					  <td><label>Check-in:&nbsp;<br></label>
						  <input type="date" name="check_in">
					  </td>
					  <td><label>Check-out:&nbsp;<br></label>
						  <input type="date" name="check_out">
					  </td>
					</tr>
					<tr>
					  <td colspan="2">&nbsp;</td>
					</tr>
					<tr>
					  <td colspan="2">&nbsp;</td>
					</tr>
					<tr>
					  <td colspan="2"><input type="submit" class="book" name="book" value="Book Schedule"></td>
					</tr>
				  </tbody>
				</table>
			</form>	
	</div>
	
</body>
</html>