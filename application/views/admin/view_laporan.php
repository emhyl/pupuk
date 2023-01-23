<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<style type="text/css">
		html, body{
			height: 100%;
		}
		body{
			padding:10px;
			border: 1px solid #333;
		}
		h1{
			text-align: center;

		}
		th{
			background-color: lightblue;
			color: #000;
		}
		#box-tbl{
			margin-top: 40px: 
		}
	</style>
</head>
<body>
	<h1>Laporan Rekapitulasi</h1>

	<hr>
	<div id="box-tbl">
		<table border="1" cellpadding="10" cellspacing="0" style="margin: auto;">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Nomor Telepon</th>
				<th>Pupuk</th>
				<th>Jumlah</th>
				<th>Total</th>
				<th>Tanggal</th>
			</tr>
			<?php foreach($laporan as $no => $row){ ?>
				<tr>
					<td><?= ++$no ?></td>
					<td><?= $row['nama'] ?></td>
					<td><?= $row['alamat'] ?></td>
					<td><?= $row['no_hp'] ?></td>
					<td><?= $row['nama_produk'] ?></td>
					<td><?= $row['unit'] ?></td>
					<td><?= $row['total'] ?></td>
					<td><?= $row['tgl'] ?></td>
				</tr>
			<?php } ?>
		
		</table>
		
	</div>
</body>
</html>