<?php
session_start();

// Mengambil nilai yang diinput dari form
$username = $_POST["uname"];
$password = $_POST["pwd"];

// Melakukan validasi atau manipulasi data jika diperlukan

// Menyimpan data ke database
$servername = "localhost"; // Ganti dengan nama server database Anda
$username_db = "root"; // Ganti dengan nama pengguna database Anda
$password_db = ""; // Ganti dengan kata sandi database Anda
$database = "demografi"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username_db, $password_db, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Menjalankan query untuk memeriksa apakah username dan password valid
$sql = "SELECT * FROM user WHERE BINARY username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $_SESSION['uname'] = $username;
  // Tidak perlu menyimpan password dalam session

  $stmt->close();
  $conn->close();

  header("Location: index_auth.php");
  exit();
} else {
  $stmt->close();
  $conn->close();

  // Tambahkan pesan kesalahan
  $error_message = "Username atau password yang Anda masukkan salah.";

  // Kembali ke halaman login dengan membawa pesan kesalahan
  header("Location: formlogin.php?error=" . urlencode($error_message));
  exit();
}
?>