<!DOCTYPE html>
<html lang="en">
<head>
 <script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>

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
<?php
if (isset($tunjuk)) { 
 if ($tunjuk == 'No record found !') { 
 echo $tunjuk;
} 
else ?>
{
	<?php foreach ($tunjuk as $value): ?> {

<center><form method="post" class="three" ><div id="printableArea">
                            <div class="row" style="margin-top: 5%;">
                            <div class="col-md-10 col-md-offset-1">
                            <input type="hidden" id="hide" name="register_id" value="<?php echo $value->jenis; ?>"><br/> 
                            <div class="row">          
                                    <div class="col-md-2">ID :</div>  
                                      <div class="col-md-10">
                                          <input name="jenis" id="status" class="form-control"readonly value="<?php echo $value->jenis; ?>" >
                                        </div>
                                    </div><br>
                                    <div class="row">
                                    <div class="col-md-2">Nama Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="nama"  value="<?php echo $value->nama; ?>"></div>
                                    </div><br>
                                    <div class="row">
                                    <div class="col-md-2">No Plat Kenderaan:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="plat"  value="<?php echo $value->plat; ?>"></div>                          
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Kenderaan:</div>
                                    <div class="col-md-10">
                                    <input name="kenderaan" id="select1" class="form-control"readonly value="<?php echo $value->kenderaan; ?>" >
                                         </div>
                                </div><br>
                                <div class="row">
                                      <div class="col-md-2">Jenis Kenderaan:</div>
                                      <div class="col-md-10">
                                      <input name="model" id="select2"class="form-control"readonly value="<?php echo $value->model; ?>">
                                         </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">No IC Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="ic"  value="<?php echo $value->ic; ?>"></div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">No Tel Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="phone"  value="<?php echo $value->phone; ?>"></div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Pemilik asal:</div>
                                    <div class="col-md-10">
                                   <input name="hubungan" id="select3" class="form-control"readonly value="<?php echo $value->hubungan; ?>">
                                        </div>
                                  </div><br>
                                  <div class="row">
                                    <div class="col-md-2">No Lesen:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="lesen"  value="<?php echo $value->lesen; ?>"></div>
                                  </div><br>
                                <div class="row">
                                    <div class="col-md-2">Kelas Lesen:</div>
                                    <div class="col-md-10">
                                    <input name="kelas" id="select4" class="form-control"readonly value="<?php echo $value->kelas; ?>">
                                        </div>
                               </div><br>
                               <div class="row">
                                    <div class="col-md-2">No Cukai Jalan:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="cukai"  value="<?php echo $value->cukai; ?>"></div>                             
                               </div><br>
                               <div class="row">
                                    <div class="col-md-2">No waris Terdekat:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="waris"  value="<?php echo $value->waris; ?>"></div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Status:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="waris"  value="<?php echo $value->status; ?>"></div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Code:</div>
                                    <div class="col-md-10"><input type="text" class="form-control"readonly name="code"  value="<?php echo $value->code; ?>"></div>
                                </div><br>
</div>

                            </div>
                        </div>
                        <center><input type="button" class="btn btn-primary" value="Kembali" onClick="this.form.action='<?=site_url('site/userhome');?>';this.form.submit()">
                                <input type="button" class="btn btn-primary" onclick="printDiv('printableArea')" value="Print " />
                    </form><?php endforeach; }?>

                                

                                

 


                     
    
       




 </body>
</html>

