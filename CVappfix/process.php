<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_parts = explode("@", $email);
        $domain = $email_parts[1];

        // Debugging: cek hasil parsing email sm pass
        error_log("Email: " . $email);
        error_log("Domain: " . $domain);
        error_log("Password Input: " . $password);

        if ($password === $domain) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            
            // mastiin session tersimpan sebelum redirect
            session_write_close();
            header("Location: form.php");
            exit;
        } else {
            header("Location: index.php?error=Password%20salah!%20Gunakan%20domain%20email%20sebagai%20password.");
            exit;
        }
    } else {
        header("Location: index.php?error=Email%20tidak%20valid!");
        exit;
    }
}

header("Location: index.php");
exit;
?>
