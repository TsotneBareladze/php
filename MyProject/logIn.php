
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form</title>
</head>
<body>


		<div class="login">
			<h1>Log In<h1>
		</div><!--End login-->


		<div class="reg">
			<h1><a href="registrationForm.php">Registration</a><h1>
		</div><!--END reg-->
	



<form action="conn.php" method="post">  
	<div class="wrap">
		  <label for="username">UserName: </label><br>	  
	  	<input type="text" name="username" placeholder="username" id="username"><br>

	 
	  <label for="password">Password: </label><br>	  
	  <input type="password" name="password1" placeholder="password" id="password"><br>

	  <label for="password2"> Re-Password:</label><br>
	  <input type="password" name="password2" placeholder="Re-password" id="password2"><br>
	  
	  <input  class="sbm" type="submit" value="Submit">
	</div>  
 </form>



</body>
</html>
