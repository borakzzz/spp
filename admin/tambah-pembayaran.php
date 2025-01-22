<?php

$nisn = $_GET['nisn'];
$kekurangan = $_GET['kekurangan'];

include '../koneksi.php';
$sql= "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND nisn='$nisn'";
    $query = mysqli_query($koneksi,$sql);
    $data = mysqli_fetch_array($query);
    ?>
    <h5>Halaman pembayaran SPP</h5>
    <a href="?url=pembayaran" class="btn btn-primary">kembali</a>
    <hr>
    <form method="post" action="?url=proses-tambah-pembayaran&nisn=<?= $nisn;?>">
    <input name="id_spp" value="<?= $data['id_spp'] ?>" type="hidden" class=" form-control" requeired>
    <div class="form-group mb-2">
        <label>Nama petugas</label>
        <input disabled value="<?= $_SESSION['nama_petugas'] ?>" class=" form-control" required>
    </div> 
    <div class="form-group mb-2">
        <label>NISN</label>
        <input value="<?= $data['nisn'] ?>" name="nisn" class=" form-control" required readonly>
    </div> 
    <div class="form-group mb-2">
        <label>Nama siswa</label>
        <input value="<?= $data['nama'] ?>" class=" form-control" disabled required>
    </div> 
    <div class="form-group mb-2">
        <label>Tanggal lahir</label>
        <input type="date" name="tgl_bayar" class=" form-control" required>
    </div> 
    <div class="formr-group mb-2">
        <label>Bulan Bayar</label>
        <select name="bulan_bayar" class=" form-control" required>
            <option value="">Pilih Bulan Dibayar</option>
            <option value="januari">januari</option>
            <option value="februari">februari</option>
            <option value="maret">maret</option>
            <option value="april">april</option>
            <option value="mei">mei</option>
            <option value="juni">juni</option>
            <option value="juli">juli</option>
            <option value="Agustus">Agustus</option>
            <option value="september">september</option>
            <option value="oktober">oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
</select>
    </div>
    <div class="form-group mb-2">
        <label>Tahun bayar</label>
        <select name="tahun_bayar" class=" form-control" required>
            <option value="">pilih tahun bayar</option>
            <?php
            for($i=2010; $i<=date('Y'); $i++){
                echo"<option value='$i'>$i</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group mb-2">
        <label>Jumlah Bayar (Jumlah yang harus di bayar adalah <b>
            <?= number_format($kekurangan,2,',','.')?></b>)
        </label>
        <input type="number" name="jumlah_bayar" max="<?= $kekurangan?>" class=" form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">simpan</button>
        <button type="reset" class="btn btn-warning">kosongkan</button>
    </div>
    </div>
    </form>
    