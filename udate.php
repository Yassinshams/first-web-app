<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ntop10';

// Connect to MariaDB database
$connection = new mysqli($host, $username, $password, $database);

// Check if the connection is successful
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$table = $_POST['table'];
$column = $_POST['column'];
$value = $_POST['value'];
$search = $_POST['search'];
$data =$_POST['data'];
// Define the query to update data
$query = "UPDATE $table SET $column = '$value' WHERE $search = '$data'";

// Execute the query
if ($connection->query($query) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connection->error;
}

// Close the connection
$connection->close();
?>