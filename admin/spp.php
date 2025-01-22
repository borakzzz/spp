<h5 class="text-center mb-4">Halaman Data SPP</h5>
<a href="?url=tambah-spp" class="btn btn-primary mb-3">Tambah SPP</a>
<hr>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead class="table-dark">
            <tr class="fw-bold">
                <th>NO</th>
                <th>Tahun</th>
                <th>Nominal</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include '../koneksi.php';
            $no = 1; 
            $sql = "SELECT * FROM spp ORDER BY id_spp DESC";
            $query = mysqli_query($koneksi, $sql);
            foreach ($query as $data) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['tahun'] ?></td>
                    <td><?= number_format($data['nominal'], 2, ',', '.') ?></td>
                    <td>
                        <a href="?url=edit-spp&id_spp=<?= $data['id_spp'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    <td>
                        <a onclick="return confirm('Apakah Anda yakin ingin menghapus data?')" href="?url=hapus-spp&id_spp=<?= $data['id_spp'] ?>" class="btn btn-danger btn-sm">Hapus</a>
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
