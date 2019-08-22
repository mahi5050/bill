<!DOCTYPE html>
<html>
<head>
	<title>
		Home page
	</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css" href="drop.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/w3.css">
</head>
<body>
	<div class="container-fluid"> 
			<div class="row">
						
					<div class="parallaxone">
						<button class="btn btn-primary w3-button" onclick="w3_open()">MENU ☰</button>
					<div class="sidenav  w3-sidebar w3-bar-block w3-border-right text-center" style="display:none" id="mySidebar">
						 <button onclick="w3_close()" class="btn btn-danger w3-bar-item w3-large">Close &times;</button><br>
						 
						<img src="">
						<div class="active"><a href="">Home</a></div><br>
						<a href="#about">About</a><br>
						<button class="dropdown-btn">Admin 
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-container">
							<a href="signup.php">new customer</a>
							<a href="connection.php">new connection</a>							
							<a href="bill.php">new Bill</a>
						</div>
						<br>
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
						<div class="parallaxone">
						<h3>AJMER VIDYUT VITRAN NIGAM LIMITED</h3>
						</div>
						<div class="para">
							<p>Ajmer Vidyut Vitran Nigam Ltd, (AJMER DISCOM) has been established under the Companies Act,1956 by Govt. of Rajasthan. The Ajmer Discom has been created with the principal object of engaging in the business of distribution and supply of electricity in 11 districts of Rajasthan, namely </p>
							<p>
							Ajmer, Bhilwara, Nagaur, Sikar, Jhunjhunu, Udaipur, Banswara, Chittorgarh, Rajsamand, Doongarpur and Pratapgarh. The area of operation of Ajmer Discom is 87256 sq. km. And the population in this area is 198 lacs as per 2001 census..
							 </p>
						

						<div class="parallaxtwo">
							<h3><b>IMPORTANT LINKS</b></h3>
						<div class="para1">
							
								<p>Ministry of New and Renewable Energy (MNRE)</p>
							    <p>Department of Energy, Government of Rajasthan</p>
							    <p>Rajasthan Electricity Regulatory Commisssion (RERC)</p>
								<p>Rajasthan Vidyut Utpadan Nigam Limited (RVUNL)</p>
								<p>Rajasthan Vidyut Prasaran Nigam Limited (RVPNL)</p>
								<p>Rajasthan Renewable Energy Corporation Limited (RRECL)</p>
								<p>Jaipur Vidyut Vitran Nigam Limited (JVVNL)</p>
								<p>Jodhpur Vidyut Vitran Nigam Limited (JdVVNL)</p>
								<p>Electrical Inspectorate Department, Government of Rajasthan</p>
								<p>Rural Electrification Corporation Limited (REC)</p>
								<p>Ministry of Power(Govt. of India)</p>
								<p>Rajasthan Sampark Portal</p>
								<p>Human resource management system (HRMS)
								</p>
								</div>	
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