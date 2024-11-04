<?php
include '../config/koneksi.php'; // Sambungkan ke database

// Dapatkan ID surat masuk dari URL
$id_sm = $_GET['id_sm'];

// Query untuk menghapus data surat masuk
$query = "DELETE FROM tb_sm WHERE id_sm='$id_sm'";

if (mysqli_query($koneksi, $query)) {
    header("Location: surat_masuk.php"); // Redirect ke halaman surat masuk setelah penghapusan
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
?>