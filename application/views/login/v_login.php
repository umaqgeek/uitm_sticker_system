

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
        background-color:#e0ffff;
    }

</style>
</head>
<body>

<div class="container">
  <div style="margin-top:5%;">
  <div class="two">
    <center><h2>Stiker Registration</h2>
</div></div><br>
  <form class="three" action="">
    <div class="row" style="margin-top:3%;">
    <div class="col-md-6 col-md-offset-2">
    <div class="form-group">
      <label class="control-label col-md-2">Username:</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="username" placeholder="Enter username">
      </div>    
      <label class="control-label col-md-2" >Password:</label>
      <div class="col-md-10">          
        <input type="password" class="form-control" name="password" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-md-offset-4 col-md-6"><br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="button" class="btn btn-primary" value="Sign up" onClick="this.form.action='<?=site_url('site/signup');?>';this.form.submit()">
      
    </div>
      </div>

    

<!-- <div class="col-md-10 col-md-offset-1">
    <br><br><br>
    <div class="two"><h2><center>Sticker Registration</h2></div><br>
    <form method="post" class="three" action="<?=site_url('site/registration/add'); ?>">
        <div class="row" style="margin-top: 5%;">
            <div class="col-md-6 col-md-offset-3">
                <center><div class="row">
                                <div class="col-md-2">Username:</div>
                                <div class="col-md-8"><input type="text" class="form-control" name="u_username" placeholder="username" /></div>
                        </div><span class="text-danger"><?php echo form_error('username'); ?></span><br>
                        <div class="row">
                                <div class="col-md-2">Password:</div>
                                <div class="col-md-8"><input type="password" class="form-control" name="u_password" placeholder="password" /></div>
                        </div>
                        <div class="row" style="margin-top: 3%;">
                                <div class="col-md-4"></div>
                                <div class="col-md-2"><button type="submit" class="btn btn-primary">Login</button></div>
                                <div class="col"></div>
                                 <form method="post" class="three" action="<?=site_url('site/signup1/add'); ?>">
                                <div class="col-md-2"><button type="submit" class="btn btn-primary">Sign Up</button></div>
                            </form>
                        </div><br>

            </div>
        </div>
    </form>
 -->
</div>
</div><br>
  </form>
</div>

</body>
</html>



















<!-- // <?php 

// <<<<<<< HEAD
// <
// =======
// // class V_login extends CI_Model
// // {
// //   public function __construct()
// //   {
// //     parent::__construct();
// //   }
  
  
// //   public function guess($username, $password)
// //   {
// //     $this->db->select('*');
// //     $this->db->from('users');
// //     $this->db->where('username', $username);
// //     $this->db->where('password', $password);
// >>>>>>> eab54d0ba81ccd48303d3e29af4a63f140e46c30

// //     $query = $this->db->get();
    
// //     return $query->num_rows();
// //   }
  
  
// //   public function pengguna($username)
// //   {
// //    $this->db->select('username');
// //    $this->db->select('full_name');
// //    $this->db->where('username', $username);
// //    $query = $this->db->get('users');
   
// //    return $query->row();
// //   }
  
// // }  


