<?php
// Start the session
session_start();

// Define the predefined username and password
$username = "JohnDoe";
$password = "12345";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the entered username and password match the predefined values
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        // If they do, set the count to 1 in the session
        $_SESSION['count'] = 1;

        // Redirect the user to the welcome page
        header('Location: welcome.php');
        exit;
    } else {
        // If the entered username and password do not match, display an error message
        echo "Incorrect username or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>