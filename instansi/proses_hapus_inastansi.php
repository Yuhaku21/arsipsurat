<?php
include '../config/koneksi.php'; // Sambungkan ke database

// Dapatkan ID instansi dari URL
$id_instansi = $_GET['id_instansi'];

// Query untuk menghapus data instansi
$query = "DELETE FROM tb_instansi WHERE id_instansi='$id_instansi'";

if (mysqli_query($koneksi, $query)) {
    header("Location: instansi.php"); // Redirect ke halaman instansi setelah penghapusan
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
?>