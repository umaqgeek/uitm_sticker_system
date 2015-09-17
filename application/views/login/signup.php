
<html >
<head>
   
<style>
body{
   
}
</style>
</head>

<body >
  <h2>  <br> <br><center>Sign Up Form</h2>
  <div class="jumbotron">
<form method"post" action="<?=site_url('login/signup');?>">
<div class="row" style="margin-top:10%;">
    <div class="col-md-4 col-md-offset-3">

      <center> 
                <div class="row"><br>
                    <div class="col-sm-2">
                      IC Number: 
                     </div>
                  <div class="col-sm-10">  <input type="text" class="form-control" name="ic" placeholder="IC Number"/></div>
                   </div>
                <div class="row"><br>
                    <div class="col-sm-2">
                      Name:
                    </div>
                   <div class="col-sm-10"> <input type="text" class="form-control" name="user" placeholder="name"/></div>
                </div>
                <div class="row"><br>
                    <div class="col-sm-2">
                      Username:
                    </div>
                   <div class="col-sm-10"> <input type="text" class="form-control" name="user" placeholder="Username"/></div>
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
                 <div class="col-sm-10"> <input type="text" class="form-control" name="phone" placeholder="Phone Number"/></div>
              </div>
              <div class="row"><br>
                  <div class="col-sm-2">
                    Email:
                  </div>
                 <div class="col-sm-10"> <input type="text" class="form-control" name="email" placeholder="Email"/></div>
              </div>

              <div class="row" style="margin-top: 1%;">
                 <div class="col-md-3"></div>
                 <div class="col-md-2"><button type="submit" class="btn btn-primary">Sign Up</button></div>
             </div>
      </div>
  </div>
</form>
</div>

                    












</body>
</html>
