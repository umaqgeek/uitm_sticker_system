		<h1>Create an Account!</h1>

		<fieldset>
			<legend>Personal Information</legend>

		<?php
		echo form_open('login/create_member');
		echo form_input('u_fullname', set_value('u_fullname', 'Fullname'));
		echo form_input('u_email', set_value('u_email', 'Email Address'));
		?>

		</fieldset>

		<fieldset>
     		<legend>Login Info</legend>

     	<?php
     	echo form_input('u_username', set_value('u_username', 'Username'));
		echo form_input('u_password', set_value('u_password', 'Password'));
		echo form_input('u_password2', set_value('u_password2', 'Password Confirmation'));
		
		echo form_submit('submit', 'Create Account');
		?>

		<?php echo validation_errors('<p class="error">'); ?>
		</fieldset>