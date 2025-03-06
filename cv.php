<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
    <h2>CV Anda</h2>
    <p><b>Nama:</b> <?= $_POST['nama']; ?></p>
    <p><b>Tempat, Tanggal Lahir:</b> <?= $_POST['ttl']; ?></p>
    <p><b>Riwayat Pendidikan:</b> <?= nl2br($_POST['pendidikan']); ?></p>
    <p><b>Email:</b> <?= $_SESSION['email']; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>

