
<html >
<head>
   <h1>  <br> <br><center>Sign Up Form</h1>

</head>



    <form method="post" action="<?=site_url('site/antaForm'); ?>">
            <div class="row">
                <div class="col-md-2">
                    IC Number :
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="ic_no" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Name      :
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="name" />
                </div>
           <div class="row">
                <div class="col-md-2">
                    Username   :
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="username" />
                </div>
            <div class="row">
                <div class="col-md-2">
                    Password    :
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="password" />
                </div>
             <div class="row">
                <div class="col-md-2">
                    Telephone No :
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="phone_no" />
                </div>
             <div class="row">
                <div class="col-md-2">
                    Email        :
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="email" />
                </div>
                <button class="btn btn-success" type="submit">Sign Up</button>
            </div>
        </form>
        
    </div>
</div> 
</html>
