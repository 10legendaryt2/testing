<?php

$con = mysqli_connect("sql10.freesqldatabase.com","sql10513498","XKDHDSeLjK","sql10513498");

 $name = $_POST['name'];
 $email = $_POST['email'];
 $pass = $_POST['pass'];

$sql ="INSERT INTO user(id,name,email,password) VALUES(NULL,'$name','$email','$pass')";

$query=mysqli_query($con,$sql);

if($query){
	echo "Registration Successful";
	header("location:index.php");

}else{
	echo "Something went wrong";
}


 ?>