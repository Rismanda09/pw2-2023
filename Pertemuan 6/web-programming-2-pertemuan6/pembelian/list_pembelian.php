<?php 
    require_once '../dbkoneksi.php';
?>

<?php 
    $sql = "SELECT * FROM pembelian";
    // execute the query
    $rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="form_pembelian.php" role="button">Create Kartu</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tanggal</th>
            <th>Nomor</th>
            <th>Produk - Id</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Vendor - Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $id = 1;
            foreach($rs as $row) {
        ?>
        <tr>
            <td><?=$id?></td>
            <td><?=$row['tanggal']?></td>
            <td><?=$row['nomor']?></td>
            <td><?=$row['produk_id']?></td>
            <td><?=$row['jumlah']?></td>
            <td><?=$row['harga']?></td>
            <td><?=$row['vendor_id']?></td>
            <td>
                <!-- buttons to view, edit, and delete a product -->
                <a class="btn btn-primary" href="view_pembelian.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="update_pembelian.php?id=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_pembelian.php?id=<?=$row['id']?>"
                onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nomor']?>?')) {return false}"
                >Delete</a>
            </td>
        </tr>
        <?php 
            $id++;   
            } 
        ?>
    </tbody>
</table>
