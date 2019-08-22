<?php 
		$server="localhost";
		$username="root";
		$password="";
		$database="pro1";

		$conn=new mysqli($server, $username, $password, $database);
		if($conn->connect_error)
		{
			die("connection error :-". $conn->connect_error);
		}

		$id=$_GET['id'];
		if (isset($_POST['submit'])) {
			$connection=rand(1000,10000);
			$sql="UPDATE admin set connid=$connection where id=$id";
		$r1 = $conn->query($sql);
		if( $r1==true)
	{
		echo "success";
		header('location:connection.php');
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
 	<title>
 		Connection
 	</title>
 </head>
 <body>
 		<form method="post" action="">
 			<input type="submit" name="submit" value="New connection">
 		</form>
 </body>
 </html>