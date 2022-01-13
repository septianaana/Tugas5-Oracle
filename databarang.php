<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan Oracle</title>
</head>
<body>
	<center>
		<h2>CRUD DATA BARANG </h2>
		<center><table border="1">
			<tr>
				<th>ID_BARANG</th>
				<th>NAMA_BARANG</th>
				<th>JUMLAH_BARANG</th>
				<th>HARGA_BARANG</th>
				<th>OPSI</th>
			</tr>
			<?php
			include 'koneksi.php';
			$stid = oci_parse($koneksi, 'select * from barang_0217');
			oci_execute($stid);
			while (($d = oci_fetch_array($stid, OCI_BOTH))  != false) {
				?>
				<tr>
					<td><?php echo $d ['ID_BARANG']; ?></td>
					<td><?php echo $d ['NAMA_BARANG']; ?></td>
					<td><?php echo $d ['JUMLAH_BARANG']; ?></td>
					<td><?php echo $d ['HARGA_BARANG']; ?></td>
					<td>
						Edit | Delete
					</td>
				</tr>
				<?php


	}
	?>
</table>
	</center>

</body>
</html>