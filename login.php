<?php
include 'dbconection.php';
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Check if username and password are set
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // Authentication successful
            $_SESSION['username'] = $username;
            header("Location: home page.html"); // Redirect to welcome page
            exit;
        } else {
            // Authentication failed
            echo "Invalid username or password";
        }

        $con->close(); // Close connection
    }
}
?>
