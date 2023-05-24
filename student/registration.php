<?php
   include "connection.php";
   include "navbar.php";

?>

<!DOCTYPE html>
<html>
<head>

	<title>student_registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	

<style type="text/css">
		section
		{
			margin-top: -20px;
		}
	</style>
</head>
<body>



<section>
	<div class="reg_img">
		<br>
		<div class="box2">
			<h1 style="text-align: center; font-size: 35px; font-family: Lucida Console;">Library management system</h1>
			<h1 style="text-align: center; font-size: 25px;">User Registration Form</h1>
			<form name="Registration" action="" method="post">
				
				<div class="login">
				<input class="form-control" type="text" name="first" placeholder="First Name" required=""><br>
				<input class="form-control" type="text" name="last" placeholder="Last Name" required=""><br>
				<input class="form-control" type="text" name="id" placeholder="ID No" required=""><br>
				<input class="form-control" type="text" name="year" placeholder="Year Level" required=""><br>
				<input class="form-control" type="text" name="section" placeholder="Section" required=""><br>
				<input class="form-control" type="text" name="username" placeholder="Username" required="required"><br>
				<input class="form-control" type="password" name="password" placeholder="Password" required="required"><br>
				<input class="form-control" type="text" name="email" placeholder="Email" required="required"><br>
				<input class="form-control" type="text" name="contact" placeholder="Phone No" required="required"><br>
				<input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> </div> 
			</form>
			

		</div>
	</div>
</section>
     	 	
		<?php

			if(isset($_POST['submit']))
			{
		 	 	$count=0;
		  	 	$sql="SELECT username from student";
		  		$res=mysqli_query($db,$sql);

		  		while($row=mysqli_fetch_assoc($res))
				{
		   			if($row['username']==$_POST['username'])
		   			{
		   				$count=$count+1;
		   			}
				}

				if($count==0)
				{
					$sql = "INSERT INTO student (first, last, id, year, section, username, password, email, contact) VALUES  ('".$_POST['first']."', '".$_POST['last']."', '".$_POST['id']."', '".$_POST['year']."', '".$_POST['section']."', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['email']."', '".$_POST['contact']."')";
					mysqli_query($db, $sql);
				}	

  		 ?>

     	 	<script type="text/javascript">
      			alert("YOU ALREADY REGISTERED");
     	 	</script>
		
 		 <?php
  	
			}


   		?>
     	 	
	

</body>