
<html>
    <head>
        <title>Update Data In Database Using CodeIgniter</title>
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "css/update.css" ?>">
    </head>
    <style>
    body{
  background-color:#e0ffff;
}
    </style>
    <body >
        <div id="container">
            <div id="wrapper">
                <h1>Update Data In Database Registration </h1><hr/> 
                <div id="menu">
                    <p>Click On Menu</p>
                    <!--Fetching Names Of All Students From Database-->
                         <ol><?php if (isset($register)){?>
                        <?php foreach ($register as $row): ?>
                            <li><a href="<?php echo base_url() . "index.php/officer/show_register_id/" . $row->register_id; ?>"><?php echo $row->nama; ?>  <?php echo $row->plat; ?></a></li>
                        <?php endforeach; }?>
                    </ol>
                </div>
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
