<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
    exit();
}

// Ambil username dari session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Akun Pengguna</title>
</head>
<body>
    <h1>Selamat datang, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>Ini adalah halaman akun Anda.</p>
    <a href="logout.php">Logout</a>
</body>
</html>