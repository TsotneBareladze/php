<?php 
	session_start();
?>
		<form id='register' action='conn.php' method='post' accept-charset='UTF-8' class="regForm">
			<fieldset >
				<legend>Register</legend>
					
					<label for='name' >Your First Name*: </label>
						<input type='text' name='name' id='name' maxlength="50" />
					<label for='email' >Email Address*:</label>
						<input type='text' name='email' id='email' maxlength="50" />
						 
					<label for='username' >Fullname*:</label>
						<input type='text' name='fullname' id='username' maxlength="50" />
							 
					<label for='password' >Password*:</label>
						<input type='password' name='password' id='password' maxlength="50" />
							<input type='submit' name='Submit' value='Submit' />
					 
			</fieldset>
		</form>
	









