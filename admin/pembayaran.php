<h5>Halaman Data pembayaran</h5>

<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>NO</td>
        <td>NISN</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>SPP</td>
        <td>Nominal</td>
        <td>Sudah Dibayar</td>
        <td>Kekurangan</td>
        <td>Status</td>
        <td>Histori</td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql= "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER BY nama ASC";
    $query = mysqli_query($koneksi,$sql);
    foreach($query as $data){
        $data_pembayaran = mysqli_query($koneksi,"SELECT SUM(jumlah_bayar) as jumlah_bayar FROM pembayaran WHERE nisn ='$data[nisn]'");
        $data_pembayaran = mysqli_fetch_array($data_pembayaran);
        $sudah_bayar = $data_pembayaran['jumlah_bayar'];
        $kekurangan = $data['nominal']-$data_pembayaran['jumlah_bayar'];
        ?>

        <tr>
            <td><?=$no++; ?></td>
            <td><?=$data['nisn']?></td>
            <td><?=$data['nama']?></td>
            <td><?=$data['nama_kelas']?></td>
            <td><?=$data['tahun']?></td>
            <td><?= number_format($data['nominal'],2,',','.');?></td>
            <td><?= number_format($sudah_bayar,2,',','.');?></td>
            <td><?= number_format($kekurangan,2,',','.');?></td>
            <td>

            <?php
            if($kekurangan==0){
                echo"<span class='badge text-bg-success'> sudah lunas </span>";

            }else{ ?>
            <a href="?url=tambah-pembayaran&nisn=<?= $data['nisn'] ?>&kekurangan=<?= $kekurangan ?>"class="btn btn-danger"> pilih & bayar </a>
        <?php } ?>

        <td><a href=" ?url=history-pembayaran&nisn=<?= $data['nisn'] ?>" class='btn btn-info'> Histori </a>
        </td>
        </tr>
        <?php } ?>
</table>


<!-- Styling for the table -->
<style>
    /* Center align the heading */
    h5 {
        text-align: center;
    }

    /* Enhance table styling */
    .table {
        font-size: 14px;
        margin-top: 20px;
    }

    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }

    .table thead {
        background-color: #007bff;
        color: white;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }

    /* Buttons styling */
    .btn-sm {
        padding: 5px 10px;
        font-size: 12px;
    }

    .table-responsive {
        overflow-x: auto;
    }

    /* Space for the add button */
    .mb-3 {
        margin-bottom: 1rem !important;
    }
</style>