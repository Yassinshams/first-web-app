<?php
$con = mysqli_connect("localhost","root","","ntop10");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT `pprice`FROM `product` WHERE pcode= 8";
$result = mysqli_query($con, $sql);

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet asus zenfone8.css">
    <link rel="shortcut icon" href="../logo-maison.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Asus zenfone 8</title>
</head>
<body>
    <form action="" method="post"></form>
    <div class="topnav">
      <a href="../تسجيل دخول/loogin.php" title=""><i class="fa fa-fw fa-user"></i> log out </output></a>
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
      <img class="img-1" src="../asus zenfone 8/asus zenfone 8.png" alt="" width="450px" height="450px">
      <img class="img-2" src="../asus zenfone 8/Asus-Zenfone-2.jpg" alt="" width="450px" height="450px">
      <h3>Asus zenfone 8</h3>
    <b>
        <div>
            أبعاد الهاتف هي 148×68.5×8.9 ملم ويزن 169 جرام.
            مقاومة للمياه والغبار بمعيار IP68.
            شاشة SuperAMOLED بقياس 5.9 بوصة بمعدل تحديث 120 هرتز ودقة 1080×2400 بكسل لتصل كثافة البيكسل بذلك إلى 446 وحدة للبوصة المربعة، الشاشة تدعم تقنية HDR10+ و خاصية Always-on display.
            مجموعة شرائح Qualcomm Snapdragon 888 5G تحتوي على معالج رسوميات وفيديو من نوع Adreno 660 وهي نفس مجموعة الشرائح المستخدمة في OnePlus 9 Pro وXiaomi Mi 11 Ultra وغيرهم.
            يتوفر الهاتف بنسخ متعددة بالنسبة لحجم الرام وذاكرة التخزين الداخلية تبداً بـ 6 جيجابايت رام وتنتهى عند 16 جيجابايت و 128 جيجابايت أو 256 جيجابايت لمساحة التخزين الداخلية، الرام من النوع LDRR5 أما وحدة التخزين فهي UFS 3.1.
            لا يُمكن تركيب بطاقة تخزين خارجية MicroSD.
            يعمل الهاتف بواجهة تشغيل أسوس الخاصة ZenUI 8 القريبة من الأندرويد الخام والمبنية على Android 11.
            كاميرا خلفية ثنائية بدقة 64 ميجا بكسل و 12 ميجا بكسل ومزودة بمثبت بصري OIS وفلاش LED أحادي.
            كاميرا أمامية على شكل “ثقب” بدقة 12 ميجا بكسل.
            بطارية 4000 ملي أمبير تدعم الشحن السريع USB Power Delivery 3.0 بقوة 30 واط.
            يمتلك الهاتف منفذ شحن USB Type-C 2.0 ومقبس 3.5 ملم الخاص بسماعات الأذن.
            مكبرات صوت ستريو بدعم Dirac HD Sound بالإضافة إلى ثلاثة ميكروفونات لتسجيل الصوت وعزل الضوضاء.
            مستشعر قارئ بصمات الأصبع مُدمج بالشاشة.
            يوفر الهاتف مستشعرات للتقارب والتسارع والجيرسكوب والبوصلة والضوء المحيط.
            يوجد مفتاح ذكي على الجانب الأيسر يمكن تهيئته لتشغيل ثلاثة إجراءات مختلفة.
            يدعم الهاتف أحدث تقنيات الواي فاي Wi-Fi/6e و Bluetooth 5.2 بجانبGPS/dual-band A-GPS, GLONASS, GALILEO, BDS, QZSS, NavIC وتقنية الـ NFC وراديو FM (خارج أسواق الاتحاد الأوروبي.
            يتوفر الهاتف باللونين الأسود والفضي.
            
        </div>
        <ul>
          <li>الشاشة: 5.9 بوصة"</li>  
          <li>الكاميرا: مزدوجة: 64+12 ميجا بكسل</li>  
          <li>الذاكرة العشوائية: 6/8/16 جيجابايت</li>  
          <li> البطارية: 4000 ملى امبير</li>  
          <li> نظام التشغيل: اندرويد 11</li>  
          <li>المعالج: Snapdragon 888 5G</li>
          <li><h3><?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo "السعر: ";
                echo $row['pprice']; ?></td>
        <?php } ?></h3></li>  
          <br>
            <li><a href="../Confirm the purchase/Confirm Asus Zenfone 8/Confirm Asus Zenfone 8.php" class= "as">Add to curt</a></li>  
        </ul>
    </b>
</body>
</html>