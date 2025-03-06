<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    session_write_close(); 
    header("Location: form.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CV Maker</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) { echo "<p style='color:red; text-align:center;'>" . htmlspecialchars($_GET['error']) . "</p>"; } ?>
        <form action="process.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
