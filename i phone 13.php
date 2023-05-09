<?php
$con = mysqli_connect("localhost","root","","ntop10");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT `pprice`FROM `product` WHERE pcode= 3";
$result = mysqli_query($con, $sql);

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I phone 13</title>
    <link rel="stylesheet" href="stylesheet i phone 13.css">
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
    <img class="img-1" src="../i phone 13/Apple-iPhone-13-mini-red.webp" alt=""> 
    <img class="img-2" src="../i phone 13/Apple-iPhone-13-blue.webp" alt="">
    <li> <h3>I phone 13</h3></li>
    <b>
        <div>
            أعلنت شركة ابل عن هواتفها الجديد في مؤتمرها الرسمي حيث قامت بالإعلان عن سلسلة الـ iPhone 13 لتقوم بالإعلان عن أربعة هواتف جديدة حيث قامت بالإعلان عن الـ iPhone 13 والـ iPhone 13 Mini والـ iPhone 13 Pro والـ iPhone 13 Pro Max فكل إصدار لديه ما يميزه ولكن جميع الإصدارات تشترك من حيث المعالج القوي الـ A15 Bionic والذي يمكنك من الحصول على أقوى أداء يمكنك الحصول على في ايه هاتف ذكي فدعونا نتعرف على المواصفات الكاملة لهاتف iPhone 13 
        </div>
    </b>
        <br> <br>
    <b>

        <li>المعالج: سداسي النواة Apple A15 Bionic تكنولوجيا 5 نانو</li>
        <li> التخزين / الرام: 128/256/512 جيجا مع 4 جيجا رام</li>
        <li>الكاميرا: خلفية ثنائية 12+12 / امامية 12+SL 3D</li>
        <li>
            الشاشة: 6.1 بوصة بدقة 1170x2532 بها نوتش كبير 
        </li>
        <li>
            نظام التشغيل: IOS 15
        </li>
        <li>البطارية: 3240 مللي أمبير</li>
        <li><h3><?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo "السعر: ";
                echo $row['pprice']; ?></td>
        <?php } ?></h3></li>
    </b>    
        
    <li><a href="../Confirm the purchase/Confirm Iphone 13/Confirm Iphone 13.php" class= "as" >Add to curt</a></li>  
</ul>

</body>
</html>