
<html>
<head>
<title>Codeigniter Form Submit Using Post and Get Method</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
</head>
<body>

<?php

 if(isset($status) && isset($nama)&& isset($email)&& isset($komen))
{
echo "<center>";

echo "<div id='content_result'>";
echo "<h3 id='result_id'>You have submitted these informations</h3><br/><hr>";
echo "<div id='result_show'>";
echo "<label class='label_output'>Entered ID : </label>".$status ;
echo "<br><label class='label_output'>Entered Nama: </label>".$nama;
echo "<br><label class='label_output'>Entered Email: </label>".$email;
echo "<br><label class='label_output'>Entered Komen: </label>".$komen;
echo "<div>";
echo "</div>";
} ?>
</body>
</html>



