<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
        background-color:#e0ffff;
  }
  </style>
</head>
<body>

 <?php
// define variables and set to empty values
$platErr = $enginErr =$chasisErr = $namaErr =$warnaErr = $icErr =$phoneErr = $lesenErr = $cukaiErr = $warisErr = "";
$plat = $engin = $chasis =$nama = $warna = $ic = $phone = $lesen = $cukai = $waris = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["plat"])) {
     $platErr = "Plat is required";
   } else {
     $plat = test_input($_POST["plat"]);
   }
   
   
   if (empty($_POST["engin"])) {
     $enginErr = "Engin is required";
   } else {
     $engin = test_input($_POST["engin"]);
   }

    if (empty($_POST["chasis"])) {
     $chasisErr = "Chasis is required";
   } else {
     $chasis = test_input($_POST["chasis"]);
   }
   
   if (empty($_POST["nama"])) {
     $namaErr = "Nama is required";
   } else {
     $nama = test_input($_POST["nama"]);
   }
     
      if (empty($_POST["warna"])) {
     $warnaErr = "Warna is required";
   } else {
     $warna = test_input($_POST["warna"]);
   }
   
   if (empty($_POST["ic"])) {
     $icErr = "Ic Number is required";
   } else {
     $ic = test_input($_POST["ic"]);
   }

   if (empty($_POST["phone"])) {
     $phoneErr = "Phone is required";
   } else {
     $phone = test_input($_POST["phone"]);
   }
   
    if (empty($_POST["lesen"])) {
     $lesenErr = "Lesen is required";
   } else {
     $lesen = test_input($_POST["lesen"]);
   }
     
      if (empty($_POST["cukai"])) {
     $cukaiErr = "Cukai is required";
   } else {
     $cukai = test_input($_POST["cukai"]);
   }
   
   if (empty($_POST["waris"])) {
     $warisErr = "Waris Number is required";
   } else {
     $waris = test_input($_POST["waris"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?> 

<div class="container">
  <div class="two" style="margin-top:5%;">
    <center><h2>BORANG PERMOHONAN STIKER</h2>
  </div><br>

  <form method="post" class="three" action="<?=site_url('site/regisForm'); ?>">
                        <div class="row" style="margin-top: 5%;">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="row">
                                    <div class="col-md-2">No Plat Kenderaan:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="plat" value="<?php echo $plat;?>" placeholder="No Plat"></div>
                                    <span class="error">* <?php echo $platErr;?></span>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Kenderaan:</div>
                                    <div class="col-md-10">
                                    <select name="kenderaan" id="select1" class="form-control" >
                                         <option value="">Sila Pilih</option>
                                         <option value="KT">KERETA </option>
                                         <option value="MTH">MOTORSIKAL MELEBIHI 125CC </option>
                                         <option value="MT">MOTOSIKAL </option>
                                         <option value="VN">VAN </option>
                                      </select></div>
                                </div><br>
                                <div class="row">
                                      <div class="col-md-2">Jenis Kenderaan:</div>
                                      <div class="col-md-10">
                                      <select name="model" id="select2"class="form-control">
                                         <option value="">Sila Pilih</option>
                                         <option value="ALF" >ALFA ROMEO</option>
                                         <option value="APR" >APRIALLIA</option>
                                         <option value="CET" >CETRON</option>
                                         <option value="CHA" >CHARADE</option>
                                         <option value="DAI" >DAIHATSU</option>
                                         <option value="FIA" >FIAT</option>
                                         <option value="FRD" >FORD</option>
                                         <option value="HON" >HONDA</option>
                                         <option value="HYU" >HYUNDAI</option>
                                         <option value="JAG" >JAGUH</option>
                                         <option value="KAN" >KANCIL</option>
                                         <option value="KEL" >KELISA</option>
                                         <option value="KIA" >KIA/NAZA</option>
                                         <option value="MAZ" >MAZDA</option>
                                         <option value="MER" >MERCEDES BENZ</option>
                                         <option value="MIN" >MINI</option>
                                         <option value="MIT" >MITSUBISHI</option>
                                         <option value="MOD" >MODENAS</option>
                                         <option value="NIS" >NISSAN</option>
                                         <option value="PER" >PERODUA</option>
                                         <option value="PEU" >PEUGEOT</option>
                                         <option value="PRO" >PROTON</option>
                                         <option value="SUZ" >SUZUKI</option>
                                         <option value="TOY" >TOYOTA</option>
                                         <option value="VIT" >VITARA</option>
                                         <option value="VOL" >VOLVO</option>
                                         <option value="YAM" >YAMAHA</option>
                                         <option value="SYM" >SYM</option>
                                         <option value="DEM" >DEMAK</option>
                                         <option value="DLL" >LAIN-LAIN</option>
                                      </select></div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">No Engin:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="engin" value="<?php echo $engin;?>" placeholder="No Engin"></div>
                                    <span class="error">* <?php echo $enginErr;?></span>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">No Chasis:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="chasis"value="<?php echo $chasis;?>"  placeholder="No Chasis"></div>
                                    <span class="error">* <?php echo $chasisErr;?></span>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Nana Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="nama" value="<?php echo $nama;?>" placeholder="Nama Pemilik"></div>
                                    <span class="error">* <?php echo $namaErr;?></span>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Warna Kenderaan:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="warna" value="<?php echo $warna;?>" placeholder="Warna"></div>
                                    <span class="error">* <?php echo $warnaErr;?></span>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">No IC Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="ic" value="<?php echo $ic;?>" placeholder="No IC"></div>
                                    <span class="error">* <?php echo $icErr;?></span>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">No Tel Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="phone" value="<?php echo $phone;?>" placeholder="No Tel"></div>
                                    <span class="error">* <?php echo $phoneErr;?></span>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Hubungan:</div>
                                    <div class="col-md-10">
                                   <select name="hubungan" id="select3" class="form-control" >
                                        <option value="-">Sila Pilih</option>
                                        <option value="DN" >DATUK/NENEK</option>
                                        <option value="IB" >IBU/BAPA</option>
                                        <option value="AD" >KAKAK/ABANG/ADIK-BERADIK</option>
                                        <option value="DLL" >LAIN-LAIN</option>
                                        <option value="PJ" >PENJAGA</option>
                                        <option value="SA" >SAUDARA</option>
                                        <option value="SD" >SENDIRI</option>
                                        <option value="SU" >SUAMI/ISTERI</option>
                                        <option value="SY" >SYARIKAT</option>
                                    </select></div>
                                  </div><br>
                                  <div class="row">
                                    <div class="col-md-2">No Lesen:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="lesen" value="<?php echo $lesen;?>" placeholder="No Lesen"></div>
                                    <span class="error">* <?php echo $lesenErr;?></span>
                                  </div><br>
                                <div class="row">
                                    <div class="col-md-2">Kelas Lesen:</div>
                                    <div class="col-md-10">
                                    <select name="kelas" id="select4" class="form-control">
                                        <option value="-">Sila Pilih</option>
                                        <option value="A"  >A - Kenderaan orang cacat</option>
                                        <option value="B"  >B - Motosikal melebihi 500sp</option>
                                        <option value="B1"  >B1 - Motosikal tidak melebihi 500sp</option>
                                        <option value="B2"  >B2 - Motosikal tidak melebihi 250sp</option>
                                        <option value="B3"  >B3 - Motosikal tidak melebihi 90sp</option>
                                        <option value="C"  >C - Motosikal tiga roda</option>
                                        <option value="D"  >D - Motokar BTM tidak melebihi 3000 kg</option>
                                        <option value="E"  >E - Motokar berat BTM melebihi 7500 kg</option>
                                        <option value="E1"  >E1 - Motokar  BTM tidak melebihi 7500 kg</option>
                                        <option value="E2"  >E2 - Motokar  BTM tidak melebihi 5000 kg</option>
                                        <option value="M"  >M - Hukuman mahkamah</option>
                                    </select></div>
                               </div><br>
                               <div class="row">
                                    <div class="col-md-2">No Cukai Jalan:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="cukai" value="<?php echo $cukai;?>" placeholder="No Cukai Jalan"></div>
                                    <span class="error">* <?php echo $cukaiErr;?></span>
                               </div><br>
                               <div class="row">
                                    <div class="col-md-2">No waris Terdekat:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="waris" value="<?php echo $waris;?>" placeholder="No Waris"></div>
                                    <span class="error">* <?php echo $warisErr;?></span>
                               </div><br>
                               <div class="row" style="margin-top: 3%;">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-4"><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Hantar</button></div>
                                    <div class="col"></div>
                                    <div class="col-md-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Logout</button></div>
                                </div><br>

                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>   
                                        </div>
                                        <div class="modal-body">
                                          <p>Terima kasih kerana mendaftar.</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="modal fade" id="myModal1" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>   
                                        </div>
                                        <div class="modal-body">
                                          <p>Terima Kasih Datang Lagi.</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
 

       
                                  

                            </div>
                        </div>
                    </form>         

  
</div>

<?php
echo $plat;
echo "<br>";
echo $engin;
echo "<br>";
echo $chasis;
echo "<br>";
echo $nama;
echo "<br>";
echo $warna;
echo "<br>";
echo $ic;
echo "<br>";
echo $phone;
echo "<br>";
echo $lesen;
echo "<br>";
echo $cukai;
echo "<br>";
echo $waris;
?>           

</body>
</html>


