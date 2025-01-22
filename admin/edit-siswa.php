<?php
$nisn = $_GET['nisn'];
include '../koneksi.php';
$sql= "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?> 

<div class="container mt-5">
    <h5>Halaman Edit Data Siswa</h5>
    <a href="?url=siswa" class="btn btn-primary mb-3">Kembali</a>
    <hr>

    <form method="post" action="?url=proses-edit-siswa&nisn=<?= $nisn;?>">
        <div class="form-group mb-3">
            <label for="nisn">NISN</label>
            <input value="<?= $data['nisn']?>" type="text" name="nisn" maxlength="4" class="form-control" readonly>
        </div>
        
        <div class="form-group mb-3">
            <label for="nis">NIS</label>
            <input value="<?= $data['nis']?>" type="number" name="nis" maxlength="13" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="nama">Nama</label>
            <input value="<?= $data['nama']?>" type="text" name="nama" maxlength="50" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="id_kelas">Kelas</label>
            <select name="id_kelas" class="form-control" required>
                <option value="<?= $data['id_kelas']?>"><?= $data['nama_kelas']?></option>
                <?php
                $kelas = mysqli_query($koneksi,"SELECT*FROM kelas ORDER BY nama_kelas ASC");
                foreach($kelas as $data_kelas){
                ?>
                    <option value="<?= $data_kelas['id_kelas'] ?>"> <?= $data_kelas['nama_kelas']; ?> </option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="alamat">Alamat</label>
            <input value="<?= $data['alamat']?>" type="text" name="alamat" maxlength="100" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="no_telp">No Telepon</label>
            <input value="<?= $data['no_telp']?>" type="number" name="no_telp" maxlength="13" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="id_spp">SPP</label>
            <select name="id_spp" class="form-control" required>
                <option value="<?= $data['id_spp']?>"><?= $data['tahun']; ?> | Rp. <?= number_format($data['nominal'], 2, ',', '.'); ?></option>
                <?php
                $spp = mysqli_query($koneksi,"SELECT*FROM spp ORDER BY id_spp ASC");
                foreach($spp as $data_spp){
                ?>
                    <option value="<?= $data_spp['id_spp'] ?>"> 
                        <?= $data_spp['tahun']; ?> | Rp. <?= number_format($data_spp['nominal'], 2, ',', '.'); ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group mb-3">
            <button type="submit" class="btn btn-success">UBAH</button>
            <button type="reset" class="btn btn-warning">KOSONGKAN</button>
        </div>
    </form>
</div>
