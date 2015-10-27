<?php
if (isset($tunjuk)) {
if ($tunjuk == 'No record found !') {
echo $tunjuk;
}
else
{
	foreach ($tunjuk as $value) {
echo "<center>";

echo "<div id='content_result'>";
echo "<h3 id='result_id'>You have submitted these values</h3><br/><hr>";
echo "<div id='result_show'>";
echo "<label class='label_output'>Entered ID : </label>".$value->jenis ;
echo "<br><label class='label_output'>Entered Plat: </label>".$value->plat;
echo "<br><label class='label_output'>Entered Kenderaan: </label>".$value->kenderaan;
echo "<br><label class='label_output'>Entered Model: </label>".$value->model;
echo "<br><label class='label_output'>Entered Nama: </label>".$value->nama;
echo "<br><label class='label_output'>Entered IC: </label>".$value->ic;
echo "<br><label class='label_output'>Entered Phone: </label>".$value->phone;
echo "<br><label class='label_output'>Entered Hubungan: </label>".$value->hubungan;
echo "<br><label class='label_output'>Entered Lesen: </label>".$value->lesen;
echo "<br><label class='label_output'>Entered Kelas: </label>".$value->kelas;
echo "<br><label class='label_output'>Entered Cukai: </label>".$value->cukai;
echo "<br><label class='label_output'>Entered Waris: </label>".$value->waris;
echo "<br><label class='label_output'>Entered Status: </label>".$value->status;
echo "<div>";
echo "</div>";
}
}
}
?>