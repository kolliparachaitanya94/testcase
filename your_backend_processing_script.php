<?php
// your_backend_processing_script.php

// Simulating a user database (Replace this with a real database)
$validUsername = 'example_user';
$validPasswordHash = password_hash('example_password', PASSWORD_DEFAULT);

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the provided username exists and the password is correct
    if ($username === $validUsername && password_verify($password, $validPasswordHash)) {
        // Authentication successful
        // You may set session variables, cookies, or other authentication mechanisms here
        // For now, let's just redirect to a success page
        header("Location: success_page.html");
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password. Please try again.";
        // You may display an error message or redirect the user back to the login page
    }
} else {
    // Redirect to the login page if accessed directly without submitting the form
    header("Location: login.html");
    exit();
}
?>
