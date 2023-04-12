<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pet-O-Care Administrator</title>
<link rel="icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link href="admin.css" rel="stylesheet">
</head>

<body>
<?php 
session_start();
	include("db_connect.php");
	
	if (isset($_GET['id'])){
		$emp_id = $_GET['id'];
		$status = "Logged Out";
		
		$syntax = "select * from employee where emp_id = $emp_id";		
		$sql = mysqli_query($connect, $syntax);
		$final = mysqli_fetch_assoc($sql);
		
		$emp_id = $final['emp_id'];
	}
	
if (isset($_SESSION['emp_id']) && isset($_SESSION['username'])){
?>	
	<div class="main">
		<div class="nav-bar">
				<a href="admin.php"><img class="logo" src="images/logo4.png"></a>
					  <div class="main-menu">
						  <ul>
							<li><a href="admin.php">Home</a></li>
							  <li><a href="app_logs.php">Appointment Logs</a></li>
							  <li><a href="order_logs.php">Order Logs</a></li>
							  <li><a href="products.php">Product Stocks</a></li>
						  </ul>
						<div class="nav-icons">
						  <a href="profile.php?emp_id=<?php echo $_SESSION['emp_id']; ?>"><i class="bi bi-person-circle"></i></a>&nbsp;<span class="username"><?php echo $_SESSION['username'];?></span>&nbsp;&nbsp;&nbsp;
						  <a href="logout.php?id=<?php echo $_SESSION['emp_id']; ?>"><button type="button" class="log-out"><i class="bi bi-box-arrow-right"></i> Log Out</button></a>
						</div>	
		  </div>
	  </div>
			<div class="content-1">
					<img src="images/slide1.jpg" class="image1">
					<img class="image2" src="images/logo2.png">
					<h1>The best care<br>for your best friend</h1>
					<form id="form2" name="form2" method="post" action="#appointment">
						<input class="book-now" type="submit" value="Check Appointment Logs">
					</form>	
			</div>
			
			<div class="ft-prod">
				<h1>Featured Products</h1>				
				<table>
				<tr class="pic-name">	
					<th class="img-frame"><a href="#dog-shampoo">
						<img class="prod_img" src="images/dog-shamp.jpg"></a>
					</th>
					<th></th>
					<th class="img-frame"><a href="#dog-leash">
						<img class="prod_img" src="images/leash.jpg"></a>
				  </th>
					<th></th>
					<th class="img-frame"><a href="#cat-shampoo">
						<img class="prod_img" src="images/cat-shamp.jpg"></a>
					</th>
					<th></th>
					<th class="img-frame"><a href="#pet-comb">
						<img class="prod_img" src="images/comb.jpg"></a>
					</th>
					<th></th>
					<th class="img-frame"><a href="#pet-ball">
						<img class="prod_img" src="images/ball.jpg"></a>
					</th>
				</tr>
				<tr class="price">
					<td class="filled-price">&#36;3.00</td>
					<td class="empty">&nbsp;&nbsp;</td>
					<td class="filled-price">&#36;1.25</td>
					<td class="empty">&nbsp;&nbsp;</td>
					<td class="filled-price">&#36;3.00</td>
					<td class="empty">&nbsp;&nbsp;</td>
					<td class="filled-price">&#36;1.75</td>
					<td class="empty">&nbsp;&nbsp;</td>
					<td class="filled-price">&#36;2.25</td>
				</tr>
                <tr class="pic-name">
                    <td class="filled"><a href="#dog-shampoo">Dog<br>Shampoo</a></td>
                    <td class="empty">&nbsp;&nbsp;</td>
                    <td class="filled"><a href="#dog-leash">Dog Leash</a></td>
                    <td class="empty">&nbsp;&nbsp;</td>
                    <td class="filled"><a href="#cat-shampoo">Cat<br>Shampoo</a></td>
                    <td class="empty">&nbsp;&nbsp;</td>
                    <td class="filled"><a href="#pet-comb">Dog/Cat Comb</a></td>
                    <td class="empty">&nbsp;&nbsp;</td>
                    <td class="filled"><a href="#pet-ball">Dog/Cat Woven<br>Toy Ball</a></td>
                </tr>
				<tr class="atc-bn">
					<td class="filled-btn">
						<a href="order_logs.php"><input type="button" class="buy-now" value="Check Order Logs"></a>
					</td>
                    <td class="empty">&nbsp;&nbsp;</td>
                    <td class="filled-btn">
						<a href="order_logs.php"><input type="button" class="buy-now" value="Check Order Logs"></a>
					</td>
                    <td class="empty">&nbsp;&nbsp;</td>
                    <td class="filled-btn">
						<a href="order_logs.php"><input type="button" class="buy-now" value="Check Order Logs"></a>
					</td>
                    <td class="empty">&nbsp;&nbsp;</td>
                    <td class="filled-btn">
						<a href="order_logs.php"><input type="button" class="buy-now" value="Check Order Logs"></a>
					</td>
                    <td class="empty">&nbsp;&nbsp;</td>
                    <td class="filled-btn">
						<a href="order_logs.php"><input type="button" class="buy-now" value="Check Order Logs"></a>
					</td>
				</tr>						
            </table>
			</div>
		
	 <footer class="footer">
		 <div class="container">
			 <center><img class="foot-logo" src="images/logo.png"></center>
			<div class="row">
				<div class="footer-col">
					<h4>Services</h4>
					<ul>
					  <li><a href="#">Pet Hotel</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Products</h4>
					<ul>
						<li><a href="#">Pet Food</a></li>
						<li><a href="#">Pet Hygiene</a></li>
						<li><a href="#">Pet Toy</a></li>
						<li><a href="#">Pet Accesories</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>About Us</h4>
					<ul>
						<li><a href="mission.html">Mission</a></li>
						<li><a href="vision.html">Vision</a></li>
						<li><a href="our-story.html">Our Story</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Contacts</h4>
					<div class="social-links">
						<a class="social" href="https://mail.google.com/mail/?view=cm&fs=1&to=petocare.contacts@gmail.com" target="_blank"><i class="bi bi-envelope-fill"></i></a>
						<a class="social" href="https://www.messenger.com/t/114833847780932" target="_blank"><i class="bi bi-messenger"></i></a>
					</div>
				</div>
				<div class="footer-col">
					<h4>Follow Us</h4>
					<div class="social-links">
						<a class="social" href="https://www.facebook.com/Pet-O-Care-114833847780932" target="_blank"><i class="bi bi-facebook"></i></a>
						<p><br><a class="admin" href="logout.php?id=<?php echo $_SESSION['emp_id']; ?>">Log Out Now</a></p>
					</div>
				</div>
			</div>
		 </div>
		 <p class="copyright"><br><br>Pet-O-Care &copy; All Rights Reserved</p>
  	</footer>
</div>
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>
