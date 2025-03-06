<?php
session_start();
if (isset($_SESSION['email'])) {
    header("Location: form.php");
    exit();
}
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $domain = substr(strrchr($email, "@"), 1); // Ambil domain email
    if ($password === $domain) {
        $_SESSION['email'] = $email;
        header("Location: form.php");
        exit();
    } else {
        $error = "Password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
    <h2>Login</h2>
    <form method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password (domain email)" required>
        <button type="submit">Login</button>
    </form>
    <p><?= $error; ?></p>
</body>
</html>

