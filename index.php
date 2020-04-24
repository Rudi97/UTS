<?php

require 'function.php';

$odp = query("SELECT * FROM pasien");

?>
<html>
<head>
<title>Halaman Admin</title>
</head>
<body>

<a href="tambah.php">Tambah data Pasien</a>
<br></br>
<form action="" method="post">
<center>>
<table border="1" cellpadding="10" cellspacing="0">
<br><br>
		<tr>
			<th width="200px">No</th>
			<th width="200px">Positif</th>
			<th width="200px">Dirawat</th>
			<th width="200px">Sembuh</th>
			<th width="200px">Meninggal</th>
		</tr>
		<tr>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		<td align="center"></td>
		</tr>

		<?php $i = 1; ?>
		
		<?php foreach( $odp as $row ) : ?>
		
<h1 >Data Pemantauan Covid 19 Wilayah <?= $row["wil"];?> </h1>
<h2>Per <?php echo date("d M Y / h:i:s");?></h2>
<h3><?= $row["operator"];?> <?= $row["nim"];?> </h3>
	
		<tr>
		<td><?= $i; ?></td>
		
			<td><?= $row["Positif"]; ?></td>
			<td><?= $row["Dirawat"]; ?></td>
			<td><?= $row["Sembuh"]; ?></td>
			<td><?= $row["Meninggal"]; ?></td>
			
		</tr>
<?php $i++; ?>
<?php endforeach; ?>
		</table>
		</center>
		</form>
		</body>
    </html>