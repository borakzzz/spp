<?php
session_start();
if ($_SESSION['level']!='admin'){
    echo"<script>
    alert('maaf anda buka sesi admin');
    window.location.assign('../index2.php')
    </script>";
}
if (empty($_SESSION['id_petugas'])){
echo"<script>
alert('maaf anda login');
window.location.assign('../index2.php')
</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Aplikasi pembayaran SPP</title>
    <link  href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container mt-5">
<h3>Aplikasi Pembayaran SPP</h3>
<div class="alert alert-info">
    Anda Login Sebagai <b>Administrator</b> Aplikasi Pembayaran SPP
</div>

<a href="admin.php" class="btn btn-primary">Administrator</a>
<a href="admin.php?url=spp" class="btn btn-primary">SPP</a>
<a href="admin.php?url=kelas" class="btn btn-primary">Kelas</a>
<a href="admin.php?url=siswa" class="btn btn-primary">Siswa</a>
<a href="admin.php?url=petugas" class="btn btn-primary">petugas</a>
<a href="admin.php?url=pembayaran" class="btn btn-primary">Pembayaran</a>
<a href="admin.php?url=laporan" class="btn btn-primary">Laporan</a>
<a href="admin.php?url=logout" class="btn btn-primary">Logout</a>
<div class="card-body">
    <!-- ini isi web kita -->
    <?php
    $file = @$_GET['url'];
    if (empty($file)) {
        echo '<div class="welcome-message">';
        echo '<h4>Selamat Datang di Halaman Web Administrator</h4>';
        echo '<p>Aplikasi pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa/siswi di sekolah.</p>';
        echo '</div>';
    } else {
        include $file . '.php';
    }
    ?>
</div>

<!-- Link to external CSS styles for better design -->
<style>
    /* General Card Body Styling */
    .card-body {
        background: #f4f6f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin: 20px;
    }

    /* Styling for the welcome message */
    .welcome-message {
        background-color: #ffffff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .welcome-message h4 {
        font-size: 28px;
        color: #2c3e50;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .welcome-message p {
        font-size: 16px;
        color: #7f8c8d;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .card-body {
            padding: 15px;
            margin: 10px;
        }
        .welcome-message h4 {
            font-size: 24px;
        }
        .welcome-message p {
            font-size: 14px;
        }
    }
</style>


</div>

<body>
    <script src="../js/bootstrap.bundle.min.js">
    </script>
</body>
</html>