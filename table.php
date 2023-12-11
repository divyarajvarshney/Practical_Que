<?php
// Get the number from the user
$number = 15;

// Print the heading
echo "<table>";
echo "<tr>";
echo "<th>Number</th><th>Multiplication Table</th>";
echo "</tr>";

// Loop from 1 to 10 and print the multiplication table
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "<td>" . $number * $i . "</td>";
    echo "</tr>";
}

// Close the table

?>