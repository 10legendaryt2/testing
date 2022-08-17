<?php
	$con = mysqli_connect("localhost","root","","mysql2");


 $email = $_POST['email'];
 $pass = $_POST['pass'];


 $sql ="SELECT * FROM user WHERE email='$email' and password='$pass' ";
 
 $query=mysqli_query($con ,$sql);

 if ($query){
 	if ($row=mysqli_fetch_array($query)) {

 		echo $row['name'] . $row['password'];

 		session_start();
 		$_SESSION['userID']=$row['id'];
 		$_SESSION['userNAME']=$row['name'];

 		header("location:dashboard.php");
 		
 		
 	}else{
 		echo "data not mached";
 	}
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>testing</title>
</head>
<body>
	<Center>
		<h1> I AM WORKING</h1>
	</Center>
	
</body>
</html>