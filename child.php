<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="logo.png">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>غصين</title>
  <style>
    body {
      background-image: url(css/3.png);
    }
  </style>
</head>
<?php 
  session_start();
  ?>
<body>
<a href="index.php"> <img class="logo" src="logo.png" alt="logo" width="170" hieght="170"></a>
  <nav>
    <a href="Flowers.php">أزهار</a>
    <div class="dropdown">
      <button class="dropbtn">نباتات
      </button>
      <div class="dropdown-content">
        <a href="khindex.php">نباتات خارجية</a>
        <a href="Dindex.php">نباتات داخلية</a>
        <a href="eat.php">نباتات صالحة للأكل</a>
      </div>
    </div>
    <a href="needCultivation.php">أماكن تحتاج للزراعة</a>
    <a href="addPlant.php">زودنا بخبرتك</a>
    <div class="dropdown">
      <button class="dropbtn" onclick="window.location='home.php';">نورني
      </button>
      <div class="dropdown-content">
        <a href="distroy.php">أخطاء تقتل النباتات</a>
        <a href="advantages.php">لماذا النباتات مهمة في حياتنا؟</a>
        <a href="advice.php">نصيحة عن التربة</a>
        <a href="name.php">كيف تسمي نباتاتك</a>
        <a href="clean.php">تنظيف النباتات</a>
        <a href="pests.php">مبيدات حشرية</a>
      </div>
    </div>
    <a href="child.php">علم طفلك بصريا</a>
    <div class="dropdown">
      <button class="dropbtn"><i class="fa fa-user"></i>
      </button>
      <div class="dropdown-content">
      <?php 
     if (isset( $_SESSION["loggedUser"])) {
    echo' <a href="logout.php">تسجيل الخروج</a>';}
     else {  echo' <a href="login.php">تسجيل الدخول</a>';}
     ?>
      <?php 
     if (isset( $_SESSION["loggedUser"])) {
    echo' <a href="deleteAccount.php">حذف الحساب</a>';
  }
     ?>
        
      </div>
    </div>

  </nav>
 
  <h1 class="heading">علم طفلك بصرياً</h1>
  <p><b>فيديوهات رائعة تحتوي على قيمة تربوية عظيمة واهدف تعليمية عن النباتات وكيفية حصول عليها</p></b>

  <table>
    <tr>
      <td>
        <div class="card">
          <iframe src="https://www.youtube.com/embed/d3z3rsVdKLc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
          <h3>كيف أتعامل مع النباتات ؟ </h3>
          <p><b>رعاية النباتات والعناية بها تساعد الطفل على تعزيز شعوره بالمسؤولية والإنجاز فضلاً عن التأثير الإيجابى للتواصل مع الطبيعة على صحته النفسي</p></b>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="card">
          <iframe src="https://www.youtube.com/embed/eWmMn13286U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
          <h3>كيف تزرع نباتك ؟ </h3>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="card">
          <iframe src="https://www.youtube.com/embed/tHngJrLIYHY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
          <h3>تعرف على أجزاء النباتات </h3>
          <p><b>النباتات مشابهه للإنسان الى حد كبير فكما للإنسان أعضاء تقوم بمهام مختلفة فان للنباتات أجزاء مختلفة لكل منها وظيفة خاصة </p></b>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="card">
          <iframe src="https://www.youtube.com/embed/RuhrSD7dal8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>
          <h3>مراحل نمو النبات </h3>
          <p><b>مراقبة البذور ومشاهدتها تنمو يساعد الطفل على أن يعرف أكثر عن عملية النمو والبيئة وعن المواد الغذائية التى يأكلها</p></b>
        </div>
      </td>
    </tr>
  </table>
  <script src="js/index.js"></script>
  <footer>&copy;2021</footer>
</body>

</html>
