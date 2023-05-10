<?php
$con = mysqli_connect("localhost","root","","ntop10");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT `pprice`FROM `product` WHERE pcode= 15";
$result = mysqli_query($con, $sql);

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realme C55</title>
    <link rel="stylesheet" href="../Realme C55/Realme C55.css">
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
       
        <a href="../contact/contact.html">Contact</a>
     <span class="logo"><a class="logo" href="../top 10 page/top 10 page .html"><img class="logo-1" src="../logo-maison.jpg" alt="logo" width="200px" height="200px"></a></span>    
</nav> 
<ul>
    <img class="img-1" src="../Realme C55/Realme C55  6.jpg" > 
    <img class="img-2" src="../Realme C55/Realme C55 3.jpg" >
    <img class="img-3" src="../Realme C55/Realme C55 4.jpg">
    <li> <h3>Realme C55</h3></li>
    <b>
        <div>
            أعلنت شركة ريلمي عن هاتفها الجديد الـ Realme C55 والذي يعتبر أول هاتف من ريلمي يدعم الـ Dynamic Island ومع استخدام معالج ميديا تيك الـ Helio G88 مع كاميرات خلفية تصل إلى 64 ميجا بكسل مع شاشة من نوع IPS ولكن بدقة FHD+ داعمه لمعدل التحديث الـ 90Hz مع بطارية عملاقة بسعة 5000 مللي أمبير مع شحن سريع بقوة 33 واط .. فدعونا نتعرف على المواصفات الكاملة لهاتف Realme C55 وما هي أهم مميزاته وعيوبه وهل يستحق الشراء أم لا على النحو التالي فيما يلي .


        </div>
    </b>
        <br> <br>
    <b>

        <li> 
                 المعالج: ثماني النواة Helio G88 تكنولوجيا 12 نانو  </li>
        <li>
            التخزين / الرام: 256/128 جيجا بايت مع 8/6 جيجا رام </li>
        <li>
            الكاميرا: خلفية 64+2 م.ب. / امامية 8 م.ب.</li>
        <li>
            الشاشة: 6.72 بوصة بدقة 1080x2400 بها ثقب صغير</li>
            <li>
                نظام التشغيل: اندرويد 13</li>

             <li>
                البطارية: 5000 مللي أمبير</li>   

            <li><h3><?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo "السعر: ";
                echo $row['pprice']; ?></td>
        <?php } ?></h3></li>
    </b>    
        
    <li><button><a href="../Confirm the purchase/Confirm Realme C55/Confirm Realme C55.php">Add to curt</a></button></li>  
</ul>
</body>
</html>