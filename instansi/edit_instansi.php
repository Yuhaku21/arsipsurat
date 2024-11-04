<?php
include '../config/koneksi.php'; // Sambungkan ke database

// Dapatkan ID instansi dari URL
$id_instansi = $_GET['id_instansi'];

// Query untuk mendapatkan data instansi berdasarkan ID
$query = "SELECT * FROM tb_instansi WHERE id_instansi='$id_instansi'";
$result = mysqli_query($koneksi, $query);
$instansi = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_instansi = $_POST['nama_instansi'];
    $kepala_instansi = $_POST['kepala_instansi'];

    // Query untuk mengupdate data instansi
    $query_update = "UPDATE tb_instansi SET nama_instansi='$nama_instansi', kepala_instansi='$kepala_instansi' WHERE id_instansi='$id_instansi'";

    if (mysqli_query($koneksi, $query_update)) {
        header("Location: instansi.php");
        exit();
    } else {
        echo "Error: " . $query_update . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Instansi</title>
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
                <h2>Edit Data Instansi</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <!-- Form untuk edit data instansi -->
                    <div class="form-group">
                        <label for="nama_instansi">Nama Instansi:</label>
                        <input type="text" class="form-control" id="nama_instansi" name="nama_instansi"
                            value="<?php echo htmlspecialchars($instansi['nama_instansi']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="kepala_instansi">Kepala Instansi:</label>
                        <input type="text" class="form-control" id="kepala_instansi" name="kepala_instansi"
                            value="<?php echo htmlspecialchars($instansi['kepala_instansi']); ?>" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="instansi.php" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>