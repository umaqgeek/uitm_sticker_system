<!DOCTYPE html>
<html>
<head>
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
<div class="col-md-12 col-md-offset-1">
    <br><br><br>
    <div class="two"><h2><center>Sticker Registration</h2></div><br>
    <form method="post" class="three" action="<?php echo base_url('login/signup'); ?>">
        <div class="row" style="margin-top: 5%;">
            <div class="col-md-6 col-md-offset-4">
                <center><div class="row">
                                <div class="col-md-2">Username:</div>
                                <div class="col-md-8"><input type="text" class="form-control" name="username" placeholder="username" /></div>
                        </div><span class="text-danger"><?php echo form_error('username'); ?></span><br>
                        <div class="row">
                                <div class="col-md-2">Password:</div>
                                <div class="col-md-8"><input type="password" class="form-control" name="password" placeholder="password" /></div>
                        </div>
                        <div class="row" style="margin-top: 3%;">
                                <div class="col-md-4"></div>
                                <div class="col-md-2"><button type="submit" class="btn btn-primary">Login</button></div>
                                <div class="col"></div>
                                <div class="col-md-2"><button type="submit" class="btn btn-primary" <?php echo anchor('login/signup', 'Sign Up');?></button></div>
                        </div><br>
            </div>
        </div>
    </form>
</div>
</body>
</html>

<!-- // <?php 

// class V_login extends CI_Model
// {
//   public function __construct()
//   {
//     parent::__construct();
//   }
  
  
//   public function guess($username, $password)
//   {
//     $this->db->select('*');
//     $this->db->from('users');
//     $this->db->where('username', $username);
//     $this->db->where('password', $password);

//     $query = $this->db->get();
    
//     return $query->num_rows();
//   }
  
  
//   public function pengguna($username)
//   {
//    $this->db->select('username');
//    $this->db->select('full_name');
//    $this->db->where('username', $username);
//    $query = $this->db->get('users');
   
//    return $query->row();
//   }
  
// }  

// ?> -->