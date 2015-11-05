<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tuffah Informatics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>

   form.three {
    background-color:white;
    border-style: solid;
    width:950px;
    border-radius: 0px;}

    body{
        background-color:#e0ffff;
    }

</style>
</head>
<body>

<br><br><br>
<div style="margin-top: 15%;">
<div class="container">
<form method="post" class="three" >
<div class="row" style="margin-top: 5%;">
    <div class="col-md-8 col-md-offset-2">
        
        <div class="row">
            <div class="col-md-2">Name :</div>
            <div class="col-md-8"><input type="text" class="form-control" name="nama" placeholder="Name" /></div>
        </div>
        <div class="row">
            <div class="col-md-2">IC :</div>
            <div class="col-md-8"><input type="text" class="form-control" name="ic" placeholder="Ic" /></div>
        </div>
 <?php echo validation_errors('<p class="error">');?>
        <div class="row" style="margin-top: 1%;">
            <div class="col-md-2 col-md-offset-2"></div>
            <div class="col-md-6">

              <!-- <input type="button" class="btn btn-primary" value="User" onClick="this.form.action='<?=site_url('site/register');?>';this.form.submit()"> -->

               <input type="button" class="btn btn-primary" value="Submit" onClick="this.form.action='<?=site_url('site/updatestatus');?>';this.form.submit()">
               <input type="button" class="btn btn-primary" value="Kembali" onClick="this.form.action='<?=site_url('site/userhome');?>';this.form.submit()">
            </div>
        </div>
        
    </div>
</div><br>
</form>
</div>
</div>
</body>
</html>

