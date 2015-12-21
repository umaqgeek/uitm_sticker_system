<div style="margin-top:5%;">
<!DOCTYPE html>
<html lang="en">
  <head>
            <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "css/update.css" ?>">

  </head>
       <style>
    body{
  background-color:#e0ffff;
}
    </style>

  <body>
   
 
    <h4>Display Records From Database Using Codeigniter</h4>
    <table border="1" style="width:100%">
     <tr>
      <td><strong>Register Id</strong></td>
      <td><strong>Plat</strong></td>
      <td><strong>Kenderaan</strong></td>
      <td><strong>Model</strong></td>
      <td><strong>Nama</strong></td>
      <td><strong>Ic</strong></td>
      <td><strong>No Telefon</strong></td>
      <td><strong>Hubungan</strong></td>
      <td><strong>Lesen</strong></td>
      <td><strong>Kelas</strong></td>
      <td><strong>Cukai</strong></td>
      <td><strong>Waris</strong></td>
      <td><strong>Status</strong></td>
       <td><strong>Result</strong></td>
    </tr> 
     <?php foreach($posts as $post){?>
     <tr>
         <td><?php echo $post->register_id;?></td>
         <td><?php echo $post->plat;?></td>
         <td><?php echo $post->kenderaan;?></td>
         <td><?php echo $post->model;?></td>
         <td><?php echo anchor("officer/show_register_id/", $post->nama);?></td>
         <td><?php echo $post->ic;?></td>
         <td><?php echo $post->phone;?></td>
         <td><?php echo $post->hubungan;?></td>
         <td><?php echo $post->lesen;?></td>
         <td><?php echo $post->kelas;?></td>
         <td><?php echo $post->cukai;?></td>
         <td><?php echo $post->waris;?></td>
         <td><?php echo $post->status;?></td>
          <td><input type="submit" name="update" value="Update" /></td>
      </tr>     
     <?php }?>  
   </table>
 
    </body>
</html>
