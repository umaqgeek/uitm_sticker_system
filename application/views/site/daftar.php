<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
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
    <center><h2>BORANG PERMOHONAN STIKER</h2>
  </div><br>

  <form method="post" class="three" action="<?=site_url('site/regisForm'); ?>"s>
                        <div class="row" style="margin-top: 5%;">
                            <div class="col-md-6 col-md-offset-3">
                             <!--  <div class="row"><div class="col-md-3"></div>
                              
                                    <center><div class="col-md-8"><span class="form-control" ><center><?php if(isset($username))
                                     echo "Selamat Datang  ".$username;?></span></div> 
                                </div><br>
 -->
                                <div class="row">          
                                    <div class="col-md-2">Status :</div>  
                                      <div class="col-md-10">
                                          <select name="jenis" id="status" class="form-control" >
                                                <option value="">Sila Pilih</option>
                                                <option value="PL">PL - Pelajar </option>
                                                <option value="ST">ST - Staff</option>
                                                <option value="KT">KT - Kontraktor </option>
                                          </select>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                    <div class="col-md-2">Nama Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="nama"  placeholder="Nama Pemilik"></div>
                                 </div><br>


                                <div class="row">
                                    <div class="col-md-2">No Plat Kenderaan:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="plat"  placeholder="No Plat"></div>
                                  
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Kenderaan:</div>
                                    <div class="col-md-10">
                                    <select name="kenderaan" id="select1" class="form-control" >
                                         <option value="">Sila Pilih</option>
                                         <option value="KT">KT - KERETA </option>
                                         <option value="MTH">MTH - MOTORSIKAL MELEBIHI 125CC </option>
                                         <option value="MT">MT - MOTOSIKAL </option>
                                         <option value="VN">VN - VAN </option>
                                      </select></div>
                                </div><br>
                                <div class="row">
                                      <div class="col-md-2">Jenis Kenderaan:</div>
                                      <div class="col-md-10">
                                      <select name="model" id="select2"class="form-control">
                                         <option value="">Sila Pilih</option>
                                         <option value="ALF" >ALF - ALFA ROMEO</option>
                                         <option value="APR" >APR - APRIALLIA</option>
                                         <option value="CET" >CET - CETRON</option>
                                         <option value="CHA" >CHA - CHARADE</option>
                                         <option value="DAI" >DAI - DAIHATSU</option>
                                         <option value="FIA" >FIA - FIAT</option>
                                         <option value="FRD" >FRD - FORD</option>
                                         <option value="HON" >HON - HONDA</option>
                                         <option value="HYU" >HYU - HYUNDAI</option>
                                         <option value="JAG" >JAG - JAGUH</option>
                                         <option value="KAN" >KAN - KANCIL</option>
                                         <option value="KEL" >KEL - KELISA</option>
                                         <option value="KIA" >KIA - KIA/NAZA</option>
                                         <option value="MAZ" >MAZ - MAZDA</option>
                                         <option value="MER" >MER - MERCEDES BENZ</option>
                                         <option value="MIN" >MIN - MINI</option>
                                         <option value="MIT" >MIT - MITSUBISHI</option>
                                         <option value="MOD" >MOD - MODENAS</option>
                                         <option value="NIS" >NIS - NISSAN</option>
                                         <option value="PER" >PER - PERODUA</option>
                                         <option value="PEU" >PEU - PEUGEOT</option>
                                         <option value="PRO" >PRO - PROTON</option>
                                         <option value="SUZ" >SUZ - SUZUKI</option>
                                         <option value="TOY" >TOY - TOYOTA</option>
                                         <option value="VIT" >VIT - VITARA</option>
                                         <option value="VOL" >VOL - VOLVO</option>
                                         <option value="YAM" >YAM - YAMAHA</option>
                                         <option value="SYM" >SYM - SYM</option>
                                         <option value="DEM" >DEM - DEMAK</option>
                                         <option value="DLL" >DLL - LAIN-LAIN</option>
                                      </select></div>
                               
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">No IC Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="ic"  placeholder="No IC"></div>
                                    
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">No Tel Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="phone"  placeholder="No Telefon"></div>
                                    
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Pemilik asal:</div>
                                    <div class="col-md-10">
                                   <select name="hubungan" id="select3" class="form-control" >
                                        <option value="-">Sila Pilih</option>
                                        <option value="DN" >DN - DATUK/NENEK</option>
                                        <option value="IB" >IB - IBU/BAPA</option>
                                        <option value="AD" >AD - KAKAK/ABANG/ADIK-BERADIK</option>
                                        <option value="DLL" >DLL - LAIN-LAIN</option>
                                        <option value="PJ" >PJ - PENJAGA</option>
                                        <option value="SA" >SA - SAUDARA</option>
                                        <option value="SD" >SD - SENDIRI</option>
                                        <option value="SU" >SU - SUAMI/ISTERI</option>
                                        <option value="SY" >SY - SYARIKAT</option>
                                    </select></div>
                                    
                                  </div><br>
                                  <div class="row">
                                    <div class="col-md-2">No Lesen:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="lesen"  placeholder="No Lesen"></div>
                                    
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
                                    <div class="col-md-10"><input type="text" class="form-control" name="cukai"  placeholder="No Cukai Jalan"></div>
                                   
                               </div><br>
                               <div class="row">
                                    <div class="col-md-2">No waris Terdekat:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="waris"  placeholder="No Waris"></div>
                                </div><br>

                                    <div class="row">
                                    <div class="col-md-10"><input type="hidden" class="form-control" name="status"  value="Pending" ><!-- <span  class="form-control" name="status" type="text">Pending</span> --></div>
                               </div><br>

                               <div class="row">
                                    <div class="col-md-10"><input type="hidden" class="form-control" name="code"  ><!-- <span  class="form-control" name="status" type="text">Pending</span> --></div>
                               </div><br>

                                <?php echo validation_errors('<p class="error">');?>

                             <!--     <?php echo validation_errors('<p class="error">');?>
                               <div class="row" style="margin-top: 3%;">

                                <div class="row" style="margin-top: 3%;">
                                <div class="col-md-3"></div>
                                <!-- <input type="button" class="btn btn-primary" value="Hantar" data-toggle="modal" data-target="#myModal1"> -->
                                <center><div class="col-md-4"><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Hantar</button></div>
                                
              


                               <!-- <!-- <div class="row" style="margin-top: 3%;">

                                    <div class="col-md-3"></div>
                                    <center><div class="col-md-4"><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Hantar</button></div>
                                    <br> -->


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

     

         
                        </div>
                    </form>        
</div>

