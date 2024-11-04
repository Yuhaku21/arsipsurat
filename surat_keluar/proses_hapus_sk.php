<?php
include '../config/koneksi.php'; // Sambungkan ke database

// Dapatkan ID surat keluar dari URL
$id_sk = $_GET['id_sk'];

// Query untuk menghapus data surat keluar
$query = "DELETE FROM tb_sk WHERE id_sk='$id_sk'";

if (mysqli_query($koneksi, $query)) {
    header("Location: surat_keluar.php"); // Redirect ke halaman surat keluar setelah penghapusan
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
?>