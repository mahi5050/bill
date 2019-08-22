<?php 
$servername="localhost";
$username="root";
$password="";
$database="pro1";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
	die("connection failed :". $conn->connect_error);
}

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$urole=$_POST['urole'];
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$tnc=$_POST['tnc'];	


	$sql="INSERT into admin(name, urole, uname, pass, cpass, mob, email, address, tnc) values('$name', '$urole', '$uname','$pass','$cpass','$phone', '$email', '$address','$tnc')";

	if(mysqli_query($conn, $sql))
	{
		echo "success";
	}
	else
	{
		echo "Error :".$sql. "<br>".$conn->error;
	}
}	
?>

<!DOCTYPE html>
<html>
<head>
	<title>sign up page</title>
	<link rel="stylesheet" type="text/css" href="drop.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/w3.css">

</head>
<body>
	<div class="container-fluid">
				<div class="card text-center">
					<div class="row">
				<div class="col-sm-2">
					<button class="btn btn-primary w3-button" onclick="w3_open()">MENU ☰</button>
<div class="sidenav w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
						 <button onclick="w3_close()" class="btn btn-danger w3-bar-item w3-large">Close &times;</button>
						 <br>
						<img src="">
						<a href="home.php">Home</a><br>
						<a href="#about">About</a><br>
						<button class="dropdown-btn">Admin 
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-container">
							
							<div class="active"><a href="signup.php">new customer</a></div>	
							<a href="connection.php">new connection</a>						
							<a href="bill.php">new Bill</a>
						</div><br>
						<button class="dropdown-btn">Customer details
							<i class="fa fa-caret-down"></i>
						</button>

						<div class="dropdown-container">
							<a href="#">Customer table</a>
							<a href="billtable.php">Bill table</a>
						</div><br>
						<a href="#contact">My account</a><br>
						<a href="logout.php">Logout</a><br>
					</div>
				</div>
					<div class="col-sm-9">
						<div class="col-xl-10">
						<form action="" method="post" enctype="multipart/from-data">
							<div class="card">
								<div class="card-header bg-dark">
									<h3 class="text-white text-center"><hr>Customer Registration from-data</h3>
								</div>
								
								name <input type="text" name="name"><br>		
								User Role
								<select name="urole">
									<option value="customer">Customer</option>
									<option value="admin">Admin</option>
								</select><br>
								User Name<input type="text" name="uname"><br>
								Password<input type="password" name="pass"><br>
								Confirm Password<input type="password" name="cpass"><br>
								Mobile<input type="tel" name="phone"><br>
								Email <input type="email" name="email" ><br>
								Address <input type="text" name="address"><br>
								<p><input type="checkbox" name="tnc" value="yes" required> &nbsp I agree to the <a href="">Terms and Conditions</a></p>
								<p>
									<button type="submit" name="submit" class="btn btn-primary">Submit</button>
									<button type="reset" name="reset" class="btn btn-danger ">Reset</button>
								</p>	
								<p>Back to <a href="index.php">Login page</a></p>
							</div>				
					</form>
					</div>
				</div>

		</div>

	<div id="footer" class="bg-dark text-white">
			<hr><p>Theme by | Mahendra Dangi | &copy: 2019-2025 --- All right reserved.</p>
				<p>This site is resume of Mr. Mahendra dangi. Mahendra has all the rights. no one is allow to distribute copies other then mahi5765. </p>
			</div>
			<div style="height: 10px; background: #27aae1;"></div>
			</div>	</div>

				<script>
				function w3_open() {
				  document.getElementById("mySidebar").style.display = "block";
				}

				function w3_close() {
				  document.getElementById("mySidebar").style.display = "none";
				}
				</script>
				<script>
			var dropdown = document.getElementsByClassName("dropdown-btn");
			var i;

			for (i = 0; i < dropdown.length; i++) {
				dropdown[i].addEventListener("click", function() {
					this.classList.toggle("active");
					var dropdownContent = this.nextElementSibling;
					if (dropdownContent.style.display === "block") {
						dropdownContent.style.display = "none";
					} else {
						dropdownContent.style.display = "block";
					}
				});
			}</script>
			
		</body>
		</html>