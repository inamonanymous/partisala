<?php

	include "navbar.php";
	include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
	<style type="text/css">
		body
		{
			background-image: url("images/.jpg");
		}
		.wrapper
		{
			padding: 10px;
			margin: -20px auto;
			width: 900px;
			height: 600px;
			background-color: black;
			opacity: .8;
			color: white;
		}
		.form-control
		{
			height: 70px;
			width: 60%;
		}

	</style>

</head>
<body>
	<div class="wrapper">
	<h4>If you have any suggestion or question please comment below<h4>
	<form style="" action="" method="post">
		<input class="form-control" type="text" name="comment" placeholder="write something..."><br>
		<input class="btn btn-default" type="submit" name="submit" value="comment" style="width: 100px; height: 35px;">
 
	</form>
	</div>

	<div>
		<?php
			if(isset($_POST['submit']))
			{
				$sql = "INSERT INTO comments (comment) VALUES ('$comment')";
				mysqli_query($db, $sql);
			}	


		?>

	</div>

</body>
</html>

