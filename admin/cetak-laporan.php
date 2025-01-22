<?php
header("content-type: application/vnd-ms-excel");
header("content-Disposition: attachment; filename=Laporan-pembayaran-SPP.xls");
?>
<h5>Laporan Pembayaran SPP</h5>
<a href="cetak-laporan.php" class="btn btn-primary">cetak laporan</a>
<hr>
<table class="table table-striped table-bordered">
    <thead>
    <tr class="fw-bold text-center">
        <td>NO</td>
        <td>NISN</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>SPP</td>
        <td>Nominal</td>
        <td>Sudah Dibayar</td>
        <td>Tanggal bayar</td>
        <td>petugas</td>
    </tr>
    </thead>
    <tbody>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql= "SELECT*FROM pembayaran,siswa,kelas,spp,petugas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_kelas=kelas.id_kelas AND
     pembayaran.id_spp=spp.id_spp AND pembayaran.id_petugas=petugas.id_petugas ORDER BY tgl_bayar DESC";
    $query = mysqli_query($koneksi,$sql);
    foreach($query as $data){
      
      ?>
        <tr class="text-center">
            <td><?=$no++; ?></td>
            <td><?=$data['nisn']?></td>
            <td><?=$data['nama']?></td>
            <td><?=$data['nama_kelas']?></td>
            <td><?=$data['tahun']?></td>
            <td><?= number_format($data['nominal'],2,',','.');?></td>
            <td><?= number_format($data['jumlah_bayar'],2,',','.');?></td>
            <td><?= $data['tgl_bayar'];?></td>
            <td><?= $data['nama_petugas'];?></td>
            <td>

        </tr>
        <?php } ?>
</table>