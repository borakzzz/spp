<h5>Halaman data petugas</h5>
<a href="?url=petugas" class="btn btn-primary">KEMBALI</a>
<hr>
<form method="post" action="?url=proses-tambah-petugas">
    <div class="form-group mb-2">
        <label>Username</label>
        <input type="text" name="username" maxlegth="4" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Password</label>
        <input type="text" name="password" maxlegth="4" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Nama Petugas</label>
        <input type="text" name="nama_petugas" maxlegth="4" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Level</label>
       <select name="level" class="form-control" required>
        <option value="">--Pilih Level--</option>
        <option value="1">Admin</option>
        <option value="2">Petugas</option>
       </select>
    </div>
    <div class="form-group mb-2">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>
    </div>
</form>