<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>

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
            <a href="about.php" class="active">About</a>
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

    <section class="about" id="about">
        <div class="about-rectangle"></div>
        <div class="about-img">
            <img src="images/about-pic.jpg" alt="Profile Picture">
        </div>

        <div class="about-content">
            <h2 class="heading">ABOUT <span>ME</span></h2>
            <h3>Graphic Designer</h3>
            <P style="text-align: justify;"> Hello there! I'm Ian Ortega, a passionate graphic designer deeply enthusiastic about creating visually pleasing and impactful designs. 
                I am a second-year student studying BS Information Technology. 
                My experience in graphic design is marked by an unwavering commitment to continuous learning and an interest in staying in touch with emerging trends.
            </P>
        </div>
    </section>

    <section>
        <div>
        <h2 class="heading">BACKGROUND</h2>
        </div>

        <div class="background-container">
            <div class="background-box">
                <img src="images/backbg3.png">
                    <div class="background-info">
                    <h4>Schools I Went Into</h4>
                    <p>ELEMENTARY: <br> Holy Rosary School Of Science and Technology</p>
                    <p>JUNIOR HIGH SCHOOL: <br> Bethel Christian School</p>
                    <p>SENIOR HIGH SCHOOL: <br> AMA Fairview</p>
                    <p>UNDERGRADUATE: <br> National University Fairview</p>
                    </div>
            </div>

            <div class="background-box">
                <img src="images/backbg3.png">
                    <div class="background-info">
                    <h4>Applications and Tools Used</h4>
                    <p>CANVA <br> Main Editing Application</p>
                    <p>PINTEREST <br> Elements, Images, and Graphics Source</p>
                    </div>
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
    .background-container{
        margin-top: 50px;
        display: grid;
        grid-template-columns: repeat(3,1fr);
        align-items: center;
        gap: 2.5rem;
    }

    .background-container .background-box{
        display: flex;
        position: relative;
        height: 500px;
        border-radius: 2rem;
        overflow: hidden;
    }

    .background-box img{
        width: 100%;
        object-fit: cover;
        transition: 0.5 ease;
    }

    .background-box .background-info{
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        padding: 0 4rem;
        cursor: pointer;
        transition: 0.5s ease-in-out;
    }

    .background-info h4{
        font-size: 3rem;
        color: white;
        font-weight: 800;
    }

    .background-info p{
        font-size: 2rem;
        margin: 0.3rem 0 1rem;
        font-weight: 500;
        color: white;
    }
    </style>

    <script src="script.js"></script>
</body>
</html>