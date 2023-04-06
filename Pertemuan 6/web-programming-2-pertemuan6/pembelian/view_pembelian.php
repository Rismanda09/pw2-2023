<?php 
require_once '../dbkoneksi.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data produk dengan id tertentu
    $sql = "SELECT * FROM pembelian WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?>

<!-- Menampilkan data produk dalam bentuk tabel -->
<table class="table table-striped">
    <tbody>
        <tr>
            <td>Id</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td><?=$row['tanggal']?></td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td><?=$row['nomor']?></td>
        </tr>
        <tr>
            <td>Produk id</td>
            <td><?=$row['produk_id']?></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><?=$row['jumlah']?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><?=$row['harga']?></td>
        </tr>
        <tr>
            <td>Vendor id</td>
            <td><?=$row['vendor_id']?></td>
        </tr>
    </tbody>
</table>
