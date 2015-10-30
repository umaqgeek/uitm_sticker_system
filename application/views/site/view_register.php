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
<?php if(isset($jenis) && isset($plat)&& isset($kenderaan)&& isset($model)&& isset($nama)&& isset($ic)&& isset($phone)&& isset($hubungan)&& isset($lesen)&& isset($kelas)&& isset($cukai)&& isset($waris)&& isset($status))?>
<center><form method="post" class="three" >
                            <div class="row" style="margin-top: 5%;">
                            <div class="col-md-6 col-md-offset-3">
                            <input type="hidden" id="hide" name="register_id" value="<?php echo $jenis; ?>"><br/> 

                            <div class="row">          
                                    <div class="col-md-2">ID :</div>  
                                      <div class="col-md-10">
                                          <input name="jenis" id="status" class="form-control"readonly value="<?php echo $jenis; ?>" >
                                        </div>
                                    </div><br>

                                    <div class="row">
                                    <div class="col-md-2">Nana Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="nama"  value="<?php echo $nama; ?>"></div>
                                    </div><br>

                                    <div class="row">
                                    <div class="col-md-2">No Plat Kenderaan:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="plat"  value="<?php echo $plat; ?>"></div>
                                  
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Kenderaan:</div>
                                    <div class="col-md-10">
                                    <input name="kenderaan" id="select1" class="form-control"readonly value="<?php echo $kenderaan; ?>" >
                                         </div>
                                </div><br>

                                <div class="row">
                                      <div class="col-md-2">Jenis Kenderaan:</div>
                                      <div class="col-md-10">
                                      <input name="model" id="select2"class="form-control"readonly value="<?php echo $model; ?>">
                                         </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-2">No IC Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="ic"  value="<?php echo $ic; ?>"></div>
                                    
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">No Tel Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="phone"  value="<?php echo $phone; ?>"></div>
                                    
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Pemilik asal:</div>
                                    <div class="col-md-10">
                                   <input name="hubungan" id="select3" class="form-control"readonly value="<?php echo $hubungan; ?>">
                                        </div>
                                  </div><br>

                                  <div class="row">
                                    <div class="col-md-2">No Lesen:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="lesen"  value="<?php echo $lesen; ?>"></div>
                                    
                                  </div><br>
                                <div class="row">
                                    <div class="col-md-2">Kelas Lesen:</div>
                                    <div class="col-md-10">
                                    <input name="kelas" id="select4" class="form-control"readonly value="<?php echo $kelas; ?>">
                                        </div>
                               </div><br>

                               <div class="row">
                                    <div class="col-md-2">No Cukai Jalan:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="cukai"  value="<?php echo $cukai; ?>"></div>
                                   
                               </div><br>
                               <div class="row">
                                    <div class="col-md-2">No waris Terdekat:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="waris"  value="<?php echo $waris; ?>"></div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-2">Statust:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="waris"  value="<?php echo $status; ?>"></div>
                                </div><br>

                                <input type="button" class="btn btn-primary" value="Kembali" onClick="this.form.action='<?=site_url('site/userhome');?>';this.form.submit()">

                            </div>
                        </div>
                    </form>
                </body>
                </html>
