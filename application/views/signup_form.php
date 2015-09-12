<div id="register_form">
		<h1>Create an Account!</h1>
		<?php
		echo form_open('login/create_member');
		echo form_input('fullname', set_value('fullname', 'Fullname'));
		echo form_input('email', set_value('email', 'Email Address'));
		echo form_input('username', set_value('username', 'Username'));
		echo form_password('password', '', 'placeholder="Password" class="password"');
		echo form_password('password_confirm', '', 'placeholder="Confirm Password" class="password"');
		echo form_submit('submit', 'Create Account');
		?>
		<?php echo validatio_errors('<p class="error">'); ?>
	</div><!--end register form-->