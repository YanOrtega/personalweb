<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poster Designs</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <header class="header">
        <a href="index.php" class="logo">
            Ian <span>Ortega</span>
        </a>

        <i class="bx bx-menu" id="menu-icon"></i>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="projects.php" class="active">Projects</a>
            <a href="contacts.php">Contact</a>

            <?php
            session_start();
            if(isset($_SESSION["user"]) && $_SESSION["user"] === "yes"){
                echo '<a href="logout.php">Logout</a>';
            } else {
                echo '<a href="login.php">Login</a>';
                echo '<a href="registration.php">Register</a>';
            }
            ?>

            <a href="forum.php">Forum</a>
        </nav>
    </header>

    <section class="project2" id="project2">
        <h2 class="heading">POSTER <span>DESIGNS</span></h2>

        <div class="project2-container">
            <img src="images/barbie.png">
            <img src="images/honeybunch.png">
            <img src="images/mirrorball.png">
            <img src="images/moon river.png">
            <img src="images/tortol.png">
        </div>

    </section>

    <footer class="footer">
        <div class="social">
            <a href="https://www.instagram.com/ianxortega/"><i class='bx bxl-instagram'></i></a>
            <a href="https://twitter.com/ianxortega"><i class='bx bxl-twitter'></i></a>
            <a href="https://github.com/YanOrtega"><i class='bx bxl-github'></i></a>
        </div>

        <ul class="li">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="about.php">About Me</a>
            </li>
            <li>
                <a href="projects.php">Projects</a>
            </li>
            <li>
                <a href="contacts.php">Contact</a>
            </li>
        </ul>

        <p class="copyright">
            &#169; Ian Ortega | All Rights Reserved.
        </p>
    </footer>
    
    <script src="script.js"></script>
</body>
</html>