<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>

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

    <section class="projects" id="projects">
        <h2 class="heading">PROJECTS</h2>

        <div class="projects-container">
            <div class="project-box">
                <img src="images/agorahills.png">
                <div class="project-info">
                    <h4>Squared Designs</h4>
                    <p>1x1 Scale Designs</p>
                    <a href="projectsquared.php">
                        <i class="bx bx-link"></i>
                    </a>
                </div>
            </div>

            <div class="project-box">
                <img src="images/mirrorball.png">
                <div class="project-info">
                    <h4>Poster Designs</h4>
                    <p>Long Scale Designs</p>
                    <a href="projectposter.php">
                        <i class="bx bx-link"></i>
                    </a>
                </div>
            </div>

            <div>
                <p class="project_desc"> Welcome to the vibrant world of graphic design where creativity knows no bounds! In this section, 
                    I showcase a curated selection of my graphic design projects, each a unique blend of innovation, and visual aesthetics. </p>
            </div>
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
        .project_desc{
            font-family: 'Poppins',sans-serif;
            background: #354F52;
            color: #CAD2C5;
            font-size: 20px;
            font-weight: 500;
            text-align: justify;
            border: 5px solid white;
            padding: 30px;
        }
    </style>

    <script src="script.js"></script>
</body>
</html>