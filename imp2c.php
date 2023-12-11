<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['count'] = 1;

        $current_time = date('h:i:s A');
        echo "Hello! You are logged in at " . $current_time;

        header('Location: welcome.php');
        exit;
    } else {
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