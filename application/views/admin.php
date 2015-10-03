<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="utf-8" />
</head>
<body>
	<table>
		<thead>
			<th>User Id</th>
				<th>Name</th>
		</thead>

		<tbody>
			<?php foreach ($admin as $ad); ?>
			<tr> 
				<td><?php echo $ad->register_id; ?></td>
				<td><?php echo $ad->Fullname; ?></td>
			</tr>
		    <?php endforeach; ?>
	    </tbody>
    </table>



</body>
</html>