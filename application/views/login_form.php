<div id="login_form">
    <h1>Login, please.</h1>
    <?php
    echo form_open('login/validate_credentials');
    echo form_input('u_username', 'Username');
    echo form_password('u_password', 'Password');
    echo form_submit('submit', 'login');
    echo anchor('login/signup', 'Create Account');
    ?>
</div><!--end login_form-->