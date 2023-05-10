<?php
$con = mysqli_connect("localhost","root","","ntop10");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT `pprice`FROM `product` WHERE pcode= 7";
$result = mysqli_query($con, $sql);

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Plus 10 T</title>
    <link rel="stylesheet" href="style sheet one plus 10 t .css">
    <link rel="shortcut icon" href="../logo-maison.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <form action="" method="post"></form>
    <div class="topnav">
      <a href="../تسجيل دخول/loogin.php" title=""><i class="fa fa-fw fa-user"></i> logout</a>
      <input type="text" placeholder="بحث">
      <label for="Search"></label>
      <a href="#"><i class="fa fa-fw fa-search"></i></a>
    </div>
    <nav>   
        <a href="../Home page/home page.html">Home</a>
        <a href="../about/About.html">About</a>
        <a href="../Services/Services.html">Services</a>
        <!-- <a href="#">Gallery</a> -->
        <a href="../contact/contact.html">Contact us</a>
     <span class="logo"><a class="logo" href="../top 10 page/top 10 page .html"><img class="logo-1" src="../logo-maison.jpg" alt="logo" width="200px" height="200px"></a></span>    
</nav> 
<ul>
    <img class="img-1" src="../one plus 10 T/one plus 10T-front.jpeg" alt="" width="450px" height="450px"> 
    <img class="img-2" src="../one plus 10 T/one plus 10T-back.jpeg" alt="" width="480px" height="450px">
    <li> <h3>One Plus 10 T</h3></li>
    <b>
        <div>
            اصدرت شركة وان بلس العالمية هاتف OnePlus 10T الذي يأتي بمواصفات تتمثل في شاشة 6.7 بوصة بدقة 1080 * 2412 بكسل من نوع Fluid AMOLED, 1B colors, 120Hz و معالج ثماني النواة من نوع Qualcomm SM8475 Snapdragon 8+ Gen 1 (4 nm) و الكاميرا الخلفية 50 + 8 + 2 ميجا بكسل بفتحات عدسة f/1.8 للاولي و f/2.2 للثانية و f/2.4 للثالثة و الكاميرا الامامية 16 ميجا بكسل بفتحة عدسة f/2.4 و البطارية 4800 مللي امبير تدعم الشحن السريع .
        </div>
    </b>
        <br> <br>
    <b>

        <li>  50mp:الكاميرا  </li>
        <li> Snapdragon 8+ Gen 1 :المعالج</li>
        <li>16 GB:رام</li>
        <li> 256 GB:الذاكرة</li>
        <li>4800mAh:البطارية </li>
        <li><h3><?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo "السعر: ";
                echo $row['pprice']; ?></td>
        <?php } ?></h3></li>
    </b>    
        
    <li><button><a href="../Confirm the purchase/Confirm One Plus 10 T/Confirm One Plus 10 T.php">Add to curt</a></button></li>  
</ul>
</body>
</html>