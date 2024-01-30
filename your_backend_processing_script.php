<?php
// your_backend_processing_script.php

// Simulating a user database (Replace this with a real database)
$validUsername = 'example_user';
$validPassword = 'example_password';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the provided username and password match the valid ones
    if ($username === $validUsername && $password === $validPassword) {
        // Authentication successful
        echo "Login successful. Redirect to dashboard or home page.";
        // You may redirect the user to the dashboard or home page here
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
