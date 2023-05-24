<?php
   include "connection.php";
   include "navbar.php";

?>
<!DOCTYPE html>
<html>
<head>

	<title>student_login</title>
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





</header>
<section>
	<div class="log_img">
		<br> <br><br>
		<div class="box1">
			<h1 style="text-align: center; font-size: 35px; font-family: Lucida Console;">Library management system</h1>
			<h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br>
			<form name="login" action="" method="post">
				
				<div class="login">
				<input class="form-control" type="text" name="username" placeholder="Username" required="required"> <br>
				<input class="form-control" type="password" name="password" placeholder="Password" required="required"> <br><br>
				<input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px"></div> 

			
			<p style="color: black; padding-left: 50px;">
				<br><br>
				<a style="color:white" href="">Forget password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp
				New to this website?<a style="color: white;" href="registration.php">Sign Up</a>
		</p>
		</form>
		</div>
	</div>
</section>

<?php

	if(isset($_POST['submit']))
{
  
  $count=0;
  $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");
  $count=mysqli_num_rows($res);

  if($count==0)
  {

  ?>
   <!--

  <script type="text/javascript">
  	alert("THE USERNAME AND PASSWORD DOESNT MATCH");
  </script>
  -->

   <div class="alert alert-danger" style="width: 700px; margin-left: 300 px; background-color: blue; color: white">
	<strong>The user name and password doesn't match</strong>
  </div>

  <?php

  }
  else

  {

  ?>
    <script type="text/javascript">
    	window.location="book.php"
    </script>
  <?php
  }
}

?>

</body>
</html>