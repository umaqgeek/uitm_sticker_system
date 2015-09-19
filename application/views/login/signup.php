<html >
<head>
   
<style>
        form.three {
    background-color:white;
    border-style: solid;
    width:1000px;
    border-radius: 0px;
  }

        div.two {
    background-color:white;
    border-style: solid;
    width:1000px;
    border-radius: 0px;
  }
        body{
        background-color:#e0ffff;
  }
</style>
</head>
<body >

<div class="jumbotron"><div class="two"><h2><center>Sign Up Form</h2></div><br>
<form method"post" class="three" action="<?=site_url('site/terimaForm');?>">
<div class="row" style="margin-top:3%;">
    <div class="col-md-4 col-md-offset-4">

 <!--  <h2>  <br> <br><center>Sign Up Form</h2>
  <div class="jumbotron">
<form method"post" action="<?=site_url('login/signup');?>">
<div class="row" style="margin-top:10%;">
    <div class="col-md-4 col-md-offset-3"> -->


      <center> 
                <div class="row">
                    <div class="col-sm-2">
                      IC Number: 
                     </div>
                  <div class="col-sm-10">  <input type="text" class="form-control" name="ic_no" placeholder="IC Number"/></div>
                   </div></p>
                <div class="row"><br>
                    <div class="col-sm-2">
                      Name:
                    </div>
                   <div class="col-sm-10"> <input type="text" class="form-control" name="name" placeholder="name"/></div>
                </div>
                <div class="row"><br>
                    <div class="col-sm-2">
                      Username:
                    </div>
                   <div class="col-sm-10"> <input type="text" class="form-control" name="username" placeholder="Username"/></div>
                </div>
               <div class="row"><br>
                   <div class="col-sm-2">
                    Password:
                  </div>
                  <div class="col-sm-10"> <input type="password" class="form-control" name="password" placeholder="Password" /></div>
               </div>
              <div class="row"><br>
                  <div class="col-sm-2">
                    Telephone Number:
                  </div>
                 <div class="col-sm-10"> <input type="text" class="form-control" name="phone_no" placeholder="Phone Number"/></div>
              </div>
              <div class="row"><br>
                  <div class="col-sm-2">
                    Email:
                  </div>
                 <div class="col-sm-10"> <input type="text" class="form-control" name="email" placeholder="Email"/></div>
              </div>

              <div class="row" style="margin-top: 3%;">
                 <div class="col-md-3"></div>
                 <div class="col-md-2"><button type="submit" class="btn btn-primary">Sign Up</button></div>
             </div><br>
      </div>
  </div>
</form>
</div>


                   

<!--   <br><br><br>
  <div class="col-md-12 col-md-offset-1">
  <div class="two"><h2><center>Sign Up Form</h2></div><br>
      <form method"post" class="three" action="<?=site_url('login/signup');?>">
          <div class="row" style="margin-top:3%;">
                <div class="col-md-6 col-md-offset-3">

                      <center>
                          <div class="row">
                                    <div class="col-md-2">Status:</div>
                                    <div class="col-md-8">
                                    <select name="status" id="select1" class="form-control" >
                                         <option value="">Sila Pilih</option>
                                         <option value="KT">Pelajar </option>
                                         <option value="MTH">Staff</option>
                                         <option value="MT">Kontraktor </option>
                                      </select></div>
                          </div><br>
                          <div class="row">
                              <div class="col-md-2">
                                    IC Number: 
                              </div>
                              <div class="col-md-8">  <input type="text" class="form-control" name="ic" placeholder="IC Number"/></div>
                          </div>
                          <div class="row"><br>
                              <div class="col-md-2">
                                    Name:
                              </div>
                              <div class="col-md-8"> <input type="text" class="form-control" name="user" placeholder="name"/></div>
                          </div>
                          <div class="row"><br>
                              <div class="col-md-2">
                                    Username:
                              </div>
                              <div class="col-md-8"> <input type="text" class="form-control" name="user" placeholder="Username"/></div>
                          </div>
                          <div class="row"><br>
                              <div class="col-md-2">
                                    Password:
                              </div>
                              <div class="col-md-8"> <input type="password" class="form-control" name="password" placeholder="Password" /></div>
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
    </div>                  -->

</body>
</html>



