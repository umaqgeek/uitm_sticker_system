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

  /*  form.three {
    border:1px solid green;
    outline-style:solid;    
    outline-color:red;      
    outline-width:medium;
}*/
</style>
</head>
<body>
<div class="col-md-12 col-md-offset-1">
    <br><br><br>
    <div class="two"><h2><center>Sticker Registration</h2></div><br>
    <form method="post" class="three" action="<?=site_url('login/registration'); ?>">
        <div class="row" style="margin-top: 5%;">
            <div class="col-md-6 col-md-offset-4">
                <center><div class="row">
                                <div class="col-md-2">Username:</div>
                                <div class="col-md-8"><input type="text" class="form-control" name="username" placeholder="username" /></div>
                        </div><span class="text-danger"><?php echo form_error('username'); ?></span><br>
                        <div class="row">
                                <div class="col-md-2">Password:</div>
                                <div class="col-md-8"><input type="password" class="form-control" name="password" placeholder="password" /></div>
                        </div>
                        <div class="row" style="margin-top: 3%;">
                                <div class="col-md-4"></div>
                                <div class="col-md-2"><button type="submit" class="btn btn-primary">Login</button></div>
                                <div class="col"></div>
                                <div class="col-md-2"><button type="submit" class="btn btn-primary" <form action="http://localhost/uitm_sticker_system/index.php/site" method="post"></form>Sign Up</button></div>
                        </div><br>
            </div>
        </div>
    </form>
</div>
</body>
</html>


<!-- body{
    background-color: #e0ffff;
    
}
</style><br><br>
<h1><center>Sticker Registration System</h1>
 
 </head>
 <body>   
 
 </body>
 </html>


<form method="post" action="<?=site_url('login/registration'); ?>">
<div class="row" style="margin-top: 5%;">
    <div class="col-md-6 col-md-offset-3">
        
        <center><div class="row">
            <div class="col-md-2">Username :</div>
            <div class="col-md-6"><input type="text" class="form-control" name="username" placeholder="username" /></div>
        </div><br>
        <div class="row">
            <div class="col-md-2">Password :</div>
            <div class="col-md-6"><input type="password" class="form-control" name="password" placeholder="password" /></div>
        </div>
        <div class="row" style="margin-top: 1%;">
            <div class="col-md-3"></div>
            <div class="col-md-2"><button type="submit" class="btn btn-primary">Login</button></div>
            <div class="col"></div>
            <div class="col-md-2"><button type="submit" class="btn btn-primary" href="https://www.google.com" >Sign Up</button></div>
        </div>
        
    </div>
</div>
</form>  -->




