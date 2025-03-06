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
<link rel="stylesheet" href="form.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <button onclick="document.getElementById('about').scrollIntoView();">About Me</button>
        <button onclick="document.getElementById('education').scrollIntoView();">Education</button>
        <button onclick="document.getElementById('contact').scrollIntoView();">Contact</button>
    </nav>

    <form action="cv.php" method="POST">
        <h2>Personal Information</h2>
        <label>Full Name:</label>
        <input type="text" name="fullname" required>

        <label>Tagline:</label>
        <input type="text" name="tagline" required>

        <h2 id="about">About Me</h2>
        <label>Description:</label>
        <textarea name="description" required></textarea>

        <label>Birthplace & Date:</label>
        <input type="text" name="birthplace" required>

        <h2 id="education">Education</h2>
        <label>High School:</label>
        <input type="text" name="highschool" required>
        <label>Year:</label>
        <input type="text" name="hs_year" required>
        <label>Description:</label>
        <textarea name="hs_desc" required></textarea>

        <label>University:</label>
        <input type="text" name="university" required>
        <label>Year:</label>
        <input type="text" name="uni_year" required>
        <label>Description:</label>
        <textarea name="uni_desc" required></textarea>

        <h2>Skills</h2>
        <label>Skill 1:</label>
        <input type="text" name="skill1" required>
        <label>Skill 2:</label>
        <input type="text" name="skill2" required>
        <label>Skill 3:</label>
        <input type="text" name="skill3">
        <label>Skill 4:</label>
        <input type="text" name="skill4">

        <h2 id="contact">Contact</h2>
        <label>WhatsApp:</label>
        <input type="text" name="whatsapp" required>
        <label>Instagram:</label>
        <input type="text" name="instagram" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" readonly>

        <button type="submit">Generate CV</button>
    </form>
</body>
</html>
