<?php
$con = mysqli_connect("localhost","root","","ntop10");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT `pprice`FROM `product` WHERE pcode= 5";
$result = mysqli_query($con, $sql);

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" 
    href="../Confirm Asus Zenfone 9/logo-maison-removebg-preview.png" 
    type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Asus Zenfone 9</title>
    <link rel="stylesheet" href="../Confirm Asus Zenfone 9/Confirm Asus Zenfone 9.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="topnav">
      <a href="../login/login.html" title="">
        <i class="fa fa-fw fa-user"></i> 
        logout</a>
      <input type="text" placeholder="بحث">
      <label for="Search"></label>
      <a href="#"><i class="fa fa-fw fa-search"></i></a>
    </div>
<img src="../Confirm Asus Zenfone 9/logo-maison-removebg-preview.png"  width="250px" height="250px" alt="">
    <!-- <div class="p">  <h1>Top 10 helps you choose your mobile phone in the easiest way, register and discover.</h1>
    </div> -->
    
        <form action="../confirmsels.php" method="post">
    
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>
    
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="price">price:</label>
            <input type="text" id="price" name="price" readonly required value= 
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <?php 
                echo $row['pprice']; ?>
        <?php } ?>
        >
            
            <input type="radio" name="cash" value="cash" checked>
                <label for="cash">الدفع عند الاستلاام</label><br>

            <input type="submit" value="Submit">

            <img class="img2" src="../Confirm Asus Zenfone 9/logo-maison-removebg-preview.png"  alt="">

            <h1>  Asus Zenfone 9</h1>
            <Ul class="p1">
                <li>       مساحه داخليه256 جيجا بايت 
                </li>

                
            </Ul>
        
        <ul class="p2">
            <li>            16جيجا رام
            </li>
        </ul>
        <ul class="p3">
            <li>اللون الرمادي</li>
        </ul>            
        
</body>

</html>

