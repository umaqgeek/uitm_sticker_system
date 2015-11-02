<!DOCTYPE html>
<html lang="en">
<head>
  
  <style>
  form.three{
 background-color:white;
 border-style:solid;
 width:1000px; 
}
div.two{
  background-color:white;
  border-style:solid;
  width:1000px;
}
body{
        background-color:#e0ffff;
  }
  </style>
</head>
<body>

<div class="container">
  <div style="margin-top:5%;">
  <div class="two">
    <center><h2>Sign Up Form</h2>
  </div></div><br>
  <form method="post" class="three" action="<?=site_url('site/signForm'); ?>">
<div class="row" style="margin-top: 5%;">
<div class="col-md-8 col-md-offset-2">

<div class="row">          
<div class="col-md-3">No Kad Pengenalan :</div>  
  <div class="col-md-8">
  <input type="text" class="form-control" name="ic_no"  placeholder="Enter No IC"  value="<?php echo set_value('ic_no'); ?>" size="50"/></div>
</div> 

<div class="row">
<div class="col-md-3">Name :</div>
        <div class="col-md-8">
        <input type="text" class="form-control" name="nama" placeholder="Enter Name" value="<?php echo set_value('nama'); ?>" size="50"/></div>
</div>

<div class="row">
<div class="col-md-3">Username :</div>
        <div class="col-md-8">
        <input type="text" class="form-control" name="username" placeholder="Enter Username"  value="<?php echo set_value('username'); ?>" size="50"/></div>
</div>

<div class="row">
<div class="col-md-3">Password :</div>
        <div class="col-md-8">
        <input type="password" class="form-control" name="password" placeholder="Enter Password"  value="<?php echo set_value('password'); ?>" size="50"/></div>
</div>

<div class="row">
<div class="col-md-3">No Phone :</div>
        <div class="col-md-8">
        <input type="text" class="form-control" name="phone_no" placeholder="Enter No Phone" value="<?php echo set_value('phone_no'); ?>" size="50" /></div>
</div>

<div class="row">
<div class="col-md-3">Email :</div>
        <div class="col-md-8">
        <input type="text" class="form-control" name="email" placeholder="Enter Email" value="<?php echo set_value('email'); ?>" size="50"/></div>
</div>

<?php echo validation_errors('<p class="error">');?>
<div class="row" style="margin-top: 2%;">
<div class="col-md-4"></div>           
<div class="col-md-8"><br><button type="submit" class="btn btn-primary">Submit</button></div>
</div>     
</div>
</div><br>
</form>
  
</div>
</body>
</html>
