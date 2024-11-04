<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Sistem Informasi Pengarsipan Surat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    /* Styling untuk halaman */
    body,
    html {
        height: 100%;
        margin: 0;
        font-family: Arial, sans-serif;
        background-image: url('img/kantor.jpg');
        /* Ganti dengan gambar kantor Anda */
        background-size: cover;
        background-position: center;
        color: #333;
    }

    /* Styling untuk header */
    .header {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 10px 30px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        z-index: 10;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
    }

    .header .logo img {
        width: 50px;
        margin-right: 10px;
    }

    .header .nav-links a {
        margin: 0 15px;
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }

    .header .btn-login {
        background-color: #007bff;
        color: #fff;
        font-weight: bold;
        border: none;
    }

    /* Styling untuk konten utama */
    .welcome-box {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 40px;
        max-width: 600px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #333;
        border-radius: 8px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.3);
        text-align: center;
    }

    .welcome-box h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .welcome-box p {
        font-size: 1.1rem;
        color: #555;
    }

    .welcome-box .highlight {
        color: #007bff;
        font-weight: bold;
    }

    /* Animasi pada sambutan */
    .welcome-box h1,
    .welcome-box p {
        opacity: 0;
        animation: fadeIn 1s forwards;
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }
    </style>
</head>

<body>

    <!-- Header -->
    <div class="header">
        <div class="logo d-flex align-items-center">
            <img src="img/logo.jpg" alt="Logo"> <!-- Ganti dengan path logo kantor -->
            <span>SIAS</span>
        </div>
        <a href="index.php" class="btn btn-login">Login</a>
    </div>

    <!-- Konten Utama -->
    <div class="welcome-box">
        <h1>Selamat datang di Sistem Pengarsipan Surat Masuk dan Surat Keluar</h1>
        <p>Kantor Kecamatan Batu Benawa, Kabupaten Hulu Sungai Tengah. Nikmati kemudahan akses informasi yang disediakan
            melalui platform ini untuk pengarsipan yang lebih efisien.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>