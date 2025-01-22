<h5 class="text-center mb-4">Halaman Data Siswa</h5>
<a href="?url=tambah-siswa" class="btn btn-primary mb-3">Tambah Siswa</a>
<hr>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead class="table-dark">
            <tr class="fw-bold">
                <th>NO</th>
                <th>NISN</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>SPP</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include '../koneksi.php';
            $no = 1; 
            $sql = "SELECT * FROM siswa, spp, kelas WHERE siswa.id_kelas = kelas.id_kelas AND siswa.id_spp = spp.id_spp ORDER BY nama ASC";
            $query = mysqli_query($koneksi, $sql);
            foreach ($query as $data) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['nisn'] ?></td>
                    <td><?= $data['nis'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['nama_kelas'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['no_telp'] ?></td>
                    <td><?= $data['tahun'] ?> || Rp. <?= number_format($data['nominal'], 2, ',', '.'); ?></td>
                    <td>
                        <a href="?url=edit-siswa&nisn=<?= $data['nisn'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    <td>
                        <a onclick="return confirm('Apakah Anda yakin ingin menghapus data?')" href="?url=hapus-siswa&nisn=<?= $data['nisn'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

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
