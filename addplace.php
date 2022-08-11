<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>  اضاقة موقع </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="logo.png">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/index.js"></script>
  <style>
  body{
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

<?php require 'contact.php';

session_start();


ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

$placename = $_POST['placename'];
$area = $_POST['area'];
$city = $_POST['city'];
$description = $_POST['description'];
$map = $_POST['map'];
$image = $_POST['image'];


if (isset ($_POST['adding_submit'])) { 
  if (empty($placename)&&empty($area)&&empty($city)&&empty($description)&&empty($map)&&empty($image))
  {
    echo "<script>alert('تأكد من تعبئة جميع الخانات')
    </script>";
  }

else{
    $querydata = "INSERT INTO add_place VALUES ('{$_POST['placename']}','{$_POST['area']}','{$_POST['city']}','{$_POST['description']}','{$_POST['map']}','{$_POST['image']}')";
    if (@mysqli_query ($dbc, $querydata)) {
      print '<br><br><br><br><br><br><p>تم الاضافه شكرا لك </p><br><br><br>';
      }
      else {
      print "<p>Could not add the entry because: <b>" . mysqli_error($dbc) . "</b>. The query was $querydata.</p>";
        }
}
  }
  mysqli_close($dbc);
?>


<form class="bottom forms" action="#addplace.php" method="post">
   <br> <br>  <br> <br>  <br> <br>
    <div class="row">
      <div class="col-1">
        <label for="place">:المكان</label>
      </div>
      <div class="col-2">
        <input type="text" name="placename" id="place">
      </div>
    </div>
    <div class="row">
      <div class="col-1">
        <label for="region">:المنطقة</label>
      </div>
      <div class="col-2">
        <input type="text" name="area" id="region">
      </div>
    </div>
    <div class="row">
      <div class="col-1">
        <label for="city">:المدينة</label>
      </div>
      <div class="col-2">
        <input type="text" name="city" id="city">
      </div>
    </div>
    <div class="row">
      <div class="col-1">
        <label for="description">:وصف للعنوان</label>
      </div>
      <div class="col-2">
        <input type="text" name="description" id="description">
      </div>
    </div>
    <div class="row">
      <div class="col-1">
        <label for="map">:رابط الموقع</label>
      </div>
      <div class="col-2">
        <input type="text" name="map" id="map">
      </div>
    </div>
    <div class="row">
      <div class="col-1">
        <label for="picture">:أضف صورة</label>
      </div>
      <div class="col-2">
        <input type="file" name="image" value="أضف" id="picture">
      </div>
    </div>
    <input type="submit" name="adding_submit" value="إضافة" class="Button">

  </form>


  <script src="js/index.js"></script>
</body>