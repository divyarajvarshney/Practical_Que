<!DOCTYPE html>
<html>
<head>
<title>User Data</title>
<style>
table {
width: 100%;
border-collapse: collapse;
}
th, td {
border: 1px solid black;
padding: 8px;
text-align: left;
}


th {
background-color: #f2f2f2;
}
</style>
</head>
<body>
<h1>User Data</h1>

<?php
// Database connection

$servername = "localhost";
$username = "root";
$password = "";
$database="abc";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from the database

$sql = "SELECT id, name, email, age FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Age</th></tr>";



// Output data of each row

while($row = $result->fetch_assoc()) {
echo
"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."<
/td><td>".$row["age"]."</td></tr>";
}

echo "</table>";
} else {
echo "0 results found in the database.";
}

// Close the database connection
$conn->close();
?>
</body>
</html>