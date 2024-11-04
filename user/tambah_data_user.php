<?php
include '../config/koneksi.php'; // Sambungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_instansi = $_POST['id_instansi'];
    $level = $_POST['level'];

    // Query untuk menyimpan data ke dalam database
    $query = "INSERT INTO tb_user (nik, nama, telepon, username, password, id_instansi, level) VALUES ('$nik', '$nama', '$telepon', '$username', '$password', '$id_instansi', '$level')";

    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect ke halaman user
        header("Location: user.php");
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
    <title>Tambah Data User</title>
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
                <h2>Tambah Data User</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <!-- Form untuk tambah data user -->
                    <div class="form-group">
                        <label for="nik">NIK:</label>
                        <input type="text" class="form-control" id="nik" name="nik" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon:</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="id_instansi">ID Instansi:</label>
                        <input type="text" class="form-control" id="id_instansi" name="id_instansi" required>
                    </div>
                    <div class="form-group">
                        <label for="level">Level:</label>
                        <select class="form-control" id="level" name="level" required>
                            <option value="">Pilih Level</option>
                            <option value="staff">Staff</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="user.php" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>