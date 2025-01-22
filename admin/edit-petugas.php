<?php
$id_petugas = $_GET['id_petugas'];
include '../koneksi.php';
$sql= "SELECT*FROM petugas WHERE id_petugas='$id_petugas'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?> 

<h5>Halaman edit data petugas</h5>
<a href="?url=petugas" class="btn btn-primary">kembali</a>
<hr>
<form method="post" action="?url=proses-edit-petugas&id_petugas=<?= $id_petugas;?>">
    <div class="form-group mb-2">
        <label>Username</label>
        <input value="<?= $data['username']?>" type="text" name="username" maxlegth="13" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Password</label>
        <input value="<?= $data['password']?>" type="password" name="password" maxlegth="13" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Nama Petugas</label>
        <input value="<?= $data['nama_petugas']?>" type="text" name="nama_petugas" maxlegth="13" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Level</label>
       <select name="level" class="form-control" required>
        <option value="<?= $data['level'] ?>">--Pilih Level--</option>
        <option value="1">Admin</option>
        <option value="2">Petugas</option>
       </select>
</div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">UBAH</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>
    </div>
</form>
</hr>