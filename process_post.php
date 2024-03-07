<?php
session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"] === "yes") {
    // Check if the message is set and not empty
    if (isset($_POST["message"]) && !empty($_POST["message"])) {
        require_once "database.php";

        // Check if the necessary session variables are set
        if (isset($_SESSION["First_Name"], $_SESSION["Last_Name"])) {
            // Get the user's first name and last name from the session
            $firstName = $_SESSION["First_Name"];
            $lastName = $_SESSION["Last_Name"];

            // Get the message from the POST data
            $message = $_POST["message"];

            // Prepare and execute the SQL statement
            $updateQuery = "UPDATE user SET comment = ? WHERE First_Name = ? AND Last_Name = ?";
            $stmt = mysqli_prepare($conn, $updateQuery);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "sss", $message, $firstName, $lastName);
                mysqli_stmt_execute($stmt);

                // Check if the update was successful
                if (mysqli_stmt_affected_rows($stmt) > 0) {
                    echo "Post added successfully!";
                } else {
                    echo "Failed to add post. Please try again.";
                }

                mysqli_stmt_close($stmt);
            } else {
                echo "Error preparing statement: " . mysqli_error($conn);
            }
        } else {
            echo "User information not available. Please log in again.";
        }

        mysqli_close($conn);
    } else {
        echo "Please enter a valid message.";
    }
} else {
    echo "You are not logged in.";
}
?>