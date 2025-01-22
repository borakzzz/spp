<?php
$id_spp = $_GET['id_spp'];
include '../koneksi.php';
$sql= "SELECT*FROM spp WHERE id_spp='$id_spp'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?> 

<h5>Halaman edit data spp</h5>
<a href="?url=spp" class="btn btn-primary">kembali</a>
<hr>
<form method="post" action="?url=proses-edit-spp&id_spp=<?= $id_spp;?>">
    <div class="form-group mb-2">
        <label>tahun</label>
        <input value="<?= $data['tahun']?>" type="number" name="tahun" maxlegth="4" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Nominal</label>
        <input value="<?= $data['nominal']?>" type="number" name="nominal" maxlegth="13" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">UBAH</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>
    </div>
</form>
</hr>