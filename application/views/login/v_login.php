<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tuffah Informatics</title>
  <style>

   form.three {
    background-color:white;
    border-style: solid;
    width:900px;
    border-radius: 0px;}

    div.two {
    background-color:white;
    border-style: solid;
    width:900px;
    border-radius: 0px;}

    body{
        background-color:#e0ffff;
    }

</style>
</head>
<body>

<div style="margin-top:15%;">
<center><div class="container">
  <div class="two">
    <center><h2>UiTM Sticker System</h2>
      </div>
</div><br>

<form method="post" class="three" >
<div class="row" style="margin-top: 5%;">
    <div class="col-md-8 col-md-offset-2">
        
        <div class="row">
            <div class="col-md-2">Username :</div>
            <div class="col-md-6"><input type="text" class="form-control" name="username" placeholder="username" /></div>
        </div>
        <div class="row">
            <div class="col-md-2">Password :</div>
            <div class="col-md-6"><input type="password" class="form-control" name="password" placeholder="password" /></div>
        </div>
 <?php echo validation_errors('<p class="error">');?>
        <div class="row" style="margin-top: 1%;">

            <!-- <div class="col-md-2"></div>
            <div class="col-md-6"> -->
            
            <div class="col-md-10">



              <!-- <input type="button" class="btn btn-primary" value="User" onClick="this.form.action='<?=site_url('site/register');?>';this.form.submit()"> -->

              <!--  <input type="button" class="btn btn-primary" value="User" onClick="this.form.action='<?=site_url('site/userhome');?>';this.form.submit()"> -->

              <!-- <input type="button" class="btn btn-primary" value="User" onClick="this.form.action='<?=site_url('site/register');?>';this.form.submit()"> -->

               <input type="button" class="btn btn-primary" value="User" onClick="this.form.action='<?=site_url('site/register');?>';this.form.submit()">



              <input type="button" class="btn btn-primary" value="Admin" onClick="this.form.action='<?=site_url('admin/admin1');?>';this.form.submit()">

              <!-- <input type="button" class="btn btn-primary" value="Officer" onClick="this.form.action='<?=site_url('site/signup');?>';this.form.submit()">
 -->
            </div>
        </div>
        
    </div>
</div><br>
</form>
</div>
</body>
</html>
