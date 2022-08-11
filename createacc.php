<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title> انشاء حساب </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="icon" href="logo.png">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/index.js"></script>
  <style>
  body{
    background-image: url(css/2.png);
  }
  .error {color: #FF0000;}
  </style>
 
</head>

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


<?php require 'contact.php';

ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);





if (isset ($_POST['signin_submit'])) { 
  $email = $_POST['email'];
$pass = $_POST['pass'];
$psw_repeaat = $_POST['psw_repeaat'];

//$email = test_input($_POST["email"]);
// check if e-mail address is well-formed
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
  echo "<script>alert('تأكد من البريد الالكتروني');
</script>";}
else{

if ($_POST['pass']==$_POST['psw_repeaat']&& strlen($_POST['pass']) >= 8  ){
 
    $querydata = "INSERT INTO user VALUES ('{$_POST['email']}','{$_POST['pass']}', '')";
    if (@mysqli_query ($dbc, $querydata)) {
     // print '<p>The user si.</p>';
      session_start();
  $_SESSION["loggedUser"] = $email ;
      header('Location: index.php');
      }
      else {
      print "<p>Could not add the entry because: <b>" . mysqli_error($dbc) . "</b>. The query was $querydata.</p>";
        }
  
  }}if ($_POST['pass']!=$_POST['psw_repeaat']|| strlen($_POST['pass']) <= 7 ){
  echo "<script>alert('تأكد من كلمة المرور')
  </script>";
 
 }
  }

    mysqli_close($dbc);
?>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    header('Location: index.php');
  } else {
    $email =$_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  }
?>

    <div class="modal-content">
      <form class="singnin" action="createacc.php" method="post">
        <fieldset>
          <legend>إنشاء حساب</legend>
          <label for="email">البريد الالكتروني</label><br>
 <span class="error">* <?php echo $emailErr;?></span>
<input type="text" name="email">
  <span class="error"><?php echo $emailErr;?></span>
  <br>
          <label for="pass">كلمة المرور</label><br>
   <span class="error">* <?php echo $emailErr;?></span>
 <input type="password" name="pass" id="pass1" required onkeyup='checkpass();' placeholder="يجب ان تكون كلمة المرور 8 خانات أو أكثر"><br>
  
  <label for="psw_repeaat">أعد كلمة المرور</label><br>
   <span class="error">* <?php echo $emailErr;?></span>
          <input type="password" name="psw_repeaat" id="psw_repeaat1" required onkeyup='checkpass();'placeholder="يجب ان تطابق كلمة المرور المدخلة سابقا"><br>   

          <span id="msg"></span>     
          <input class="Button" type="submit" name="signin_submit" value="إنشاء">
        </fieldset>
      </form>

      </div>
  </div>
 


  <script src="js/index.js"></script>
</body>
