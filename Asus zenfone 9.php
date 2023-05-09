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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asus zenfone 9</title>
    <link rel="stylesheet" href="style sheet asus.css">
    <link rel="shortcut icon" href="../logo-maison.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <form action="" method="post"></form>
    <div class="topnav">
      <a href="../تسجيل دخول/loogin.php" title=""><i class="fa fa-fw fa-user"></i> log out </a>
      <input type="text" placeholder="بحث">
      <label for="Search"></label>
      <a href="#"><i class="fa fa-fw fa-search"></i></a>
    </div>

    <nav>   
        <a href="../Home page/home page.html">Home</a>
        <a href="../about/index.html">About</a>
        <a href="../Services/Services.html">Services</a>
        <!-- <a href="#">Gallery</a> -->
        <a href="../contact/contact.html">Contact us</a>
     <span class="logo"><a class="logo" href="../top 10 page/top 10 page .html"><img class="logo-1" src="../logo-maison.jpg" alt="logo" width="250px" height="250px"></a></span>    
    </nav>
      <img class="img-1" src="../Asus zenfone 9/asus zenfone-front.jpeg" alt="" width="450px" height="450px">
      <img class="img-2" src="../Asus zenfone 9/asus zenfone-back.jpeg" alt="" width="450px" height="450px">
      <h3>Asus zenfone 9</h3>
    <b>
        <div>
            اصدرت شركة اسوس العالمية هاتف Asus Zenfone 9 و الذي يأتي بمواصفات تتمثل في شاشة 5.9 بوصة بدقة 1080 * 2400 بكسل من نوع  Super AMOLED, 120Hz و معالج Qualcomm SM8475 Snapdragon 8+ Gen 1 (4 nm) و الكاميرا الخلفية 50 + 12 ميجا بكسل بفتحة عدسة f/1.9 للاولي و f/2.2 للثانية و الكاميرا الامامية 12 ميجا بكسل بفتحة عدسة f/2.5 و بطارية 4300 مللي امبير تدعم الشحن السريع
            
        </div>
        <ul>
          <li>الشاشة : 5.9"</li>  
          <li> الكاميرا : 50MP</li>  
          <li> المعالج : Snapdragon 8+ Gen 1</li>  
          <li> الرامات : 8/16GB</li>  
          <li> الذاكرة : 128GB/256GB</li>  
          <li> البطارية : 4300mAh</li>
          <li><h3><?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo "السعر: ";
                echo $row['pprice']; ?></td>
        <?php } ?></h3></li>  
          <br>
          <li><a href="../Confirm the purchase/Confirm Asus Zenfone 9/Confirm Asus Zenfone 9.php" class= "as">Add to curt</a></li>  
        </ul>
    </b>
</body>
</html>