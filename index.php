<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ian Ortega</title>

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
            <a href="index.php" class="active">Home</a>
            <a href="about.php">About</a>
            <a href="projects.php">Projects</a>
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

    <section class="home" id="home">
        <div class="home-rectangle">

        </div>

        <div class="home-content">
            <h3>Hello!</h3>
            <h1>I'm <span>Ian</span></h1>
            <h3>
                I'm a Graphic Designer
            </h3>
            <p>Here is my website portfolio, where I tell a little bit of myself and showcase some of my creative works and designs.
            </p>

            <div class="social-icons">
                <a href="https://www.instagram.com/ianxortega/"><i class='bx bxl-instagram'></i></a>
                <a href="https://twitter.com/ianxortega"><i class='bx bxl-twitter'></i></a>
                <a href="https://github.com/YanOrtega"><i class='bx bxl-github'></i></a>
            </div>
        </div>

        <div class="home-img">
            <img src="images/about-pic.jpg" alt="Profile Picture">
        </div>
    </section>

    <section class="art_background">
        <div>
        <h2 class="artquote"> Design is the silent ambassador of your brand. <br> - Paul Rand </h2>
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

    <style>

section {
    position: relative;
    min-height: 100vh;
    padding: 10rem 9% 10rem;
    }

.art_background{
    background: #B9C8B7;
}

.artquote {
    background-image: url(images/designbg.png);
    background-size: cover;
    color: white;
    font-size: 5rem;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: auto;
    width: 1200px;
    max-width: 1000px; 
    padding: 200px; 
    text-align: center;
    line-height: 1.2; 
    border: 5px solid white;
    }

    </style>

    <script src="script.js"></script>
</body>
</html>