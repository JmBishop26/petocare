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
		<form action="login-process.php" method="post" name="admin-login">
			<table class="login-table">
				 <tbody>
					<tr>
					  <td colspan="2"><img class="logo2" src="images/logo4.png"></td>
					<tr><tr>
					  <td colspan="2">&nbsp;</td>
					<tr>
					  <td colspan="2" class="message-box"><?php if (isset($_GET['message'])) { ?> <h4 class="message"><?php echo $_GET['message']; ?></h4><?php } ?></td>
					</tr>
					<tr>
					  <td colspan="2"><input class="username" type="text" name="emp_id" value="" hidden></td>
					</tr><tr>
					  <td colspan="2"><input class="username" type="text" name="username" placeholder="Username" required></td>
					</tr>
					<tr>
					  <td colspan="2"><input class="password" type="password" name="password" placeholder="Password" required></td>
					</tr>
					<tr>
					  <td colspan="2">&nbsp;</td>
					</tr> 
					 <tr>
					  <td class="button" colspan="2"><input class="signin" type="submit" name="signin" value="Sign In"></td>
					</tr>
					<tr>
					  <td colspan="2"><a href="register.php"><p class="forgot">Create New Account</p></a></td>
					</tr>
					<tr>
					  <td colspan="2">&nbsp;</td>

				 </tbody>
			</table>
		</form>	
	</div>
</body>
</html>
