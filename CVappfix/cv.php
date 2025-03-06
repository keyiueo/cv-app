<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CV</title>
    <link rel="stylesheet" href="cv.css">
</head>
<body>
    <div class="cv-container">
        <header>
            <h1><?php echo $_POST['fullname']; ?></h1>
            <p class="tagline"> <?php echo $_POST['tagline']; ?></p>
        </header>
        
        <section id="about">
            <h2>About Me</h2>
            <p><?php echo $_POST['description']; ?></p>
            <p><strong>Birthplace & Date:</strong> <?php echo $_POST['birthplace']; ?></p>
        </section>
        
        <section id="education" class="timeline">
            <h2>Education</h2>
            <div class="timeline-container left">
                <div class="content">
                    <h3><?php echo $_POST['highschool']; ?></h3>
                    <span><?php echo $_POST['hs_year']; ?></span>
                    <p><?php echo $_POST['hs_desc']; ?></p>
                </div>
            </div>
            <div class="timeline-container right">
                <div class="content">
                    <h3><?php echo $_POST['university']; ?></h3>
                    <span><?php echo $_POST['uni_year']; ?></span>
                    <p><?php echo $_POST['uni_desc']; ?></p>
                </div>
            </div>
        </section>
        
        <section id="skills">
            <h2>Skills</h2>
            <ul>
                <li><?php echo $_POST['skill1']; ?></li>
                <li><?php echo $_POST['skill2']; ?></li>
                <?php if (!empty($_POST['skill3'])) echo "<li>{$_POST['skill3']}</li>"; ?>
                <?php if (!empty($_POST['skill4'])) echo "<li>{$_POST['skill4']}</li>"; ?>
            </ul>
        </section>
        
        <section id="contact">
            <h2>Contact</h2>
            <p><strong>WhatsApp:</strong> <?php echo $_POST['whatsapp']; ?></p>
            <p><strong>Instagram:</strong> <?php echo $_POST['instagram']; ?></p>
            <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
        </section>
        </div>

    <div class="logout-wrapper">
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
