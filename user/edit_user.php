<?php
include '../config/koneksi.php'; // Sambungkan ke database

// Dapatkan ID user dari URL
$id_user = $_GET['id_user'];

// Query untuk mendapatkan data user berdasarkan ID
$query = "SELECT * FROM tb_user WHERE id_user='$id_user'";
$result = mysqli_query($koneksi, $query);
$user = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_instansi = $_POST['id_instansi'];
    $level = $_POST['level'];

    // Query untuk mengupdate data user
    $query_update = "UPDATE tb_user SET nik='$nik', nama='$nama', telepon='$telepon', username='$username', password='$password', id_instansi='$id_instansi', level='$level' WHERE id_user='$id_user'";

    if (mysqli_query($koneksi, $query_update)) {
        header("Location: user.php");
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
    <title>Edit Data User</title>
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
                <h2>Edit Data User</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <!-- Form untuk edit data user -->
                    <div class="form-group">
                        <label for="nik">NIK:</label>
                        <input type="text" class="form-control" id="nik" name="nik"
                            value="<?php echo htmlspecialchars($user['nik']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="<?php echo htmlspecialchars($user['nama']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon:</label>
                        <input type="text" class="form-control" id="telepon" name="telepon"
                            value="<?php echo htmlspecialchars($user['telepon']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username"
                            value="<?php echo htmlspecialchars($user['username']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password"
                            value="<?php echo htmlspecialchars($user['password']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="id_instansi">ID Instansi:</label>
                        <input type="text" class="form-control" id="id_instansi" name="id_instansi"
                            value="<?php echo htmlspecialchars($user['id_instansi']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="level">Level:</label>
                        <select class="form-control" id="level" name="level" required>
                            <option value="staff" <?php if($user['level'] == 'staff') echo 'selected'; ?>>Staff</option>
                            <option value="admin" <?php if($user['level'] == 'admin') echo 'selected'; ?>>Admin</option>
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
</body>

</html>