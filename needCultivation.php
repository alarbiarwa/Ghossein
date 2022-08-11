<head>
  <meta charset="utf-8">
  <title>أماكن تحتاج للزراعة</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="logo.png">
  <link rel="stylesheet" href="css/style.css" />
  <script src="index.js"></script>
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

  <h1 class="heading">أماكن تحتاج للزراعة</h1>
  <table>
    <tr>
      <td>
        <div class="home card">
          <img src="images/first.jpg" alt="The area that needs cultivation" width="90%">
          <h3> حديقة مسجد الحصان</h3>
          <p> المنطقة:مكة المكرمة<br>
            المدينة: مكة<br>
            وصف للعنوان: النسيم-مخطط ستر اللحياني-مقابل مسجدالحصان<br>
            <a href="https://goo.gl/maps/ze3SLGMGRcwGJghVA" target="_blank">الموقع على الخريطة</a>
          </p>
        </div>
      </td>
      <td>
        <div class="home card">
          <img src="images/second.jpeg" alt="The area that needs cultivation" width="90%">
          <h3> ممشى بطحاء قريش</h3>
          <p> المنطقة:مكة المكرمة<br>
            المدينة: مكة<br>
            وصف للعنوان: بطحاء قريش-شارع عتاب بن أسيد<br>
            <a href="https://goo.gl/maps/yVvpiLckrNXZnuJb8" target="_blank">الموقع على الخريطة</a>
          </p>
        </div>
      </td>
      <td>
        <div class="home card">
          <img src="images/third.jpg" alt="The area that needs cultivation" width="90%">
          <h3> شارع النضر بن شفي</h3>
          <p>المنطقة:المدينة المنورة<br>
            المدينة: المدينة<br>
            وصف للعنوان: حي شوران - شارع النضر بن شفي<br>
            <a href="https://goo.gl/maps/AEFiPFDevy4iB4CMA" target="_blank">الموقع على الخريطة</a>
          </p>
        </div>
      </td>
    </tr>
  </table>

  <form class="bottom forms" action="#" method="post">
    <p class="text">اذا كنت تريد إضافة أماكن أخرى عليك بتسجيل الدخول أو إنشاء حساب *</p>

    <div class="log">
      <button type="button" name="button" class="Button" onclick="window.location='login.php';">تسجيل دخول</button><br>
    </div>

    <div class="log">
      <button type="button" name="button" class="Button" onclick="window.location='addplace.php';"> اضافة مكان</button><br>
    </div>
    


  <script src="js/index.js">

  </script>
</body>

</html>
