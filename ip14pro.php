<?php
$con = mysqli_connect("localhost","root","","ntop10");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT `pprice`FROM `product` WHERE pcode= 1";
$result = mysqli_query($con, $sql);

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I phone 14 pro</title>
    <link rel="stylesheet" href="i phone 14 pro.css">
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
     <span class="logo"><a class="logo" href="../top 10 page/top 10 page .html"><img class="logo-1" src="../logo-maison.jpg" alt="logo" width="160px" height="180px"></a></span>    
</nav> 
<ul>
    <video autoplay muted loop src="../i phone 14 pro/14 pro video.mp4" controls width="1600px" height="350px"></video>
    <img class="img-1" src="../i phone 14 pro/Apple-iphone-14-pro-white-removebg-preview.png" alt=""> 
    <img class="img-2" src="../i phone 14 pro/Apple-iphone-14-pro-black-removebg-preview.png" alt="">
    <li> <h3>I phone 14 pro</h3></li>
    <b>
        <div>
            أعلنت شركة أبل عن تغيير كبير في هاتفها المميز iPhone 14 Pro بحجم مقبول مع مواصفات جبارة وتطويرات كثيرة عن الإصدار السابق الـ iPhone 13 Pro ابرزها في تصميم الشاشة واستخدام شاشة جديدة داعمة للـ Always On Display مع استخدام معالج ابل الجديد الـ A16 Bionic مع استخدام كاميرات خلفية أفضل نسبياً فدعونا نتعرف على المواصفات الكاملة للهاتف 
        </div>
    </b>
        <br> <br>
    <b>

        <li>
            المعالج: سداسي النواة Apple A16 Bionic تكنولوجيا 4 نانو        </li>
        <li>
            التخزين / الرام: 128/256/512/1000 جيجا مع 6 جيجا رام
        </li>
        <li>
            الكاميرا: خلفية 48+12+12 م.ب.+TOF 3D / امامية 12+SL 3D
        </li>
        <li>
            الشاشة: 6.1 بوصة بدقة 1179x2556 بها نوتش جديد
         </li>
            <li>نظام التشغيل: IOS 16</li>
             <li>
                البطارية: 3200 مللي أمبير</li>   
            <!-- <li><h3>السعر:45000</h3></li> -->
            <li> <h3><?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo "السعر: ";
                echo $row['pprice']; ?></td>
        <?php } ?></h3></li>
    </b>    
        
    <li><button><a href="../Confirm the purchase/Confirm Iphone 14 pro/Confirm Iphone 14 pro.php" class= "as">Add to curt</a></button></li>  
</ul>

</body>
</html>