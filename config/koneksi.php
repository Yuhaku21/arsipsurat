<?php
$servername = "localhost";
$username = "root"; // ganti sesuai dengan username database
$password = "";     // ganti sesuai dengan password database
$dbname = "arsip_surat"; // ganti dengan nama database Anda

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>