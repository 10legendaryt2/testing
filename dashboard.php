<?php
session_start();

if (isset($_SESSION['userID'])){


	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	</title>
</head>
<body>
	<div style="background-color: black;color: white;">
		<h1>
			Dashboard 

			Welcome to Dr. Rukayyas's webpage: <?php echo $_SESSION['userNAME'];
						?>
			
		</h1>
		<--xmlwriter_end_comment-->

		<h2><a href="logout.php">Logout</a></h2>
			</div>

</body>
</html>

<?php
  
}else{
	header("location:index.php");
}

?>