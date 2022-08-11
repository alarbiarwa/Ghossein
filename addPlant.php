<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>زودنا بخبرتك</title>
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
<?php require 'contact.php';
$text ="";
// $text = "حتى تحظى بهذه الخاصية عليك بتسجيل الدخول أو إنشاء حساب";

session_start();
// unset($_SESSION["loggedUser"]);
// session_destroy();


  
if (isset ($_POST['adding_submit'])) {
  $plantName = $_POST['plantName'];
  $plantType = $_POST['plantType'];
  $plantCare = $_POST['plantCare'];
  $plantImage = $_POST['plantImage'];
  
  if (!isset( $_SESSION["loggedUser"])){
   $text = " حتى تحظى بهذه الخاصية عليك بتسجيل الدخول أو إنشاء حساب";
  }
  else {
    $text  = " شكرا لك";
    //&& !empty($plantImage)
    if(!empty($plantName) && !empty($plantType) && !empty($plantCare) ){
      $querydata = "INSERT INTO add_plant (plantName,plantType,plantCare,plantImage)
      VALUES ('$plantName','$plantType','$plantCare','$plantImage')";
      if (@mysqli_query ($dbc, $querydata)) {
        print '<p>نجح الادخال</p>';
        }
        else {
        print "<p>Cلم ينجح بسبب  <b>" . mysqli_error($dbc) . "</b>. The query was $querydata.</p>";
          }
    }
    else{
      print '<p style = "color:red;">اكمل جميع الخانات</p>';
    }
  
  }
}
?>
<body> <a href="index.php"> <img class="logo" src="logo.png" alt="logo" width="170" hieght="170"></a>
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

  <h1 class="heading">زودني بخبرتك</h1>
  <form class="bottom forms" action=# method="post">
    <!-- <p class="text"> حتى تحظى بهذه الخاصية عليك بتسجيل الدخول أو إنشاء حساب*</p> -->
    <p class="text"> <?php echo $text ?></p>
    <div class="log">
      <button class="Button" type="button" name="button" onclick="window.location='login.php';" <?php if (isset( $_SESSION["loggedUser"])) echo 'style="display:none"';?>>تسجيل دخول</button>
    </div>
    <div class="row">
      <div class="col-1">
        <label for="plantName">: اسم النبات</label>
      </div>
      <div class="col-2">
        <input type="text" name="plantName" id="plantName">
      </div>
    </div>
    <div class="row">
      <div class="col-1">
        <label for="plantType">: النوع</label>
      </div>
      <div class="col-2">
        <select name="plantType" id="plantType">
          <option class="dropdown" value="innerPlant">نباتات داخلية</option>
          <option class="dropdown" value="outerPlant">نباتات خارجية</option>
          <option class="dropdown" value="eatablePlant">نباتات صالحة للأكل</option>
          <option class="dropdown" value="roses">أزهار</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-1">
        <label for="plantCare">كيف تتم العناية بها؟</label>
      </div>
      <div class="col-2">
        <textarea name="plantCare" rows="10" cols="40"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-1">
        <label for="plantImage">: أضف صورة</label>
      </div>
      <div class="col-2">
        <input type="file" name="plantImage" id="plantImage">
      </div>
    </div>
    <input type="submit" name="adding_submit" value="إضافة" class="Button">
  </form>

  
/** */

//


  



 
    
  <script src="js/index.js"></script>
</body>

</html>
