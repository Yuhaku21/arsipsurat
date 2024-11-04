<?php
include '../config/koneksi.php'; // Sambungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $no_surat = $_POST['no_surat'];
    $tgl_keluar = $_POST['tgl_keluar'];
    $penerima = $_POST['penerima'];
    $perihal = $_POST['perihal'];
    $tgl_arsip = $_POST['tgl_arsip'];
    $id_instansi = $_POST['id_instansi'];
    $id_status_arsip = $_POST['id_status_arsip'];

    // Query untuk menyimpan data ke dalam database
    $query = "INSERT INTO tb_sk (no_surat, tgl_keluar, penerima, perihal, tgl_arsip, id_instansi, id_status_arsip) VALUES ('$no_surat', '$tgl_keluar', '$penerima', '$perihal', '$tgl_arsip', '$id_instansi', '$id_status_arsip')";

    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect ke halaman surat keluar
        header("Location: surat_keluar.php");
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
    <title>Tambah Data Surat Keluar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <h2>Tambah Data Surat Keluar</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="no_surat">No Surat:</label>
                        <input type="text" class="form-control" id="no_surat" name="no_surat" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_keluar">Tanggal Surat Keluar:</label>
                        <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar" required>
                    </div>
                    <div class="form-group">
                        <label for="penerima">Penerima:</label>
                        <input type="text" class="form-control" id="penerima" name="penerima" required>
                    </div>
                    <div class="form-group">
                        <label for="perihal">Perihal:</label>
                        <input type="text" class="form-control" id="perihal" name="perihal" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_arsip">Tanggal Arsip:</label>
                        <input type="date" class="form-control" id="tgl_arsip" name="tgl_arsip" required>
                    </div>
                    <div class="form-group">
                        <label for="id_instansi">ID Instansi:</label>
                        <input type="text" class="form-control" id="id_instansi" name="id_instansi" required>
                    </div>
                    <div class="form-group">
                        <label for="id_status_arsip">ID Status Arsip:</label>
                        <input type="text" class="form-control" id="id_status_arsip" name="id_status_arsip" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="surat_keluar.php" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>