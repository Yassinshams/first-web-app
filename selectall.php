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

// get user input
$table = $_POST['table'];
// $column = $_POST['search'];
// $data =$_POST['data'];
// perform select query with order by clause
$sql = "SELECT * FROM $table";
$result = mysqli_query($conn, $sql);

// display results
if (mysqli_num_rows($result) > 0) {
    if ($table == 'user') {
    echo "<table>";
    echo "<tr>
    <th>uid</th>
    <th>uemail</th>
    <th>upassword</th>
    <th>uname</th>
    <th>uphone</th>
    <th>uaddress</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["uid"] . "</td><td>" . $row["uemail"] . "</td><td>" . $row["upassword"] . "</td><td>". $row["uname"] . "</td><td>" . $row["uphone"] . "</td><td>" . $row["uaddress"] . "</td></tr>";
    }
    //هنا قولت لو اديته اسم الجدول coustmers اعرض الشغل الي فوق 
    //و لو الجدول employess اشتغل علي الشغل الي تحت  
    echo "</table>";
    }elseif ($table == 'eadmin') {
        echo "<table>";
    echo "<tr>
    <th>aid</th>
    <th>aemail</th>
    <th>apassword</th>
    <th>aname</th>
    <th>aphone</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["aid"] . "</td><td>" . $row["aemail"] . "</td><td>" . $row["apassword"] . "</td><td>". $row["aname"] . "</td><td>" . $row["aphone"] . "</td></tr>";
    }
    echo "</table>";
    //if table = supplier
    //
    //
    //
    }elseif ($table == 'supplier') {
        echo "<table>";
        echo "<tr>
        <th>sucode</th>
        <th>suname</th>
        <th>sudata</th>
        <th>suphone</th>
        <th>suproduct</th>
        </tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["sucode"] . "</td><td>" . $row["suname"] . "</td><td>" . $row["sudata"] . "</td><td>". $row["suphone"] . "</td><td>" . $row["suproduct"] . "</td></tr>";
            }
        echo "</table>";
//if table = product
//
//
//  
    }elseif ($table == 'product') {
        echo "<table>";
        echo "<tr>
        <th>pcode</th>
        <th>pname</th>
        <th>pprice</th>
        <th>pquantity</th>
         </tr>";
        while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["pcode"] . "</td><td>" . $row["pname"] . "</td><td>" . $row["pprice"] . "</td><td>" . $row["pquantity"] . "</td></tr>";
        }
     echo "</table>";
    //if table = seles
    //
    //
    //
    }elseif ($table == 'seles') {
        echo "<table>";
        echo "<tr>
        <th>scode</th>
        <th>snumber</th>
        <th>sdata</th>
        <th>sprice</th>
        </tr>";
        while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["scode"] . "</td><td>" . $row["snumber"] . "</td><td>" . $row["sdata"] . "</td><td>" . $row["sprice"] . "</td></tr>";
    }
        echo "</table>";
    } else {
    echo 'Unknown table';}
}else {
    echo "No results found.";
}

// close database connection
mysqli_close($conn);

?>