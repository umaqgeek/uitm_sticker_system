<html>
<head>
<style>
body{

  background-color:blue;
}
div.two{
  background-color:white;
  border-style:solid;
  width:1000px;
}
form.three{
 background-color:white;
 border-style:solid;
 width:1000px; 
}
</style>
</head>
<body>
  <center>
  <div class="two">
    <div class="col-md-12 col-md-offset-2"><h2>Sign Up Form</h2></div>
  </div><br>
  <form method="post" class="three" action="<?=site_url('site/terimaForm');?>">
    <div class="row" style="margin-top:3%;">
    <div class="col-md-12 col-md-offset-2">
      <div class="row">
                                    <div class="col-md-2">Status:
                                    <select name="status" id="select1" class="form-control" >
                                         <option value="">Sila Pilih</option>
                                         <option value="KT">Pelajar </option>
                                         <option value="MTH">Staff</option>
                                         <option value="MT">Kontraktor </option>
                                      </select>
                                    </div><br>
                          <div class="row">
                              <div class="col-md-2">
                                    IC Number: </div>
                              <div class="col-md-2"> <input type="text" class="form-control" name="ic" placeholder="IC Number"/></div>
                          </div>
                          <div class="row"><br>
                              <div class="col-md-2">
                                    Name:
                              </div>
                              <div class="col-md-2"> <input type="text" class="form-control" name="user" placeholder="name"/></div>
                          </div>
                          <div class="row"><br>
                              <div class="col-md-2">
                                    Username:
                              </div>
                              <div class="col-md-8"> <input type="text" class="form-control" name="user" placeholder="Username"/></div>
                          </div>
                          <div class="row"><br>
                                <div class="col-md-2">Password:</div>
                                <div class="col-md-8"><input type="password" class="form-control" name="password" placeholder="password" /></div>
                        </div>
                          <div class="row"><br>
                              <div class="col-md-2">
                                    Telephone Number:
                              </div>
                              <div class="col-md-8"> <input type="text" class="form-control" name="phone" placeholder="Phone Number"/></div>
                          </div>
                          <div class="row"><br>
                              <div class="col-md-2">
                                    Email:
                              </div>
                              <div class="col-md-8"> <input type="text" class="form-control" name="email" placeholder="Email"/></div>
                          </div>
               
                          <div class="row" style="margin-top: 3%;">
                              <div class="col-md-3"></div>
                              <div class="col-md-5"><button type="submit" class="btn btn-primary">Sign Up</button></div>
                          </div><br>
                  </div>
              </div>
  </form>
 </div> 
</body>
</html>