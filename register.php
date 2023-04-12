<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pet-O-Care | Log In or Sign Up</title>
<link rel="icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="register_login.css" rel="stylesheet">
</head>

<body>
	<div class="signin-div">
		<form action="reg-process.php" method="post" name="admin-login">
			<table class="login-table">
				 <tbody>
					<tr>
					  <td colspan="2"><img class="logo2" src="images/logo4.png"></td>
					</tr>
					<tr>
					  <td colspan="2" class="message-box"><?php if (isset($_GET['message'])) { ?> <h4 class="message"><?php echo $_GET['message']; ?></h4><?php } ?></td>
					</tr>
					<tr>
					  <td colspan="2"><input type="text" name="name" placeholder="Name" required></td>
					</tr>					
					 <tr>
					  <td colspan="2"><input type="email" name="email" placeholder="Email" required></td>
					</tr>
					<tr>
					  <td colspan="2"><input type="text" name="username" placeholder="Username" required></td>
					</tr>
					<tr>
						<td colspan="2"><input type="text" name="contact_num" placeholder="Contact Number" required><td>
					</tr>
					<tr>
						<td colspan="2"><input type="text" name="age" placeholder="Age" required><td>
					</tr>
					<tr>
					  <td colspan="2"><input type="password" name="password" placeholder="Password" required></td>
					</tr>
					<tr>
					  <td colspan="2"><input type="password" name="confirm" placeholder="Confirm Password" required></td>
					</tr>
					<tr>
					  <td colspan="2">&nbsp;</td>
					</tr> 
					 <tr>
					  <td class="button" colspan="2"><input class="register" type="submit" name="save" value="Register"></td>
					</tr>
					<tr>
					  <td colspan="2">&nbsp;</td>
					</tr>
					<tr>
					  <td colspan="2"><h3 class="no-acct">Don't have an Account?</h3><a href="login.php"><h4 class="signup">Sign In to your account</h4></a></td>
					</tr>
				 </tbody>
			</table>
		</form>	
	</div>
</body>
</html>