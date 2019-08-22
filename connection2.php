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
$bill_id=$_GET['bill_id'];
if(isset($_SESSION['id'])) {
	# code...
	$id=$_SESSION['id'];

$sql="SELECT * from bill where id='$id'";
if ($id==true) {
	$result= $conn->query($sql);

}
else{
	header('location:index.php');	}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Bill Table</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="drop.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery-auto.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


</head>
<body>	
		<div class="card text-center">
					<?php 	
						$sql1="SELECT admin.name, admin.address, admin.mob, admin.email,bill.billno , bill.currentrate, bill.gndate, bill.exdate, bill.lastrate, bill.amount 
						FROM bill
						left join admin
						on bill.admin_id=admin.id
						where bill.id='$bill_id' ";
						$result2= $conn->query($sql1);
						$row = $result2->fetch_assoc();
						if ($row==true) {
							?>
							<h1 class="text-center bg-dark text-white">Ajmer vidhut nigam, Ajmer</h1>
							<div class="card">
								<h2 class="text-center bg-dark text-white"> Personal Details </h2>
							<div class="row">
								<h3 class="col-xs-5 offset-1"><div class="col-xs-3">Name :- </div><?php echo $row['name'] ?>	</h3>
								<h3 class="col-xs-5 offset-1"><div class="col-xs-3">Address :- </div> <?php echo $row['address'] ?></h3>
						
								<h3 class="col-xs-5 offset-1"><div class="col-xs-3">Phone :-</div><?php echo $row['mob'] ?></h3>
								<h3 class="col-xs-5 offset-1"><div class="col-xs-3">Email :-</div> <?php echo $row['email'] ?></h3>
							</div>
							<br>
							<h2 class="text-center bg-dark text-white">Last Bill Details </h2>
							<div class="row">
								<h3 class="col-xs-5 offset-1"><div class="col-xs-3">Bill No :- </div><?php echo $row['billno'] ?>	</h3>
								<h3 class="col-xs-5 offset-1"><div class="col-xs-3">Unit :- </div> <?php echo $row['lastrate'] ?> KW</h3>
						
							</div>
							<br>
							
							<h2 class="text-center bg-dark text-white">Current Bill Details </h2>
							<div class="row">
								<h3 class="col-xs-5 offset-1"><div class="col-xs-3">Bill No :- </div><?php echo $row['billno'] ?>	</h3>
								<h3 class="col-xs-5 offset-1"><div class="col-xs-3">Unit :- </div> <?php echo $row['currentrate'];?> KW </h3>
						
								<h3 class="col-xs-5 offset-1"><div class="col-xs-3">Starting date :-</div><?php echo $row['gndate'] ?></h3>
								<h3 class="col-xs-5 offset-1"><div class="col-xs-3">Last date :-</div> <?php echo $row['exdate'] ?></h3>
							</div>

								<h2 class="text-center bg-dark text-white">Payment </h2>
							<div class="row">
								<h3 class="col-xs-5 offset-1"><div class="col-xs-3">Amount :- </div><?php echo $row['amount'] ?>	&#8360;</h3>
								<h3 class="col-xs-5 offset-1"><div class="col-xs-3">Paid :- </div> _ _ _ _ _ _ _ _ _</h3>
						
							</div>
							</div>
					<?php
				}
					 ?>
		</div>
		<p><button onclick="window.location.href='billtable.php'" class="btn btn-primary">Back</button></p>

</body>
</html>
