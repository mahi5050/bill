<?php 
$servername="localhost";
$username="root";
$password="";
$database="pro1";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
	die("connection failed :". $conn->connect_error);
}
	$a=5;
if (isset($_POST['submit'])) {
	$billno=$_POST['billno'];
	$sdate=$_POST['sdate'];
	$edate=$_POST['edate'];
	$rate=$_POST['rate'];
	$lrate=$_POST['lrate'];
	$amount=$_POST['rate']*$a;
	$gndate=$_POST['gndate'];
	$exdate=$_POST['exdate'];
	$admin_id=$_POST['admin_id'];


	$sql="INSERT into bill(billno, startdate, enddate, currentrate, lastrate, amount, gndate, exdate, admin_id) values('$billno', '$sdate', '$edate','$rate','$lrate','$amount', '$gndate', '$exdate', $admin_id)";

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
							<a href="signup.php">new customer</a>
							<a href="connection.php">new connection</a>							
							<div class="active"><a href="bill.php">new Bill</a></div>
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
									<h3 class="text-white text-center"><hr>Bill Generate</h3>
								</div>
								
								Bill number
								<input type="text" name="billno"><br>		
								Start Date of Month
								<input type="date" name="sdate"><br>
								End Date of Month
								<input type="date" name="edate"><br>
								Current Rate of unit
								<input type="text" name="rate"><br>
								Last Month Rate of Unit
								<input type="text" name="lrate"><br>
								Bill Genration Date
								<input type="date" name="gndate"><br>
								Expire Date of Bill Payment	
								<input type="date" name="exdate" ><br>
								Connection ID
								   <select name="admin_id">
										<?php
									     $res=mysqli_query($conn,"SELECT * FROM admin");
								        while($row=mysqli_fetch_array($res))
										{
										?>
										   <option><?php echo $row["connid"]; ?></option>

										<?php
										}
										?> 
										    </select><br>
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
			<script>
				function w3_open() {
				  document.getElementById("mySidebar").style.display = "block";
				}

				function w3_close() {
				  document.getElementById("mySidebar").style.display = "none";
				}
				</script>
		</body>
		</html>