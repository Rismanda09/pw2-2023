<?php 
require_once '../dbkoneksi.php';
?>

<form method="POST" action="proses_pembelian.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control"
        value="<?php if(isset($row['kode'])) echo $row['kode']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="tanggal" name="tanggal" type="text" class="form-control" 
        value="<?php if(isset($row['tanggal'])) echo $row['tanggal']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nomor" class="col-4 col-form-label">Nomor</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="nomor" name="nomor" type="text" class="form-control"
        value="<?php if(isset($row['nomor'])) echo $row['nomor']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="produk_id" class="col-4 col-form-label">Produk Id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="produk_id" name="produk_id" type="text" class="form-control"
        value="<?php if(isset($row['produk_id'])) echo $row['produk_id']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="jumlah" name="jumlah" type="text" class="form-control"
        value="<?php if(isset($row['jumlah'])) echo $row['jumlah']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="harga" name="harga" type="text" class="form-control"
        value="<?php if(isset($row['harga'])) echo $row['harga']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="vendor_id" class="col-4 col-form-label">Vendor Id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="vendor_id" name="vendor_id" type="text" class="form-control"
        value="<?php if(isset($row['vendor_id'])) echo $row['vendor_id']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
    <?php
        $button = (empty($_id)) ? "Simpan":"Update"; 
    ?>
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="<?=$button?>"/>
      <input type="hidden" name="id" value="<?=$_id?>"/>
    </div>
  </div>
</form>