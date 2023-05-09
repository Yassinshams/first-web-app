<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ntop10";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$table = $_POST['table'];
$column = $_POST['search'];
$data =$_POST['data'];

// perform select query with order by clause
$sql = "DELETE FROM `$table` WHERE $column='$data'";
// $result = mysqli_query($conn, $sql);


if ($conn->query($sql) === TRUE) {
    echo "Record(s) deleted successfully";
  } else {
    echo "Error deleting record(s): " . $conn->error;
  }
  
  // Close the connection
  $conn->close();
  
  ?>