<!-- <html>
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
</html> -->



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

<div class="container">
  <div class="two">
    <center><h2>Sign Up Form</h2>
  </div><br>
  <form class="three" action="<?=site_url('site/terimaForm');?>">
    <div class="row" style="margin-top:3%;">
    <div class="col-md-8 col-md-offset-2">

<div class="form-group">
    <label class="control-label col-md-2" >Status:</label>
    <div class="col-md-10">
      <select name="status" id="select1" class="form-control" >
            <option value="">Sila Pilih</option>
            <option value="PL">Pelajar </option>
            <option value="ST">Staff</option>
            <option value="KT">Kontraktor </option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-2">IC Number:</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="ic_no" placeholder="Enter IC">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-2">Name:</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="name" placeholder="Enter Name">
    </div>
  </div>
  <div class="form-group">
    <label class="label-control col-md-2">Username:</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="username" placeholder="Enter Username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-2">Password:</label>
    <div class="col-md-10"> 
      <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <label class="label-control col-md-2">Phone No:</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="phone_no" placeholder="Enter Phone No">
    </div>
  </div>
  <div class="form-group">
    <label class="label-control col-md-2">Email:</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="email" placeholder="Enter Email">
    </div>
  </div>

  <div class="form-group">
  <div class="row" style="margin-top:10%;"> 
    <div class="col-md-12 col-md-offset-4 ">
      <br><button type="submit" class="btn btn-primary">Sign Up</button>
    </div>
  </div>
</div>
</form>
</div></div></div>

</body>
</html>
