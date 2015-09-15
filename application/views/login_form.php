<div id="login_form">
	<h1>Login, Please</h1>
	<?php
	echo form_open('login/validate_credentials');
	echo form_input('u_username', 'Username');
	echo form_password('u_password', 'Password');
	echo form_submit('submit', 'Login');
	echo anchor('login/signup', 'Create Account');
	?>
</div>
