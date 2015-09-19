<html>

<head>
<title>BORANG PERMOHONAN STIKER</title>
<style>
   form.three {
    background-color:white;
    border-style: solid;
    width:1000px;
    border-radius: 0px;}

    div.two {
    background-color:white;
    border-style: solid;
    width:1000px;
    border-radius: 0px;}
     body{
        background-color:#e0ffff;}
</style>
</head>
<body> 

<!-- <div class="jumbotron">
    <div class="two"> 
<center><h2>BORANG PERMOHONAN STIKER</h2></center></div><br>
<form method="post" class="three" action="<?=site_url('registration/checkregistration'); ?>">
<div class="row" style="margin-top: 5%;">
    <div class="col-md-4 col-md-offset-4">
        <div class="row">
            <div class="col-md-2">No Plat:</div>
            <div class="col-md-10"><input type="text" class="form-control" name="plat" placeholder="No Plat"></div>
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
            <div class="col-md-10"><input type="text" class="form-control" name="engin" placeholder="No Engin"></div>
        </div><br>
        <div class="row">
            <div class="col-md-2">No Chasis:</div>
            <div class="col-md-10"><input type="text" class="form-control" name="chasis" placeholder="No Chasis"></div>
        </div><br>
        <div class="row">
            <div class="col-md-2">Nama Pemilik:</div>
            <div class="col-md-10"><input type="text" class="form-control" name="nama" placeholder="Nana Pemilik"></div>
        </div><br>
        <div class="row">
            <div class="col-md-2">Warna:</div>
            <div class="col-md-10"><input type="text" class="form-control" name="warna" placeholder="Warna"></div>
        </div><br>
        <div class="row">
            <div class="col-md-2">No IC Pemilik:</div>
            <div class="col-md-10"><input type="text" class="form-control" name="ic" placeholder="No IC"></div>
        </div><br>
        <div class="row">
            <div class="col-md-2">No Tel Pemilik:</div>
            <div class="col-md-10"><input type="text" class="form-control" name="warna" placeholder="Warna"></div>
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
            <div class="col-md-10"><input type="text" class="form-control" name="lesen" placeholder="No Lesen"></div>
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
            <div class="col-md-10"><input type="text" class="form-control" name="cukai" placeholder="No Cukai Jalan"></div>
       </div><br>
       <div class="row">
            <div class="col-md-2">No waris Terdekat:</div>
            <div class="col-md-10"><input type="text" class="form-control" name="waris" placeholder="No Waris"></div>
       </div><br>
       <div class="row" style="margin-top: 3%;">
            <div class="col-md-3"></div>
            <div class="col-md-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Hantar</button></div>
            <div class="col"></div>
            <div class="col-md-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Logout</button></div>
        </div><br>



  
   -->

        <br><br><br>
        <div class="col-md-12 col-md-offset-1">
            <div class="two"> 
                <center><h2>BORANG PERMOHONAN STIKER</h2></center></div><br>
                    <form method="post" class="three" action="<?=site_url('login/registration'); ?>">
                        <div class="row" style="margin-top: 5%;">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="row">
                                    <div class="col-md-2">No Plat:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="plat" placeholder="No Plat"></div>
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
                                    <div class="col-md-10"><input type="text" class="form-control" name="engin" placeholder="No Engin"></div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">No Chasis:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="chasis" placeholder="No Chasis"></div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Nana Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="nama" placeholder="Nana Pemilik"></div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Warna:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="warna" placeholder="Warna"></div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">No IC Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="ic" placeholder="No IC"></div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">No Tel Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="warna" placeholder="Warna"></div>
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
                                    <div class="col-md-10"><input type="text" class="form-control" name="lesen" placeholder="No Lesen"></div>
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
                                    <div class="col-md-10"><input type="text" class="form-control" name="cukai" placeholder="No Cukai Jalan"></div>
                               </div><br>
                               <div class="row">
                                    <div class="col-md-2">No waris Terdekat:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="waris" placeholder="No Waris"></div>
                               </div><br>
                               <div class="row" style="margin-top: 3%;">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-4"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Hantar</button></div>
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
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>




                            </div>
                        </div>
                    </form>
            </div>    
    </body>
</html>

