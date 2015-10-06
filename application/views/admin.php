<!DOCTYPE HTML>
<html lang="english">
<head>
	<title>Admin</title>
	<meta charset="utf-8" />
</head>
<body>
	<div>
		Found <?php echo $num_results; ?> admin
	</div>

	<table>
		<thead>
			<th>User Id</th>
				<th>Name</th>
				<th>register_id</th>
				<th>plat</th>
				<th>kenderaan</th>
				<th>model</th>
				<th>engin</th>
				<th>chasis</th>
				<th>nama</th>
				<th>warna</th>
				<th>ic</th>
				<th>telefon</th>
				<th>hubungan</th>
				<th>lesen</th>
				<th>kelas</th>
				<th>cukai</th>
				<th>waris</th>
		</thead>

		<tbody>
			<?php foreach ($admin as $ad); ?>
			<tr> 
				<td><?php echo $ad->register_id; ?></td>
				<td><?php echo $ad->plat; ?></td>
				<td><?php echo $ad->kenderaan; ?></td>
				<td><?php echo $ad->model; ?></td>
				<td><?php echo $ad->engin; ?></td>
				<td><?php echo $ad->chasis; ?></td>
				<td><?php echo $ad->nama; ?></td>
				<td><?php echo $ad->warna; ?></td>
				<td><?php echo $ad->ic; ?></td>
				<td><?php echo $ad->telefon; ?></td>
				<td><?php echo $ad->hubungan; ?></td>
				<td><?php echo $ad->lesen; ?></td>
				<td><?php echo $ad->kelas; ?></td>
				<td><?php echo $ad->cukai; ?></td>
				<td><?php echo $ad->waris; ?></td>
				
				
			</tr>

	    </tbody>
    </table>


</body>
</html>