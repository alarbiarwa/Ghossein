<!DOCTYPE html>
<html dir="rtl">

<head>

  <meta charset="utf-8">
  <title>نوّرني</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="logo.png">
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      background-image: url(css/2.png);
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

  <div class="top details">
    <h2>نوّرني</h2>
    <p>اكيد حاليًا خطر ببالك تساؤل لما دخلت هالصفحه, اللي هو .. ايش يعني نوّرني؟</p>
    <p>بينما يتعامل غُصين مع تفاصيل النباتات و الزهور و مشاركة مختلف الأنواع بطرق العناية الخاصة بها ,
      فإن هذا الجزء مخصّص لإرشادات عامّة للنباتات داخل المنزل
      <br>
      أحيانًا تراودك بعض الأسئلة عن النباتات و تحتار في إيجاد المعلومة الصحيحة .. لا تشيل هم, هنا راح نطرح أهم و أكثر الأسئلة
      <br>
      اللي ممكن تجيب على تساؤلاتك , و أيضًا بعض الأسلة اللي ممكن تستغربها و توسّع مداركك !
    </p>
    <p>و هنا إجابات أهم التساؤلات المتواردة</p>
    </div>

    <table>
      <tbody>
        <tr>
          <td>
            <div class="home card">
              <img src="images/des.jpeg" style="width:90%" onclick="window.location.href = 'distroy.php';">
              <input type="button" value="أخطاء تقتل النباتات" class="bold" onclick="window.location.href = 'distroy.php';">
            </div>
          </td>

          <td>
            <div class="home card">
              <img src="images/variousplant.jpg" style="width:90%" onclick="window.location.href = 'advice.php';">
              <input type="button" value="نصيحة عن التربة" class="bold" onclick="window.location.href = 'advice.php';">
          </td>

          <td>
            <div class="home card">
              <img src="images/images.jfif" style="width:90%" onclick="window.location.href = 'name.php';">
              <input type="button" value="كيف تسمّي نباتك؟" class="bold" onclick="window.location.href = 'name.php';">
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div class="home card">
              <img src="images/plants.jpg" style="width:90%" onclick="window.location.href = 'advantages.php';">
              <input type="button" value="أهميّة النباتات" class="bold" onclick="window.location.href = 'advantages.php';">
            </div>
          </td>

          <td>
            <div class="home card">
              <img src="images/pes.jpeg" style="width:90%" onclick="window.location.href = 'pests.php';">
              <input type="button" value="مبيدات حشريّة" class="bold" onclick="window.location.href = 'pests.php';">
            </div>
          </td>

          <td>
            <div class="home card">
              <img src="images/clean.jfif" style="width:90%" onclick="window.location.href = 'clean.php';">
              <input type="button" value="تنظيف النباتات" class="bold" onclick="window.location.href = 'clean.php';">
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
<script src="js/index.js"></script>
<footer>&copy;2021</footer>
</body>

</html>
