<html>
<link href="../../assets/css/style.css" rel="stylesheet" type="text/css">
  </style>
 </head>
 <title> Tuffah Informatics </title>
 <body>
 <form action="<?php echo base_url();?>index.php/signin/register" method="post" name="login">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
 
<div id="login" style="margin:0 auto;">
    <header>
           <h2><img src="../../assets/img/car1.png" width="182" height="181" alt=""/></h2>
         </header>
         <h2>UiTM Sticker System</h2>
         <hr/>
         <label>Username :</label>
         <input type="text" name="username" id="name" placeholder="Username"/><br /><br />
         <label>Password :</label>
         <input type="password" name="password" id="password" placeholder="**********"/><br/><br />
          <tr>
        <td>UserType</td>
        <td>:</td>
        <td><select name="userType" class="input">
        <option value="1">Admin</option>
        <option value="2">User</option>

        </select></td>
       </tr><br/><br/>
       <input type="submit" value=" Login " name="submit"/>
     </div>
   </form>
   <div>
       Does not have an account yet? Please do register here <?php echo anchor('signin/registration', 'signup &raquo;');?>
 </div>

 </body>
 </html>