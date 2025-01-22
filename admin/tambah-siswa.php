<h5 class="text-center mb-4">Halaman Data Siswa</h5>
<a href="?url=siswa" class="btn btn-primary mb-3">KEMBALI</a>
<hr>
<form method="post" action="?url=proses-tambah-siswa">
    <div class="form-group mb-3">
        <label for="nisn">NISN</label>
        <input type="number" name="nisn" class="form-control" id="nisn" required>
    </div>
    <div class="form-group mb-3">
        <label for="nis">NIS</label>
        <input type="number" name="nis" class="form-control" id="nis" required>
    </div>
    <div class="form-group mb-3">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" required>
    </div>
    <div class="form-group mb-3">
        <label for="id_kelas">Kelas</label>
        <select name="id_kelas" class="form-control" id="id_kelas" required>
            <option value="">Pilih Kelas</option>
            <?php
            include '../koneksi.php';
            $kelas = mysqli_query($koneksi,"SELECT*FROM kelas ORDER BY nama_kelas ASC");
            foreach($kelas as $data_kelas){
                ?>
                <option value="<?= $data_kelas['id_kelas'] ?>"> <?= $data_kelas['nama_kelas']; ?> </option>
                <?php } ?>
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" class="form-control" id="alamat" required></textarea>
    </div>
    <div class="form-group mb-3">
        <label for="no_telp">No Telepon</label>
        <input type="number" name="no_telp" class="form-control" id="no_telp" required>
    </div>
    <div class="form-group mb-3">
        <label for="id_spp">Spp</label>
        <select name="id_spp" class="form-control" id="id_spp" required>
            <option value="">Pilih SPP</option>
            <?php
            include '../koneksi.php';
            $spp = mysqli_query($koneksi,"SELECT*FROM spp ORDER BY id_spp ASC");
            foreach($spp as $data_spp){
                ?>
                <option value="<?= $data_spp['id_spp'] ?>"> 
                    <?= $data_spp['tahun']; ?> | <?= number_format($data_spp['nominal'], 2, ',', '.'); ?>
                </option>
                <?php } ?>
        </select>
    </div>
    <div class="form-group mb-3">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>
</form>

<!-- Styling for the form -->
<style>
    /* Center the title */
    h5 {
        text-align: center;
    }

    /* Margin for the form buttons */
    .mb-3 {
        margin-bottom: 1rem;
    }

    /* Style the form inputs */
    .form-control {
        font-size: 14px;
        padding: 0.75rem 1.25rem;
    }

    /* Button styling */
    .btn {
        font-size: 14px;
        padding: 8px 16px;
        border-radius: 5px;
    }

    /* Style the select input */
    select.form-control {
        font-size: 14px;
        padding: 0.75rem 1.25rem;
    }
</style>
