<?php
$con = mysqli_connect("localhost","root","","ntop10");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT `pprice`FROM `product` WHERE pcode= 14";
$result = mysqli_query($con, $sql);

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppo-Reno-9</title>
    <link rel="stylesheet" href="Oppo-Reno-9.css">
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
    <img class="img-1" src="../Oppo-Reno-9/Oppo-Reno-9.webp" alt=""> 
    <img class="img-2" src="../Oppo-Reno-9/oppo reno blak.jpg" alt="">
    <img class="img-3" src="oppo reno  red.jpg">
    <li> <h3>Oppo-Reno-9</h3></li>
    <b>
        <div>
            أعلنت شركة اوبو في الخارج عن سلسلة Reno 9 المفضلة لدى كثير من المستخدمين حيث تم الإعلان عن هاتفها الجديد الـ Oppo Reno 9 5G والذي يمتاز بمواصفات جيدة جداً حيث تم الاهتمام بالتصميم فالهاتف يأتي بشاشة أموليد 120 هيرتز مع استخدام معالج كوالكم من نوع Snapdragon 778G مع كاميرات خلفية تصل دقتها إلى 64 ميجا بكسل وكاميرا أمامية 32 ميجا بكسل فدعونا نتعرف على المواصفات الكاملة لهاتف Oppo Reno 9 5G وما هي أهم مميزاته وعيوبه وهل يستحق الشراء أم لا على النحو التالي فيما يلي .



        </div>
    </b>
        <br> <br>
    <b>

        <li>
            المعالج: ثماني النواة Snapdragon 778G 5G تكنولوجيا 6 نانو
        </li>
        <li>
            التخزين / الرام: 256/512 جيجا بايت مع 8/12 جيجا رام

        </li>
        <li>
            الكاميرا: خلفية 64+2 م.ب. / امامية 32 م.ب.</li>
        <li>
            الشاشة: 6.7 بوصة بدقة 1080x2412 بها ثقب صغير</li>
            <li>
                نظام التشغيل: اندرويد 13</li>
             <li>البطارية: 4500 مللي أمبير</li>   
            <li><h3><?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo "السعر: ";
                echo $row['pprice']; ?></td>
        <?php } ?></h3></li>
    </b>    
        
    <li><button><a href="../Confirm the purchase/Confirm OppO Reno9/Confirm OppO Reno9.php">Add to curt</a></button></li>  
</ul>
</body>
</html>