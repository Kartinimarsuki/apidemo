<?php

$api_key = "";

if (isset($_POST['submit'])) {
    $username = $_POST['uname'];

    $api_key = md5($username);

    $servername = "localhost"; 
    $username_db = "root"; 
    $password_db = ""; 
    $database = "demografi"; 

    // Membuat koneksi ke database
    $conn = new mysqli($servername, $username_db, $password_db, $database);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Menjalankan query untuk memeriksa apakah username dan password valid
    $sql = "UPDATE user SET api_key='$api_key' WHERE username= '$username'";
    $result = $conn->query($sql);
}

session_start();
// Memeriksa apakah pengguna telah login
if (isset($_SESSION['uname'])) {
    // Pengguna telah login, lakukan tindakan yang sesuai
    $username = $_SESSION['uname'];
} else {
    // Pengguna belum login, arahkan ke halaman login
    header("Location: formlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>API Documentation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar .navbar-brand {
            color: #fff;
            font-size: 24px;
        }

        .navbar .nav-link {
            color: #fff;
            font-size: 16px;
        }

        .content {
            padding: 30px;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            color: #343a40;
            margin-bottom: 20px;
        }

        .content p {
            color: #555;
        }

        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .footer p {
            margin-bottom: 0;
        }

        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">API Key</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index_auth.php">Dokumentasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container content">
        <main class="container my-5">
            <h2>Api Key</h2>
            <p class="mb-4">Masukkan API Key ini pada Header agar dapat mengakses API Demografi</p>
            <form action="apikey.php" method="POST">
                <input type="hidden" name="uname" value="<?php echo $_SESSION['uname']; ?>">
                <button type="submit" name="submit" class="btn" style="background-color: #66CDAA;">Dapatkan API
                    Key</button>
            </form>
            <?php if (!empty($api_key)) { ?>
                <div class="mt-3">
                    <input type="text" class="form-control" value="<?php echo $api_key; ?>"
                        style="width: <?php echo strlen($api_key) * 9; ?>px;" readonly>
                </div>
            <?php } ?>
        </main>
        <br> <br> <br> <br> <br> <br>

    </div>

    <footer class="footer">
        <div class="container">
            <p> Create by Wulan & Kartini</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>