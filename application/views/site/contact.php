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
div.two{
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






<div class="container">
  <div class="two" style="margin-top:5%;">
    <center><h2>BORANG ADUAN</h2>
  </div><br>

  <form method="post" class="three" action="<?=site_url('site/aduan'); ?>"s>
                        <div class="row" style="margin-top: 5%;">
                            <div class="col-md-6 col-md-offset-3">
                             
                                <div class="row">          
                                    <div class="col-md-2">Status :</div>  
                                      <div class="col-md-10">
                                          <select name="jenis" id="status" class="form-control" >
                                                <option value="">Sila Pilih</option>
                                                <option value="PL">Pelajar </option>
                                                <option value="ST">Staff</option>
                                                <option value="KT">Kontraktor</option>
                                                <option value="PU">Orang Awam</option>
                                          </select>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                    <div class="col-md-2">Nama:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="nama"  placeholder="Nama Penuh"></div>
                                 </div><br>

                                  <div class="row">
                                  <div class="col-md-3">Email :</div>
                                  <div class="col-md-8">
                                  <input type="text" class="form-control" name="email" placeholder="Email Yang Sah Digunakan" value="<?php echo set_value('email'); ?>" size="50"/></div>
                                  </div>

                                  <?php echo validation_errors('<p class="error">');?>
                                  <div class="row" style="margin-top: 2%;">
                                  <div class="col-md-4"></div> 

                                  <div class="col-md-8"><br><button type="submit" class="btn btn-primary">Hantar</button></div>
                                  </div>     
                                  </div>
                                  </div><br>
                                  </form>
</center>
</div></div>