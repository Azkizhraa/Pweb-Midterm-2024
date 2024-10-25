<?php
session_start();

// Simulated user data (replace with actual user authentication and registration logic)
$users = [
    ['username' => 'user1', 'password' => 'password1', 'email' => 'user1@example.com'],
    ['username' => 'user2', 'password' => 'password2', 'email' => 'user2@example.com'],
];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {
        // Handle login logic
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate user credentials
        foreach ($users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                $_SESSION['loggedin'] = true; // Set session variable
                header("Location: homepage.html"); // Redirect to the homepage
                exit();
            }
        }

        // If login fails
        echo "<script>alert('Invalid username or password!'); window.location.href='register.html';</script>";

    } elseif (isset($_POST['register'])) {
        // Handle registration logic
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        // Check if the username already exists
        foreach ($users as $user) {
            if ($user['username'] === $username) {
                echo "<script>alert('Username already taken!'); window.location.href='register.html';</script>";
                exit();
            }
        }

        // If registration is successful (add user to the simulated users array)
        $users[] = ['username' => $username, 'password' => $password, 'email' => $email];
        $_SESSION['loggedin'] = true; // Automatically log in the user
        header("Location: homepage.html"); // Redirect to the homepage
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register - Find a Friend</title>
    <style>
        /* Add your styling here */
        body {
            font-family: Arial, sans-serif;
            background-color: #0f4279;
            margin: 0;
            padding: 0;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Login or Register</h2>
    <!-- The form is handled within the PHP logic -->
</body>
</html>
