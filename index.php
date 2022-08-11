<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>غصين</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="logo.png">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/index.js"></script>
  <style>
  body{
    background: none;
  }
  </style>
</head>
<?php require 'contact.php';

session_start();
if(isset($_COOKIE['type']))
{
 $digest = $_COOKIE['type'];
 $digest = mysqli_real_escape_string($dbc,$digest);
//التأكد من وجود الكود الأمنى فى قاعدة البيانات
$login =  "SELECT * FROM user WHERE reloginDigest = '$digest'";
$result = @mysqli_query($dbc, $login );
 
$num_rows = @mysqli_num_rows($result);
if($num_rows > 0){
 // $digest = mysqli_real_escape_string($digest);
$email="SELECT email FROM user WHERE reloginDigest = '$digest' ";
  $_SESSION["loggedUser"] = $email ;
}
}

?>
<body><a href="index.php"> <img class="logo" src="logo.png" alt="logo" width="170" hieght="170"></a>
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


<div class="top">
<img src="images/home_1.png" width="600" height="500">
<div class="top-p">
  <h1 class="underline-heading">!مرحبا بك </h1>
  <p>
    غصين هنا للإجابة على أسئلتك وإشباع فضولك
  </p>
  <button class="Button" type="button" name="button" onclick="window.location='login.php';" <?php if (isset( $_SESSION["loggedUser"])) echo 'style="display:none"';?>> تسجيل دخول</button>
 
  <button class="Button" type="button" name="button" onclick="window.location='createacc.php';"<?php if (isset( $_SESSION["loggedUser"])) echo 'style="display:none"';?>> حساب جديد</button>
</div>

</div>
  <div class="bottom">
    <img src="images/home_2.png"  width="300" height="400">
    <div class="top-p">

  <!--sarah-->
  <?php


if(isset($_COOKIE['type']))
{
 $digest = $_COOKIE['type'];
 $digest = mysqli_real_escape_string($dbc,$digest);
//التأكد من وجود الكود الأمنى فى قاعدة البيانات
$login =  "SELECT * FROM user WHERE reloginDigest = '$digest'";
$result = @mysqli_query($dbc, $login );
 
$num_rows = @mysqli_num_rows($result);
if($num_rows > 0){
 // $digest = mysqli_real_escape_string($digest);
$email="SELECT email FROM user WHERE reloginDigest = '$digest' ";
  $_SESSION["loggedUser"] = $email ;}}

//The fgets() function is used to read a single line from a file 
//outputs the first line of the "about_us.txt" file (عن غصين)
$myfile = fopen("about_us.txt", "r") or die("Unable to open file!");
$file= fgets($myfile);
print " <h1 class='underline-heading'>$file</h1>";


//reads the "about_us.txt" file line by line, until end-of-file is reached
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
<!--/sarah-->

      
    </div>
  </div>
  <script src="js/index.js"></script>
</body>

</html>
