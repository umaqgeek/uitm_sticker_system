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
      </tr>     
     <?php }?>  
   </table>
 
          <div id="detail">
                         <!--Fetching All Details of Selected Student From Database And Showing In a Form-->
                    <?php if(isset($single_register)){?>

                    <?php foreach ($single_register as $row): ?><br><br><br><br>
                        <p>Edit Detail & Click Update Button</p>
                        <form method="post" action="<?php echo base_url() . "index.php/officer/update_register_id1"?>">

                            <label id="hide">Id :</label><br/> 
                            <input type="text" id="hide" name="register_id" value="<?php echo $row->register_id; ?>"><br/>      

                            <label>Pemilik :</label><br/> 
                            <input type="text" name="nama" value="<?php echo $row->nama; ?>"><br/>    

                            <label>Status :</label><br/> 
                            <input type="text" name="jenis" value="<?php echo $row->jenis; ?>"><br/>

                            <label>Permohonan :</label><br/> 
                            <select name="status" id="status" class="form-control" >
                                                <option ><?php echo $row->status; ?></option>
                                                <option value="Approve">Approve </option>
                                                <option value="Decline">Decline</option>
                                          </select>
                            

                            <label>Kenderaan :</label><br/> 
                            <input type="text" name="kenderaan" value="<?php echo $row->kenderaan; ?>"><br/>

                            <input type="submit" id="submit" name="dsubmit" value="Update">
                            <a href="http://localhost/uitm_sticker_system/index.php/officer/home"><input type="button" id="submit" value="Kembali" ></a>

                        </form>

                    <?php endforeach; }?>
                </div> 
            </div> 
        </div>
    </body>
</html>
