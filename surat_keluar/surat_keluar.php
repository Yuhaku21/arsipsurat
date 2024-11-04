<?php
include '../config/koneksi.php'; 

// Query untuk mendapatkan semua data surat keluar
$query = "SELECT * FROM tb_sk"; 
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Surat Keluar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <style>
    /* Styling sidebar */
    .sidebar {
        min-height: 100vh;
        background-color: #343a40;
        color: #fff;
    }

    .sidebar .nav-link,
    .sidebar h4 {
        color: #fff;
    }

    .sidebar h4 {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sidebar h4 img {
        margin-right: 8px;
    }

    .profile img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
    }

    .sidebar .divider {
        height: 1px;
        background-color: #6c757d;
        margin: 1rem 0;
    }

    .sidebar .nav-item .nav-link {
        display: flex;
        align-items: center;
    }

    .sidebar .nav-item .nav-link i {
        margin-right: 8px;
    }

    .main-title {
        font-size: 1.5rem;
        margin-bottom: 0;
    }

    .sub-title {
        font-size: 0.9rem;
        color: #6c757d;
    }

    .main-divider {
        height: 2px;
        background-color: #dee2e6;
        margin: 1rem 0;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 sidebar p-3">
                <h4 class="text-center font-weight-bold">
                    <img src="../img/logo.jpg" alt="Logo Sistem Informasi Arsip" width="30"> SIAS
                </h4>
                <div class="profile text-center mb-3">
                    <img src="../img/foto.png" alt="Foto Admin">
                    <h5 class="mt-2">Istiyana</h5>
                    <p>Admin</p>
                </div>
                <div class="divider"></div>
                <ul class="nav flex-column mt-3">
                    <li class="nav-item">
                        <a class="nav-link" href="../dashboard_admin.php"><i class="fas fa-tachometer-alt"></i>
                            Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../user/user.php" aria-label="User"><i class="fas fa-user"></i>
                            Data User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#dataMasterSubmenu" role="button"
                            aria-expanded="false" aria-controls="dataMasterSubmenu" aria-label="Data Master">
                            <i class="fas fa-database"></i> Data Master
                        </a>
                        <div class="collapse" id="dataMasterSubmenu">
                            <ul class="nav flex-column ml-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="../staff/staff.php" aria-label="Staff"><i
                                            class="fas fa-users"></i>
                                        Data Staff</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../surat_masuk/surat_masuk.php"
                                        aria-label="Surat Masuk"><i class="fas fa-envelope"></i> Data Surat Masuk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../surat_keluar/surat_keluar.php"
                                        aria-label="Surat Keluar"><i class="fas fa-paper-plane"></i> Data Surat
                                        Keluar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../instansi/instansi.php" aria-label="Instansi"><i
                                            class="fas fa-building"></i> Data Instansi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../status_pengarsipan/status_pengarsipan.php"
                                        aria-label="Status Pengarsipan"><i class="fas fa-archive"></i> Data Status
                                        Pengarsipan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../efektivitas/efektivitas.php"
                                        aria-label="Efektivitas"><i class="fas fa-chart-line"></i> Data Efektivitas</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#reportSubmenu" role="button"
                            aria-expanded="false" aria-controls="reportSubmenu" aria-label="Report">
                            <i class="fas fa-file-alt"></i> Report
                        </a>
                        <div class="collapse" id="reportSubmenu">
                            <ul class="nav flex-column ml-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="../views/laporan_rekapitulasi.php"
                                        aria-label="Laporan Rekapitulasi"><i class="fas fa-file-invoice"></i> Laporan
                                        Rekapitulasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../views/laporan_status_surat_masuk.php"
                                        aria-label="Laporan Status Surat Masuk"><i class="fas fa-folder-open"></i>
                                        Laporan Status Surat Masuk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../views/laporan_status_surat_keluar.php"
                                        aria-label="Laporan Status Surat Keluar"><i class="fas fa-folder-open"></i>
                                        Laporan Status Surat Keluar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../views/laporan_keterlambatan.php"
                                        aria-label="Laporan Keterlambatan"><i class="fas fa-clock"></i> Laporan
                                        Keterlambatan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../views/laporan_efektivitas.php"
                                        aria-label="Laporan Efektivitas"><i class="fas fa-chart-line"></i> Laporan
                                        Efektivitas</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item mt-4">
                        <a href="../index.php" class="nav-link text-danger" aria-label="Keluar"><i
                                class="fas fa-sign-out-alt"></i> Keluar</a>
                    </li>
                </ul>

                <!-- Tombol Kembali -->
                <div class="mt-auto text-left">
                    <a href="../dashboard_admin.php" class="btn btn-outline-light btn-sm"><i
                            class="fas fa-arrow-left"></i></a>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="mb-3">
                    <h2 class="main-title">Data Surat Keluar</h2>
                    <p class="sub-title">Sistem Informasi Pengarsipan Surat Masuk dan Surat Keluar</p>
                    <div class="main-divider"></div>
                </div>

                <!-- Button to Add Data -->
                <div class="mb-3">
                    <a href="tambah_data_sk.php" class="btn btn-primary">
                        Tambah Data <i class="fas fa-plus"></i>
                    </a>
                </div>

                <!-- Surat Keluar Data Table -->
                <div class="table-responsive">
                    <table id="suratKeluarTable" class="table table-striped table-bordered display">
                        <thead>
                            <tr>
                                <th>ID Surat Keluar</th>
                                <th>Nomor Surat</th>
                                <th>Tanggal Surat Keluar</th>
                                <th>Penerima</th>
                                <th>Perihal</th>
                                <th>Tanggal Arsip</th>
                                <th>ID Instansi</th>
                                <th>ID Status Arsip</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                        <td>{$row['id_sk']}</td>
                                        <td>{$row['no_surat']}</td>
                                        <td>{$row['tgl_keluar']}</td>
                                        <td>{$row['penerima']}</td>
                                        <td>{$row['perihal']}</td>
                                        <td>{$row['tgl_arsip']}</td>
                                        <td>{$row['id_instansi']}</td>
                                        <td>{$row['id_status_arsip']}</td>
                                        <td>
                                            <a href='edit_sk.php?id_sk={$row['id_sk']}' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i> Edit</a>
                                            <a href='proses_hapus_sk.php?id_sk={$row['id_sk']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?');\">
                                                <i class='fas fa-trash-alt'></i> Hapus
                                            </a>
                                        </td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#suratKeluarTable').DataTable(); // Initialize DataTables
    });
    </script>
</body>

</html>