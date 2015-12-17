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

<?php if(isset($update)){?>
                    <?php foreach ($update as $row): ?>
                        <center><p>Edit Detail & Click Update Button</p>
                        <center><form method="post" class="three" action="<?php echo base_url() . "index.php/site/update_register"?>">
                            <div class="row" style="margin-top: 5%;">
                            <div class="col-md-6 col-md-offset-3">
                              
                             
                            <input type="hidden" id="hide" name="register_id" value="<?php echo $row->register_id; ?>"><br/>      


                            <div class="row">          
                                    <div class="col-md-2">Status :</div>  
                                      <div class="col-md-10">
                                          <select name="jenis" id="status" class="form-control" value="<?php echo $row->jenis; ?>" >
                                                <option value="">Sila Pilih</option>
                                                <option value="PL">Pelajar </option>
                                                <option value="ST">Staff</option>
                                                <option value="KT">Kontraktor </option>
                                          </select>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                    <div class="col-md-2">Nama Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="nama"  value="<?php echo $row->nama; ?>"></div>
                                    </div><br>

                                    <div class="row">
                                    <div class="col-md-2">No Plat Kenderaan:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="plat"  value="<?php echo $row->plat; ?>"></div>
                                  
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Kenderaan:</div>
                                    <div class="col-md-10">
                                    <select name="kenderaan" id="select1" class="form-control" value="<?php echo $row->kenderaan; ?>" >
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
                                      <select name="model" id="select2"class="form-control" value="<?php echo $row->model; ?>">
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
                                    <div class="col-md-2">No IC Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="ic"  value="<?php echo $row->ic; ?>"></div>
                                    
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">No Tel Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="phone"  value="<?php echo $row->phone; ?>"></div>
                                    
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Pemilik asal:</div>
                                    <div class="col-md-10">
                                   <select name="hubungan" id="select3" class="form-control" value="<?php echo $row->hubungan; ?>">
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
                                    <div class="col-md-10"><input type="text" class="form-control" name="lesen"  value="<?php echo $row->lesen; ?>"></div>
                                    
                                  </div><br>
                                <div class="row">
                                    <div class="col-md-2">Kelas Lesen:</div>
                                    <div class="col-md-10">
                                    <select name="kelas" id="select4" class="form-control" value="<?php echo $row->kelas; ?>">
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
                                    <div class="col-md-10"><input type="text" class="form-control" name="cukai"  value="<?php echo $row->cukai; ?>"></div>
                                   
                               </div><br>
                               <div class="row">
                                    <div class="col-md-2">No waris Terdekat:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="waris"  value="<?php echo $row->waris; ?>"></div>
                                </div><br>

                            <input type="submit" class="btn btn-primary" id="submit" name="dsubmit" value="Update">
                            <a href="http://localhost/uitm_sticker_system/index.php/site/userhome"><input type="button" class="btn btn-primary" value="Kembali" ></a>
                          
                            
                        </div>
                    </div>

                        </form>

                    <?php endforeach; }?>
                </body>
                </html>

                    


                                