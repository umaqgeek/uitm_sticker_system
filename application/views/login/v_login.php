<!DOCTYPE html>
<html>
<head>
<style>

   form.three {
    background-color:white;
    border-style: solid;
    width:1000px;
    border-radius: 0px;}

    div.two {
    background-color:white;
    border-style: solid;
    width:1000px;
    border-radius: 0px;}

    body{
        background-color:#e0ffff;
    }

</style>
</head>
<body>
<div class="col-md-10 col-md-offset-1">
    <br><br><br>
    <div class="two"><h2><center>Stickers Registration</h2></div><br>

   <!--  <form method="post" class="three" action="<?php echo base_url('login/signup'); ?>"> -->

    <form method="post" class="three" action="<?=site_url('site/registration/add'); ?>">

        <div class="row" style="margin-top: 5%;">
            <div class="col-md-6 col-md-offset-3">
                <center><div class="row">
                                <div class="col-md-2">Username:</div>
                                <div class="col-md-8"><input type="text" class="form-control" name="u_username" placeholder="username" /></div>
                        </div><span class="text-danger"><?php echo form_error('username'); ?></span><br>
                        <div class="row">
                                <div class="col-md-2">Password:</div>
                                <div class="col-md-8"><input type="password" class="form-control" name="u_password" placeholder="password" /></div>
                        </div>
                        <div class="row" style="margin-top: 3%;">
                                <div class="col-md-4"></div>
                                <div class="col-md-2"><button type="submit" class="btn btn-primary">Login</button></div>
                                <div class="col"></div>

                               <!--  <div class="col-md-2"><button type="submit" class="btn btn-primary" <?php echo anchor('login/signup', 'Sign Up');?></button></div> -->

                                 
                                <div class="col-md-2"><button type="submit" class="btn btn-primary" <?php echo anchor('site/signup1', 'Sign Up');?></button></div>
                            </form>
                        </div><br>

            </div>
        </div>
    </form>
</div>
</body>
</html>