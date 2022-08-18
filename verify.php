<?php
	$con = mysqli_connect("sql10.freesqldatabase.com","sql10513498","XKDHDSeLjK","sql10513498");


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