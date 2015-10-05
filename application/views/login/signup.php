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
<div class="col-md-2">Status :</div>  
  <div class="col-md-8">
      <select name="status" id="status" class="form-control" >
            <option value="">Sila Pilih</option>
            <option value="PL">Pelajar </option>
            <option value="ST">Staff</option>
            <option value="KT">Kontraktor </option>
      </select>
    </div>
</div> 

<div class="row">          
<div class="col-md-2">IC_No :</div>  
  <div class="col-md-8">
  <input type="text" class="form-control" name="ic_no" placeholder="Enter No IC" /></div>
</div> 

<div class="row">
<div class="col-md-2">Name :</div>
        <div class="col-md-8">
        <input type="text" class="form-control" name="nama" placeholder="Enter Name" /></div>
</div>

<div class="row">
<div class="col-md-2">Username :</div>
        <div class="col-md-8">
        <input type="text" class="form-control" name="username" placeholder="Enter Username" /></div>
</div>

<div class="row">
<div class="col-md-2">Password :</div>
        <div class="col-md-8">
        <input type="password" class="form-control" name="password" placeholder="Enter Password" /></div>
</div>

<div class="row">
<div class="col-md-2">No Phone :</div>
        <div class="col-md-8">
        <input type="text" class="form-control" name="phone_no" placeholder="Enter No Phone" /></div>
</div>

<div class="row">
<div class="col-md-2">Email :</div>
        <div class="col-md-8">
        <input type="text" class="form-control" name="email" placeholder="Enter Email" /></div>
</div>

<div class="row" style="margin-top: 2%;">
<div class="col-md-2"></div>           
<div class="col-md-8"><br><button type="submit" class="btn btn-primary">Submit</button></div>
 <?php echo validation_errors('<p class="error">');?>
</div>     
</div>
</div><br>
</form>
  
</div>
</body>
</html>


