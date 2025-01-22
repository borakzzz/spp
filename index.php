<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Siswa Pembayaran SPP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 80px;
        }

        .card {
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .card-body {
            padding: 30px;
        }

        h4 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-control {
            font-size: 14px;
            padding: 12px;
        }

        .btn-primary {
            width: 100%;
            padding: 12px;
            font-size: 16px;
        }

        .form-group label {
            font-weight: bold;
        }

        .text-center a {
            color: #007bff;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
        }

        /* Logo Styling */
        .card img {
            max-width: 100px;
            display: block;
            margin: 20px auto;  /* Margin ditambahkan untuk menurunkan gambar sedikit */
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <!-- Login Form -->
                <h4>Login Siswa</h4>
                <div class="card">
                    <img src="logo.png" alt="Logo">
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="proses-login-siswa.php" method="post">
                            <div class="form-group mb-3">
                                <label for="nisn">NISN</label>
                                <input type="number" name="nisn" class="form-control" id="nisn" placeholder="Masukkan NISN Anda..." required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nis">NIS</label>
                                <input type="number" name="nis" class="form-control" id="nis" placeholder="Masukkan NIS Anda..." required>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="text-center">
                                <a href="index2.php">Login Sebagai Administrator</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
