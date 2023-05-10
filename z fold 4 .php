<?php
$con = mysqli_connect("localhost","root","","ntop10");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT `pprice`FROM `product` WHERE pcode= 11";
$result = mysqli_query($con, $sql);

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samsung-Z-Fold-4</title>
    <link rel="stylesheet" href="style sheet z fold 4 .css">
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
    <img class="img-1" src="../Z fold 4/samsung galaxy Z fold 4.webp" alt="" width="450px" height="450px">
    <img class="img-2" src="../Z fold 4/galaxy-z-fold4_highlights_kv.webp" alt="" width="450px" height="450px">
    <li><h3>Samsung Galaxy Z fold 4</h3></li>
</ul>
<div>
    <b>
        أعلنت سامسونج عن أغلى هواتفها القابلة للطي Samsung Galaxy Z Fold 4 بتطويرات متوسطة عن الجيل السابق فلقط تم استخدام أحدث معالج كوالكم الرائد مع كاميرات أفضل مع التركيز بشكل اساسي على تطوير تقنية الشاشات القابلة للطي ، فقد تم الاهتمام بتقليل حجم المفصله لتصبح أفضل من الاصدار السابق … فدعونا نتعرف على المواصفات الكاملة لهاتف Samsung Galaxy Z Fold 4
    </b>
    </div>
<br> <br>
<b>
    <ul>
        <li>  الكاميرا: خلفية ثلاثية 50+10+12 م.ب. / امامية 4+10 م.ب.</li>
        <li>المعالج: ثماني النواة Snapdragon 8 Plus Gen 1 تكنولوجيا 4 نانو</li>
        <li>12 :رام</li>
        <li> 256 GB:الذاكرة</li>
        <li>4400mAh:البطارية </li>
        <li><h3><?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo "السعر: ";
                echo $row['pprice']; ?></td>
        <?php } ?></h3></li>
        <li><button><a href="../Confirm the purchase/Confirm Samsung Galaxy Z fold 4/Confirm Samsung Galaxy Z fold 4.php">Add to curt</a></button></li>  
    </ul>
</b>
</body>
</html>