<!-- +wap in PHP to count the no of user visited the webpge
     +design a webpage that acccept a username and password and give the welcome message according to time.
     -->

<?php
// Start the session
session_start();

// Check if the count is already set in the session
if (isset($_SESSION['count'])) {
    // If it is, increment the count by 1
    $_SESSION['count'] = $_SESSION['count'] + 1;
} else {
    // If it's not, set the count to 1
    $_SESSION['count'] = 1;
}

// Display the new count on the webpage
echo "You are visitor number " . $_SESSION['count'] . ".";

// Create a form for visitor entrance time
echo '<form method="post" action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '">
Enter the visitor\'s entrance time:
<input type="time" name="entrancetime" value="' . date('H:i') . '">
<input type="submit" name="submit" value="Submit">
</form>';

// Save the visitor entrance time to a file if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $entrancetime = $_POST['entrancetime'];
    file_put_contents('visitors.txt', "Visitor " . $_SESSION['count'] . " entered at " . $entrancetime . "\n", FILE_APPEND);
}
?>