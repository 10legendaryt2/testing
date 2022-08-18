<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div>
		<center>
			<h1>Login form</h1>
		<form method="post" action="verify.php">
			<input type="text" name="email" placeholder="enter your email" required> <br>
			<input type="password" name="pass" placeholder="create password" required><br>
			<input type="submit" name="submit"><br>
			Not Registered<a href="regform.php">Click here for Registration</a>
		</form>
		</center>

	</div>
	<?php
			if(isset($_GET['reg'])){
			if($_GET['reg']==1){
			echo "<script> alert('Registration success please login')</script>";
		}

	}

	?>
</body>
</html>