<!DOCTYPE html>
<html>
<head>
	
	<title>Registration Form</title>
</head>
<body>
		<form id='register' action='post.php' method='post' accept-charset='UTF-8' class="regForm">
			<fieldset >
				<legend>Register</legend>
					
					<label for='name' >Your Full Name*: </label>
						<input type='text' name='name' id='name' maxlength="50" />
					<label for='email' >Email Address*:</label>
						<input type='email' name='email' id='email' maxlength="50" />
						 
					<label for='username' >UserName*:</label>
						<input type='text' name='username' id='username' maxlength="50" />
							 
					<label for='password' >Password*:</label>
						<input type='password' name='password' id='password' maxlength="50" />
							<input type='submit' name='Submit' value='Submit' />
					 
			</fieldset>
		</form>
</body>
</html>









