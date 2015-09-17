<!DOCTYPE html>
<html>
<head>
<style>
   form.three {
    border-style: solid;
    width:1000px;
    border-radius: 0px;}

    div.two {
    border-style: solid;
    width:1000px;
    border-radius: 0px;}

  /*  form.three {
    border:1px solid green;
    outline-style:solid;    
    outline-color:red;      
    outline-width:medium;
}*/
</style>
</head>
<body>
  <div class="jumbotron"> 
    <div class="two"><h2><center>Sticker Registration</h2></div><br>
    <form method="post" class="three" action="<?=site_url('login/checklogin'); ?>">
        <div class="row" style="margin-top: 5%;">
            <div class="col-md-6 col-md-offset-4">
                <center><div class="row">
                                <div class="col-md-2">Username :</div>
                                <div class="col-md-6"><input type="text" class="form-control" name="username" placeholder="username" /></div>
                        </div><br>
                        <div class="row">
                                <div class="col-md-2">Password :</div>
                                <div class="col-md-6"><input type="password" class="form-control" name="password" placeholder="password" /></div>
                        </div>
                        <div class="row" style="margin-top: 3%;">
                                <div class="col-md-3"></div>
                                <div class="col-md-2"><button type="submit" class="btn btn-primary">Login</button></div>
                                <div class="col"></div>
                                <div class="col-md-2"><button type="submit" class="btn btn-primary" href="https://www.google.com" >Sign Up</button></div>
                        </div><br>
            </div>
        </div>
    </form>
</div>
</body>
</html>





