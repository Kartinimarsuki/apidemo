<!DOCTYPE html>
<html>

<head>
    <title>User API Demografi Login</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-5">Form Login</h2>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="uname" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="pwd" required>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Login</button>
            <?php
            // Memeriksa apakah ada pesan kesalahan yang diterima dari halaman login.php
            if (isset($_GET['error'])) {
                $error_message = $_GET['error'];
                echo '<div class="alert alert-danger"> <strong>Upss! </strong>' . $error_message . '</div>';
            }
            ?>

        </form>
    </div>

    <!-- Tambahkan script JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>