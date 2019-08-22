<?php 
	
session_start();
$servername= "localhost";
$username= "root";
$password= "";
$database= "pro1" ;

$conn=new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
	die("connection failed :". $conn->connect_error );
}

if(isset($_SESSION['id'])) {
	# code...
	$id=$_SESSION['id'];
}
$sql="SELECT * from bill where id='$id'";
if ($id==true) {
	$result= $conn->query($sql);
}
else{
	header('location:index.php');	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Bill Table</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="drop.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/w3.css">
<style>
table, tr, td{
	border: 1px solid black;
}
table, tr, th{
	border: 1px solid black;
	text-align: center;
}
</style>
</head>
<body>		<br>
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
							<div class="active"><a href="connection.php">new connection</a></div>							
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
			<div class="card">
				<?php 
						$sql="SELECT * FROM admin";
						$result=$conn->query($sql);
						echo "<table>
						<tr>
						<th>id</th>
						<th>name</th>
						<th>Phone</th>
						<th>Emmail</th>
						<th>Address</th>
						<th>Connection</th>
						</tr>";
						while ($row = $result->fetch_array()) {
							echo "<tr> 
								<td>".$row['id']."</td>
								<td>".$row['name']."</td>
								<td>".$row['mob']."</td>
								<td>".$row['email']."</td>
								<td>".$row['address']."</td>"
								?>
										
								<td>
									<?php 

										if($row['connid']==0){ ?>
									<a href="connection3.php?id=<?php echo 
								$row['id'] ?>">Connection</a>
								<?php
								}
								else
								{
									echo $row['connid']; 
								}

									 ?>
								</td>			
									<?php

							echo "</tr>";
						}
						echo "</table>";
				?>
				</div>
			</div>
			</div>
		</div>
	</div>
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
