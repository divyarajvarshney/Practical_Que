<?php
// Filename
$filename = "myfile.txt";

// Data to be written to the file
$data = "This is the initial data that will be written to the file";

// Open the file in write mode ('w')
$file = fopen($filename, 'w');

// Check if the file is opened in write mode successfully
if ($file) {
    // Write the data into the file
    fwrite($file, $data);

    // Close the file
    fclose($file);

    echo "Data written successfully.";
} else {
    echo "Could not open the file for writing.";
}

// Append the data to the file after closing
$data_to_append = "\nThis is the new data that will be appended to the file";

// Open the file in append mode ('a')
$file = fopen($filename, 'a');

// Check if the file is opened in append mode successfully
if ($file) {
    // Write the data into the file
    fwrite($file, $data_to_append);

    // Close the file
    fclose($file);

    echo "Data appended successfully.";
} else {
    echo "Could not open the file for appending.";
}
?>