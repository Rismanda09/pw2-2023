<?php 
require_once '../dbkoneksi.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data produk dengan id tertentu
    $sql = "SELECT * FROM vendor WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?>

<!-- Menampilkan data produk dalam bentuk tabel -->
<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td><?=$row['nomor']?></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td><?=$row['nama']?></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td><?=$row['kota']?></td>
        </tr>
        <tr>
            <td>Kontak</td>
            <td><?=$row['kontak']?></td>
        </tr>
        <tr>
            <td>Kartu</td>
            <td><?=$row['kartu_id']?></td>
        </tr>

    </tbody>
</table>
