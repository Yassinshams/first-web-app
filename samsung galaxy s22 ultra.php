<?php
$con = mysqli_connect("localhost","root","","ntop10");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT `pprice`FROM `product` WHERE pcode= 9";
$result = mysqli_query($con, $sql);

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>samsung galaxy s22 ualtra</title>
    <link rel="stylesheet" href="samsung galaxy s22 ultra.css">
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
        <img class="img-1" src="../top 10 page/pic for project/samsung galaxy S22 Ultra.webp" alt="phone 5" width="450px" height="450px">
        <img class="img-2" src="../top 10 page/pic for project/samsung galaxy S22 Ultra.webp" alt="phone 5" width="450px" height="450px">
</ul>
<h3>Samsung Galaxy s22 ultra</h3>
<div>
    <b>
        <p>وفرت لنا سامسونج هاتفها الرائد القوي الـ Samsung Galaxy S22 Ultra 5G مع مواصفات ممتازة حيث تأتي مع شاشة عملاقة بدقة ممتازة تدعم خاصية الـ 120Hz مع بطارية كبيرة السعة وشحن سريع بصورة ممتازة مع كاميرات تعد الأفضل كما هو معتاد من سامسونج مع قلم S-Pen بداخل الهاتف كما تعودنا في سلسلة النوت سابقا .. فهل سيكون الهاتف هو الأقوى بين الهواتف الرائدة حالياً فدعونا نتعرف على المواصفات الكاملة للهاتف وما هي أهم مميزاته وعيوبه على النحو التالي فيما يلي</p>
    </b>
</div>
<ul>
    <li>
        المعالج: ثماني النواة Snapdragon 8 Gen 1 تكنولوجيا 4 نانو</li>
    <li>التخزين / الرام: 256 جيجا مع 12 جيجا رام</li>
    <li>
        الكاميرا: خلفية رباعية 108+10+10+12 م.ب. / امامية 40 م.ب.</li>
    <li>الشاشة: 6.8 بوصة بدقة QHD+ بها ثقب صغير</li>
    <li>نظام التشغيل: اندرويد 12</li>
    <br>
    <li><h3><?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo "السعر: ";
                echo $row['pprice']; ?></td>
        <?php } ?></h3></li>
        <li><button><a href="../Confirm the purchase/Confirm Samsung Galaxy S22 Ultra/Confirm Samsung Galaxy S22 Ultra.php">Add to curt</a></button></li>  
</ul>

</body>
</html>