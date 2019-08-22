

<?php 
	session_start();
	$server="localhost";
	$user="root";
	$pass="";
	$database="pro1";
	$conn=new mysqli($server, $user, $pass, $database);
	if($conn->connect_error)
	{
		die("Connection failed :". $conn->connect_error);
	}

	if(isset($_POST['login'])){
		$uname=($_POST['uname']);
		$pass=($_POST['pass']);
		$sql="SELECT id From admin where uname='$uname' and pass='$pass'";
		$result=mysqli_query($conn,$sql);
		if ($row=mysqli_fetch_array($result)) {
			if($urole=="admin"){
				$_SESSION['id']=$row['id'];
				header("location:home.php");
			}
			else{
				$_SESSION['id']=$row['id'];
				header("location:home.php");
			}
			}
			else
			{
				echo "failed";
			}

		
	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>	
	<div class="py-5">
	<div class="col-xl-7 m-auto">
		<form method="post">
			<br>
			<div class="card px-5 py-3">
				<div class="card-header bg-dark">
					<h3 class="text-white text-center"><hr>Admin Login</h3>
				</div>				
				<br>
				Login <input type="text" name="uname" placeholder="Enter email or user name..."><br>
				Password <input type="Password" name="pass" placeholder="Password...">
				<br>
				<p>
					<button type="submit" name="login" class="btn btn-primary">Login</button>
					</p>
					<p>New User <a href="signup.php">Signup </a></p>	
			</div>
		</form>
	</div>
	</div>
		<div id="Footer">
				<hr><p>Theme by | Mahendra Dangi | &copy: 2019-2025 --- All right reserved.</p>

				<p>This site is resume of Mr. Mahendra dangi. Mahendra has all the rights. no one is allow to distribute copies other then mahi5765. </p>
				<hr>
			</div>
			<div style="height: 10px; background: #27aae1;"></div>
</body>
</html>