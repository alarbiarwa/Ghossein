<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>تسجيل الدخول</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="logo.png">
  <link rel="stylesheet" href="css/style.css">
  
  <style>
  body{
    background-image: url(css/2.png);
  }
  </style>
 
</head>

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

ini_set ('display_errors', 1);
error_reporting (E_ALL );

session_start();

// if ($_SERVER["REQUEST_METHOD"] == "POST"){
//   $email = $_POST['email'];
// $pass = $_POST['password'];
// }
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



//session_start();

// if(isset($_COOKIE["type"]))
// {
//   header('Location: index.php');
// }
if (isset ($_POST['signin_submit'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];
 
  if(!empty($email) && !empty($pass))
{
  // $sql = @mysqli_query("SELECT * FROM user WHERE email = '$email' AND pass = '$pass'");
 $login =  "SELECT * FROM user WHERE email = '$email' AND pass = '$pass'";
  $result = @mysqli_query($dbc, $login );

  //Check the number of users against database
//with the given criteria.  We're looking for 1 so 
//adding > 0 (greater than zero does the trick). 
$num_rows = @mysqli_num_rows($result);
if($num_rows > 0){
  session_start();
  $_SESSION["loggedUser"] = $email ;

  if(!empty($_POST["remember"])) {
// تكوين رمز امان عشوائي ليتم الدخول من خلاله اذا اختار اليوزر تذكرني
$id_user =$email. sha1(rand().microtime());
//$id_user = $digest = sha1(strval(rand(0,microtime(true)) + $pass + strval(microtime(true))));

$query = "UPDATE user SET reloginDigest='$id_user' WHERE email='$email'";
 $r = mysqli_query ($dbc, $query);
    setcookie( 'type', $id_user, time()+(60*60*24));

 //setcookie("type", $row["email"], time()+3600);
    echo "Cookies  Set";
  }
 header('Location: index.php');



}}
  else {echo 'invalid email and pass';}

  
// //Lets grab and create a variable from the DB to register
// //the user's session with.
// $gid = @mysqli_query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
// $row = @mysqli_fetch_assoc($gid);
// $uid = $row[userid];

// // This is where we register the session.
// $_SESSION[valid_user] = $uid;

// //Send the user to the member page.  The userid is what the 
// //session include runs against.
// header('Location: memberpage.php?userid='.$userid);
// }

// //If it doesn't check out -- throw an error.
// else
// {
// echo 'Invalid Login Information';
// }
}

?>



    <div class="modal-content animate">
      <form class="" action="login.php" method="post">
        <fieldset>
          <legend>تسجيل الدخول</legend>
          <label for="email">البريد الالكتروني</label><br>
          <input type="email" name="email" id="email" required autofocus autocomplete placeholder="yourname@example.com"><br>
          <label for="psw">كلمة المرور</label><br>
          <input type="password" name="password" id="psw" required><br>
          <a href="createacc.php" onclick="login('id01','id02')">لا تملك حساب؟ انشاء حساب</a><br>
          <label>
            <input type="checkbox" checked="checked" name="remember" id="remember"> تذكرني
          </label><br>
          <input class="Button" type="submit" name="signin_submit" value="دخول">
        </fieldset>
      </form>
    </div>
  </div>




  <script src="js/index.js"></script>
</body>