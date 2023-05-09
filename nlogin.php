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
  if (isset($_POST['username'])) {
    // Access the value of $_POST['username'] here
    // Get username and password from form submission
      $user = mysqli_real_escape_string($conn, $_POST['username']);
    } else {
    // Handle the case where $_POST['username'] is not set
    }
    if (isset($_POST['password'])) {
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
  } else {
    // Handle the case where $_POST['username'] is not set
    }
// Query database for matching user
$sql = "SELECT * FROM `user` WHERE uemail='$user' AND upassword ='$pass'";
$sqll= "SELECT * FROM `eadmin` WHERE aemail='$user' AND apassword='$pass'";
$result = mysqli_query($conn, $sql);
$resullt = mysqli_query($conn, $sqll);

// Check if   query returned a match
if (mysqli_num_rows($result) == 1) {
    // Authentication successful, set session variable
    session_start();
    $_SESSION['username'] = $user;
    // echo "Welcome, $user!";
    header("Location: ../Home page/home page.html");

} elseif (mysqli_num_rows($resullt) == 1) {
  // Authentication successful, set session variable
  // session_start();
  $_SESSION['username'] = $user;
//   echo "Welcome, $user!";
    header("Location: ../New Admin panal/new admin panal.html");
  }else{
    //  $error="Invalid username or password." ;
     // Authentication failed
//  echo "$error";
}

// Close database connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en" style="font-size: 20px;">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>nLogin page</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Jomhuria&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="logincss"> -->
  <!-- <link rel="stylesheet" href="logincss"> -->
  <!-- <link rel="stylesheet" href="logincss.css"> -->
  <link rel="stylesheet" href="../login/logincss.css">
</head>
 <body>
   <!-- <span class="logo"><a class="logo" href="../top 10 page/top 10 page .html" target="_blank"><img class="logo-1" src="../logo-maison.jpg" alt="logo" width="200px" height="200px"></a></span> -->
   <!-- <span class="logo"><a class="logo" href="../top 10 page/top 10 page .html" target="_blank"><img class="logo-1" src="../logo-maison.jpg" alt="logo" width="200px" height="200px"></a></span> -->
  <img src="../logo-maison.jpg" alt="" width="200px " height="200px">
  <!-- <span class="logo"><a  class="logo" href="../top 10 page/top 10 page .html" target="_blank"></a></span> -->
   <div class="Pragraph">
    <div class="top">
      <!-- <h1> Top 10  </  h1>  -->
    </div>
      <h4>Top 10 helps you choose your mobile phone in the easiest way, register and discover.</h4>
  </div>
  <form action="" method="post">
  <div class="porder">
  <div class="username">
      <label  for="username"><b></b></label>
      <input type="username" placeholder=" username" name="username" required><br> <br>
  </div>
  <div class="Password">
      <label for="password"><b></b></label>
      <input class="password" type="password" placeholder=" Password" name="password" required><br ><br>
  </div>

 
      <button type="submit" class="btn login" onclick="Location:login.php"> login </button><hr>

      <button class="btn create">
        <a href="../create/Create.html" target="blank" title=>create new account</a> </button>
     <!-- <div class="new"><a href="../create/Create.html"target="blank" title="Creat New Acoount">  </a></div> -->

  </div>
</form>
</body> 
