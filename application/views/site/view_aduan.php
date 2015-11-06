
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
  form.three{
 background-color:white;
 border-style:solid;
 width:1000px; 
}
body{
        background-color:#FFC0CB;
  }
  </style>
</head>
<body>
 <?if(isset($status) && isset($nama)&& isset($email)&& isset($komen)))?>

<div class="row" style="margin-top: 15%;">
<center><form method="post" class="three" >
<div class="row" style="margin-top: 5%;">
    <div class="col-md-10 col-md-offset-2">
        
        <div class="row">
            <div class="col-md-2">Status :</div>
            <div class="col-md-6"><input type="text" class="form-control"readonly value="<?php echo $status;?>" /></div>
        </div>
        <div class="row">
            <div class="col-md-2">Nama :</div>
            <div class="col-md-6"><input type="text" class="form-control"readonly value="<?php echo $nama;?>" /></div>
        </div>
        <div class="row">
            <div class="col-md-2">No IC :</div>
            <div class="col-md-6"><input type="text" class="form-control"readonly value="<?php echo $ic;?>" /></div>
        </div>
        <div class="row">
            <div class="col-md-2">Email :</div>
            <div class="col-md-6"><input type="text" class="form-control"readonly value="<?php echo $email;?>" /></div>
        </div>
        <div class="row">
            <div class="col-md-2">Komen :</div>
            <div class="col-md-6"><input type="text" class="form-control"readonly value="<?php echo $komen;?>" /></div>
        </div><br>
         <div class="row">
            <div class="col-md-8">
        <input type="button" class="btn btn-primary" value="Kembali" onClick="this.form.action='<?=site_url('site/contact');?>';this.form.submit()">
        </div>
        
    </div>
</div><br>
</form></div>

</body>
</html>
