<?php

$username = $_GET['uname'];
$password = $_GET['pwd'];

$token = md5($username . $password);

// echo $token;


$servername = "localhost";
$username_db = "root";
$password = "";
$dbname = "demografi";

$conn = new mysqli($servername, $username_db, $password, $dbname);

$sql = "UPDATE user SET api_key='$token' WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

echo "API key anda adalah: " . $token;

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
                        <a class="nav-link" href="#introduction">Introduction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#endpoints">Endpoints</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_generate_key.php">API Key</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formlogin.php">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container content">
        <main class="container my-5">
            <h2>Api Key</h2>
            <p class="mb-4">Gunakan API Key ini untuk menggunakan Makassar Badminton Court API.
                Untuk informasi lebih lanjut mengenai cara menggunakan Makassar Badminton Court API, silakan baca
                dokumentasi.</p>
            <form action="apikey.php" method="POST">
                <input type="hidden" name="username" value="<?php echo $_SESSION['uname']; ?>">
                <button type="submit" name="submit" class="btn btn-success">Dapatkan API Key/token</button>
            </form>
            <?php if (!empty($api_key)) { ?>
                <div class="mt-3">
                    <input type="text" class="form-control" value="<?php echo $api_key; ?>"
                        style="width: <?php echo strlen($api_key) * 9; ?>px;" readonly>
                </div>
            <?php } ?>
        </main>
        <br> <br> <br> <br> <br>

    </div>

    <footer class="footer">
        <div class="container">
            <p> Kelompok INTEGRASI DATA</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>