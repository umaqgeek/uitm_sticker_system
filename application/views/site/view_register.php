
<html>
<head>
<title>Codeigniter Form Submit Using Post and Get Method</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
</head>
<body>

<?php

 if(isset($jenis) && isset($plat)&& isset($kenderaan)&& isset($model)&& isset($nama)&& isset($ic)&& isset($phone)&& isset($hubungan)&& isset($lesen)&& isset($kelas)&& isset($cukai)&& isset($waris)&& isset($status))
{
echo "<center>";

echo "<div id='content_result'>";
echo "<h3 id='result_id'>You have submitted these values</h3><br/><hr>";
echo "<div id='result_show'>";
echo "<label class='label_output'>Entered ID : </label>".$jenis ;
echo "<br><label class='label_output'>Entered Plat: </label>".$plat;
echo "<br><label class='label_output'>Entered Kenderaan: </label>".$kenderaan;
echo "<br><label class='label_output'>Entered Model: </label>".$model;
echo "<br><label class='label_output'>Entered Nama: </label>".$nama;
echo "<br><label class='label_output'>Entered IC: </label>".$ic;
echo "<br><label class='label_output'>Entered Phone: </label>".$phone;
echo "<br><label class='label_output'>Entered Hubungan: </label>".$hubungan;
echo "<br><label class='label_output'>Entered Lesen: </label>".$lesen;
echo "<br><label class='label_output'>Entered Kelas: </label>".$kelas;
echo "<br><label class='label_output'>Entered Cukai: </label>".$cukai;
echo "<br><label class='label_output'>Entered Waris: </label>".$waris;
echo "<br><label class='label_output'>Entered Status: </label>".$status;
echo "<div>";
echo "</div>";
} ?>
</body>
</html>
