<div class="container">
  <div class="two" style="margin-top:5%;">
    <center><h2>BORANG PERMOHONAN STIKER</h2>
  </div><br>

  <form method="post" class="three" action="<?=site_url('site/regisForm'); ?>"s>
                        <div class="row" style="margin-top: 5%;">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="row">
                                    <div class="col-md-2">No Plat Kenderaan:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="plat"  placeholder="No Plat"></div>
                                  
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
                                    <div class="col-md-2">Nama Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="nama"  placeholder="Nama"></div>
                                                                        
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Warna Kenderaan:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="warna"  placeholder="Warna"></div>
                                    
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">No IC Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="ic"  placeholder="No IC"></div>
                                    
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">No Tel Pemilik:</div>
                                    <div class="col-md-10"><input type="text" class="form-control" name="No Tel"  placeholder="No Telefon"></div>
                                    
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">Pemilik asal:</div>
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
                                <?php echo validation_errors('<p class="error">');?>
                               <div class="row" style="margin-top: 3%;">
                                    <div class="col-md-3"></div>
                                    <center><div class="col-md-4"><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Hantar</button></div>
                                    <br>

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

                        </div>
                    </form>  
</div>