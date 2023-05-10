<?php
$con = mysqli_connect("localhost","root","","ntop10");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT `pprice`FROM `product` WHERE pcode= 10";
$result = mysqli_query($con, $sql);

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../logo-maison.jpg" type="image/x-icon">
    <link rel="stylesheet" href="stylesheet S23 ultra.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samsung Galaxy S23 Ultra</title>
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
        <video autoplay muted loop id="Flip4_Carousel_AnimatedKV_PC-video.mp4" controls width="1150px" height="400px" src="../samsung galaxy S23 ultra/galaxy-s23-ultra-highlights-design video.webm"></video>
        <img class="img-1" src="../samsung galaxy S23 ultra/pic S23 ultra.png" alt="" width="450px" height="450px" >
        <img class="img-2" src="../samsung galaxy S23 ultra/s22-ultra-camera-1.jpg" alt="" width="450px" height="450px" >
        <h3>Samsung Galaxy S23 Ultra</h3>
        <b>
            <div>
                يدعم الهاتف تصوير الفيديوهات الـ 8K .
كاميرات فائقة سواء الأمامية او الخلفية تعطي تجربة تصوير رائعة في كافة الاوضاع المختلفة .
معالج رائد من كوالكم قادرة على تشغيل كافة الألعاب الثقيلة والتطبيقات بدون أدنى مشكلة .
سعة البطارية رائعة تكفي طوال اليوم بسعة 5000 أمبير .
طبقة حماية على شاشة الهاتف من نوع Corning Gorilla Glass Victus 2 .
يأتي بأحدث نظام تشغيل اندرويد 13 مع واجهة سامسونج الأحدث الـ One UI 5.1 .
شاشة اموليد رائعة تدعم معدل التردد الأعلى الـ 120Hz مع سطوع عالي وبألوان مشبعة وتجربة استخدام جيدة .
السماعات الخارجية تأتي بصوت ستيريو القوي الذي يقدم أداء صوتي قوي ومميز .
الهاتف مقاوم للماء والغبار بشهادة معتمدة من نوع IP68 .
دعم قلم سامسونج مع الهاتف .
تصميم رائع وشيك من سامسونج بخامات رائدة .
            </div> 
            <br> <br>
            <li>المعالج: Snapdragon 8 Gen 2 تكنولوجيا 4 نانو</li>
            <li>الرام: 12/8 جيجا رام</li>
            <li>التخزين: 128/256/512 جيجابايت / 1 تيرابايت</li>
            <li>الشاشة: 6.8 بوصة - Dynamic AMOLED 2X</li>
            <li>الكاميرا: خلفية رباعية 200+10+10+12 / أمامية 12</li>
            <li>نظام التشغيل: اندرويد 13</li>
            <li>البطارية: 5000 مللي أمبير</li>
            <li><h3><?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo "السعر: ";
                echo $row['pprice']; ?></td>
        <?php } ?></h3></li> 
            <br>
            <li><button><a href="../Confirm the purchase/Confirm Samsung Galaxy S23 Ultra/Confirm Samsung Galaxy S23 Ultra.php">Add to curt</a></button></li>  
        </b>
    </ul>

</body>
</html>