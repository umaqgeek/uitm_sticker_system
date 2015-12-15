<div id="#papar">
<?php
$query = "SELECT * FROM background ORDER BY back_id DESC";

$d = mysqli_fetch_array($query);
?>
<table border="1" cellpadding="5" cellspacing="0">
<?php
do {
?>
	<tr>
    	<td><pre><?php print_r($d); ?></pre>
        Title: <?php $d['title']; ?><br />
        Input: <?php $d['background']; ?><br />
    </tr>
<?php
} while($d = mysqli_fetch_array($query));
?>
</table>
</div>