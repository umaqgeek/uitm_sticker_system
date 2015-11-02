<div id="content">
<div class="reg_form">
<div class="form_title">Sign Up</div>
 <title> Tuffah Informatics </title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/stylo.css" />
 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("singin/registration"); ?>
      


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
            </div>
           <div class="row">
                <div class="col-md-2">
                    Username   :
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="username" />
                </div>
              </div>
            <div class="row">
                <div class="col-md-2">
                    Password    :
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="password" />
                </div>
              </div>
             <div class="row">
                <div class="col-md-2">
                    Telephone No :
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="phone_no" />
                </div>
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
  <?php echo anchor('signin/loginForm', 'login &raquo;');?>

</div><!--<div class="reg_form">-->
</div><!--<div id="content">-->