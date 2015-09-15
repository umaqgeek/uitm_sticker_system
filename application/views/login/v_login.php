<!DOCTYPE html>
<html>
<head>
<style>
body{
    background-color: #e0ffff;
    
}
</style><br><br>
<h1><center>Sticker Registration</h1>

</head>
<body>
    

</body>
</html>


<form method="post" action="<?=site_url('login/checklogin'); ?>">
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
</form>



