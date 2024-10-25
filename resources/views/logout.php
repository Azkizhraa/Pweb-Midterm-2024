<?php
session_start();
session_unset(); // Unset session variables
session_destroy(); // Destroy the session
header("Location: register.html"); // Redirect to the login page
exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging Out</title>
    <style>
        /* Optional: Add some styling for user experience */
        body {
            font-family: Arial, sans-serif;
            background-color: #0f4279;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <p>You have been logged out. Redirecting to login page...</p>
</body>
</html>