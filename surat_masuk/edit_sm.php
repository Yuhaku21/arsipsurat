<?php
include '../config/koneksi.php'; // Sambungkan ke database

// Dapatkan ID surat masuk dari URL
$id_sm = $_GET['id_sm'];

// Query untuk mendapatkan data surat masuk berdasarkan ID
$query = "SELECT * FROM tb_sm WHERE id_sm='$id_sm'";
$result = mysqli_query($koneksi, $query);
$suratMasuk = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $no_surat = $_POST['no_surat'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $pengirim = $_POST['pengirim'];
    $perihal = $_POST['perihal'];
    $tgl_arsip = $_POST['tgl_arsip'];
    $id_instansi = $_POST['id_instansi'];
    $id_status_arsip = $_POST['id_status_arsip'];

    // Query untuk mengupdate data surat masuk
    $query_update = "UPDATE tb_sm SET no_surat='$no_surat', tgl_masuk='$tgl_masuk', pengirim='$pengirim', perihal='$perihal', tgl_arsip='$tgl_arsip', id_instansi='$id_instansi', id_status_arsip='$id_status_arsip' WHERE id_sm='$id_sm'";

    if (mysqli_query($koneksi, $query_update)) {
        header("Location: surat_masuk.php");
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
    <title>Edit Data Surat Masuk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
    body {
        background-color: #e9ecef;
        /* Latar belakang abu-abu muda */
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
        /* Gradien abu-abu */
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
                <h2>Edit Data Surat Masuk</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <!-- Form untuk edit data surat masuk -->
                    <div class="form-group">
                        <label for="no_surat">No Surat:</label>
                        <input type="text" class="form-control" id="no_surat" name="no_surat"
                            value="<?php echo htmlspecialchars($suratMasuk['no_surat']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_masuk">Tanggal Masuk:</label>
                        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk"
                            value="<?php echo htmlspecialchars($suratMasuk['tgl_masuk']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="pengirim">Pengirim:</label>
                        <input type="text" class="form-control" id="pengirim" name="pengirim"
                            value="<?php echo htmlspecialchars($suratMasuk['pengirim']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="perihal">Perihal:</label>
                        <input type="text" class="form-control" id="perihal" name="perihal"
                            value="<?php echo htmlspecialchars($suratMasuk['perihal']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_arsip">Tanggal Arsip:</label>
                        <input type="date" class="form-control" id="tgl_arsip" name="tgl_arsip"
                            value="<?php echo htmlspecialchars($suratMasuk['tgl_arsip']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="id_instansi">ID Instansi:</label>
                        <input type="text" class="form-control" id="id_instansi" name="id_instansi"
                            value="<?php echo htmlspecialchars($suratMasuk['id_instansi']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="id_status_arsip">ID Status Arsip:</label>
                        <input type="text" class="form-control" id="id_status_arsip" name="id_status_arsip"
                            value="<?php echo htmlspecialchars($suratMasuk['id_status_arsip']); ?>" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="surat_masuk.php" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>