<?php
$con = mysqli_connect("localhost","root","","ntop10");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT `pprice`FROM `product` WHERE pcode= 6";
$result = mysqli_query($con, $sql);

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google pixel 7 pro</title>
    <link rel="stylesheet" href="google pixel.css">
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
        <a href="../about/index.html">About</a>
        <a href="../Services/Services.html">Services</a>
        <!-- <a href="#">Gallery</a> -->
        <a href="../contact/contact.html">Contact us</a>
     <span class="logo"><a class="logo" href="../top 10 page/top 10 page .html"><img class="logo-1" src="../logo-maison.jpg" alt="logo" width="160px" height="180px"></a></span>    
</nav> 
<ul>
    <img class="img-1" src="../google pixel 7 pro/Pixel-7-Pro-front.webp" alt=""> 
    <img class="img-2" src="../google pixel 7 pro/Pixel-7-Pro-back.webp" alt="">
    <li> <h3>Google pixel 7 pro</h3></li>
    <b>
        <div>
            بعد ما يُقارب من سنه من تقديم جوجل لسلسلة Pixel 6 السابقة، أعلنت شركة جوجل اليوم بصورة رسمية عن سلسلة Google Pixel 7 الجديدة كُليًا والتي ظهرت تسريباتها منذ أسابيع، وتسعى شركة جوجل للمنافسة مع الهواتف الرائدة المعروفة عالميًا مثل هواتف ابل وهواتف سلسلة S الرائدة من سامسونج.

        </div>
    </b>
        <br> <br>
    <b>

        <li>
            الشاشة: 6.7 بوصة - 120 هرتز - LTPO AMOLED
        </li>
        <li>
            الذاكرة الداخلية: 128 أو 256 أو 512 جيجابايت

        </li>
        <li>
            الرام: 12 جيجابايت</li>
        <li>
            الكاميرا: 50 + 48 + 12 ميجابكسل</li>
            <li>البطارية: 5000 مللي أمبير - 30 واط</li>
             <li>المعالج: Google Tensor G2</li>   
            <li><h3><?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo "السعر: ";
                echo $row['pprice']; ?></td>
        <?php } ?></h3></li>
    </b>    
        
    <li><a href="../Confirm the purchase/Confirm Google Pixel 7 Pro/Confirm Google Pixel 7 Pro.php" class= "as">Add to curt</a></li>  
</ul>
</body>
</html>