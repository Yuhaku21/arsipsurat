<?php
include '../config/koneksi.php'; // Sambungkan ke database

// Dapatkan ID user dari URL
$id_user = $_GET['id_user'];

// Query untuk menghapus data user
$query = "DELETE FROM tb_user WHERE id_user='$id_user'";

if (mysqli_query($koneksi, $query)) {
    header("Location: user.php"); // Redirect ke halaman user setelah penghapusan
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
?>