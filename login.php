<?php
session_start(); // Mulai sesi

// Simulasi data pengguna (seharusnya diambil dari database)
$users = [
    'admin' => 'admin123', // Username: admin, Password: admin123
    'staff' => 'staff123'   // Username: staff, Password: staff123
];

// Ambil username dan password dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah username dan password cocok
if (array_key_exists($username, $users) && $users[$username] === $password) {
    // Jika pengguna admin
    if ($username === 'admin') {
        header("Location: dashboard_admin.php");
        exit();
    } else { // Jika pengguna staff
        header("Location: dashboard_staff.php");
        exit();
    }
} else {
    // Jika login gagal
    echo "<script>alert('Username atau password salah'); window.location.href='index.php';</script>";
}
?>