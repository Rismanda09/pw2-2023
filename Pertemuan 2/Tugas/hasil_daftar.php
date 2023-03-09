<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Rismanda Aulia Putri</td>
					<td>rismandaaurelia@gmail.com</td>
					<td>Bogor</td>
					<td>+62878555169</td>
				</tr>
				<tr>
					<td>2</td>
					<td>manda</td>
					<td>rismandaaurelia@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>

				<?php
				if (isset($_POST['submit'])) {

                 // Variabel untuk menampung data
                 $namalengkap = $_POST['namalengkap'];
                 $email = $_POST['email'];
                 $alamat = $_POST['alamat'];
                 $telepon = $_POST['telepon'];


                 // Tampilkan data dari variable
				 echo '<tr>';
				 echo '<td>' . "3" . '</td>';
		         echo '<th/>' . $namalengkap;
		         echo '<th/>' . $email;
		         echo '<th/>' . $alamat;
		         echo '<th/>' . $telepon;
				 echo '</tr>';
				}
				?>

			</tbody>
		</table>
	</div>
</body>
</html>