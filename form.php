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
    <h2>Masukkan Data CV</h2>
    <form action="cv.php" method="post">
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="text" name="ttl" placeholder="Tempat, Tanggal Lahir" required>
        <textarea name="pendidikan" placeholder="Riwayat Pendidikan" required></textarea>
        <button type="submit">Buat CV</button>
    </form>
</body>
</html>

