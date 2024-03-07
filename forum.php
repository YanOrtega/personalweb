<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<style>
.container {
    max-width: 800px;
    margin: 4rem auto;
    background-color: #fff;
    padding: 5rem;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    font-size: 30px;
    color: #354F52;
    margin-bottom: 1rem;
}

label, p{
    font-size: 20px;
}

.post {
    margin-bottom: 1rem;
    padding: 1rem;
    border: 1px solid #354F52;
    background-color: #CAD2C5;
}

.post p {
    margin: 0;
}

.form-group {
    margin-bottom: 1rem;
}

textarea {
    background-color: #CAD2C5;
    width: 100%;
    padding: 0.5rem;
    box-sizing: border-box;
}
</style>

    <header class="header">
        <a href="index.php" class="logo">
            Ian <span>Ortega</span>
        </a>

        <i class="bx bx-menu" id="menu-icon"></i>

        <nav class="navbar">
            <a href="index.php">Home</a>
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

            <a href="forum.php" class="active">Forum</a>
        </nav>
    </header>

    <section>
    <div class="container">
        <h2>Welcome to the Forum</h2>

        <!-- Display forum posts here -->
        <?php
        if (isset($_SESSION["user"]) && $_SESSION["user"] === "yes") {
            require_once "database.php";

            $selectQuery = "SELECT Last_Name, First_Name, comment FROM user WHERE comment IS NOT NULL";
            $result = mysqli_query($conn, $selectQuery);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='post'>";
                    echo "<p><strong>{$row['First_Name']} {$row['Last_Name']}</strong>: {$row['comment']}</p>";
                    echo "</div>";
                }
            } else {
                echo "Error fetching forum posts: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        } else {
            echo "<p>Please log in to view forum posts.</p>";
        }
        ?>

        <!-- Add a form for users to submit new posts -->
        <form action="process_post.php" method="post">
            <?php if (isset($_SESSION["user"]) && $_SESSION["user"] === "yes") : ?>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Post</button>
            <?php else : ?>
                <p>Please log in to post comments.</p>
            <?php endif; ?>
        </form>
    </div>
    </section>
</body>
</html>