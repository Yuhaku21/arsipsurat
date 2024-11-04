<?php
include '../config/koneksi.php'; // Sambungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_instansi = $_POST['nama_instansi'];
    $kepala_instansi = $_POST['kepala_instansi'];

    // Query untuk menyimpan data ke dalam database
    $query = "INSERT INTO tb_instansi (nama_instansi, kepala_instansi) VALUES ('$nama_instansi', '$kepala_instansi')";

    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect ke halaman instansi
        header("Location: instansi.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Instansi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
    body {
        background-color: #e9ecef;
    }

    .container {
        max-width: 800px;
        margin-top: 50px;
    }

    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background: linear-gradient(135deg, #6c757d 0%, #343a40 100%);
        color: white;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .form-control {
        border-radius: 10px;
        box-shadow: none;
        border: 1px solid #ced4da;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .form-group label {
        font-weight: bold;
    }

    .btn-secondary {
        border-radius: 10px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h2>Tambah Data Instansi</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <!-- Form untuk tambah data instansi -->
                    <div class="form-group">
                        <label for="nama_instansi">Nama Instansi:</label>
                        <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" required>
                    </div>
                    <div class="form-group">
                        <label for="kepala_instansi">Kepala Instansi:</label>
                        <input type="text" class="form-control" id="kepala_instansi" name="kepala_instansi" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="instansi.php" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>