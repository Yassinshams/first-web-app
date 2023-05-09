<?php
// Set database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "ntop10";

// Connect to database
$conn = mysqli_connect($host, $username, $password, $database);
$user="";
$pass="";
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the form data
    $table = "";
    $column1 = "";
    $variable1 = "";
    $column2 = "";
    $variable2 = "";
    $column3 = "";
    $variable3 = "";
    $column4 = "";
    $variable4 = "";
    $column5 = "";
    $variable5 = "";
    $column6 = "";
    $variable6 = "";
    $table = $_POST["table"];
    $stmt = "";
    // $column1 = $_POST["column1"];
    $variable1 = $_POST["variable1"];
    // $column2 = $_POST["column2"];
    $variable2 = $_POST["variable2"];
    // $column3 = $_POST["column3"];
    $variable3 = $_POST["variable3"];
    // $column4 = $_POST["column4"];
    $variable4 = $_POST["variable4"];
    // $column5 = $_POST["column5"];
    // $variable5 = $_POST["variable5"];
    // $column6 = $_POST["column6"];
    // $variable6 = $_POST["variable6"];

    if ($table == "eadmin") {
        $stmt = $conn->prepare("INSERT INTO `eadmin`( `aemail`, `apassword`, `aname`, `aphone`) VALUES ('$variable1', '$variable2', '$variable3', '$variable4')");
        // echo "Data inserted scccesfully";
    }elseif ($table == "product") {
        $stmt = $conn->prepare("INSERT INTO `product`(`pname`, `pprice`, `pquantity`) VALUES ('$variable1', '$variable2', '$variable3')");
        // echo "Data inserted scccesfully";
    // }elseif ($table == "seles") {
        // $stmt = $conn->prepare("INSERT INTO `seles`(`sname`, `sdata`, `sprice`) VALUES ('$variable1', '$variable2', '$variable3')");
        // echo "Data inserted scccesfully";
    }elseif ($table == "supplier") {
        $stmt = $conn->prepare("INSERT INTO `supplier`(`suname`, `sudata`, `suphone`, `suproduct`) VALUES ('$variable1', '$variable2', '$variable3', '$variable4')");
        // $stmt = $conn->prepare("INSERT INTO `supplier`(`supcode`, `supname`, `supdata`, `supphone`,supproduct') VALUES ('$variable1', '$variable2', '$variable3', '$variable4','$variable5')");
        // echo "Data inserted scccesfully";
    }
    // Prepare the SQL statement
    // $stmt->bind_param($variable1,$variable2,$variable3,$variable4,$variable5,$variable6);

    // Execute the statement
    if ($stmt->Execute()) {
        // echo"<br>";
        echo "Data inserted successfully";
        // header("Location: ../../login/login.php");
    } else {
        echo "Error inserting data: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>