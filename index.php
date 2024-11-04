<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Belajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <style>
    body {
        background-image: url('img/kantor.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        margin: 0;
    }

    .card {
        max-width: 400px;
        margin: auto;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 8px;
    }

    .logo {
        width: 50px;
    }
    </style>
</head>

<body>
    <!--MainContent-->
    <div class="container">
        <div class="card mt-5">
            <div class="text-center">
                <img src="img/logo.jpg" alt="Logo SIAS" class="logo" />
                <h5>Silahkan Login</h5>
            </div>
            <form action="login.php" method="POST">
                <!-- Action diubah ke login.php -->
                <div class="container mt-3">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required />
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-dark" type="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>