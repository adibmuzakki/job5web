<?php
// Mulai sesi
session_start();

// Daftar username dan password yang valid (dalam praktik nyata, ini harus menggunakan database)
$valid_username = 'adib';
$valid_password = '123';

// Ambil data dari formulir
$username = $_POST['username'];
$password = $_POST['password'];

// Periksa kredensial
if ($username === $valid_username && $password === $valid_password) {
    // Set sesi dan redirect ke halaman sukses
    $_SESSION['loggedin'] = true;
    header('Location: success.php');
    exit();
} else {
    // Redirect ke halaman login dengan pesan error
    header('Location: login.php?error=1');
    exit();
}
?>
