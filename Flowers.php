<!DOCTYPE html>
<html>

<head>
  <title> الأزهار</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="logo.png">
  <link rel="stylesheet" href="css/Dstyle.css" />
  <link rel="stylesheet" href="css/style.css">
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
  
  <h1 class="heading">الأزهـــار</h1>
  <div class="gallery-grid">
    <figure class="gallery-frame">


      <img class="gallery-img" src="images/az.jpg" onclick="getmodal('id01');" />

      <img class="gallery-img" src="images/ant.jpg" onclick="getmodal('id02');" />

      <img class="gallery-img" src="images/orc.jpg" onclick="getmodal('id03');" />

      <img class="gallery-img" src="images/ee.jpg" onclick="getmodal('id04');"/>

      <img class="gallery-img" src="images/jar.jpg" onclick="getmodal('id05');"/>

      <img class="gallery-img" src="images/goz.jpg" onclick="getmodal('id06');" />

      <img class="gallery-img" src="images/zz.jpg" onclick="getmodal('id07');" />

      <img class="gallery-img" src="images/all.jpg" onclick="getmodal('id08');" />

    </figure>
  </div>

  <div id="id01" class="modal">

    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> ازاليا </h2>
      <h3> الـري</h3>
      <p> يجب بقاء تربتها رطبة باستمرار مع عدم اغراقها بالماء، ويفضل رش أوراقها برذاذ الماء كونها محبة للرطوبة مع تجنب رش الأزهار </p>

      <h3> الإضاءة</h3>
      <p> تحتاج ضوء ساطع مرشح مثل ضوء النافذة أو الانارة الصناعية للغرفة </p>

      <h3> درجة الحرارة </h3>
      <p> تحتاج جو معتدل إلى بارد يناسبها درجة حرارة الغرفة الطبيعية حتى 25 درجة مئوية </p>


    </div>
  </div>

  <div id="id02" class="modal">

    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> انتوريوم </h2>

      <h3> الـري</h3>
      <p> لا يتم ريها إلا بعد جفاف التربة جزئياً، ويفضل رش أوراقها برذاذ الماء باستمرار كونها محبة للرطوبة </p>

      <h3> الإضاءة</h3>
      <p> تحتاج ضوء ساطع إلى متوسط مثل ضوء النافذة أو الانارة الصناعية للغرفة </p>

      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل يناسبها درجة حرارة الغرفة الطبيعية حتى 25 درجة مئوية </p>

    </div>
  </div>

  <div id="id03" class="modal">

    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> اوركيد </h2>
      <h3> الـري</h3>
      <p> لا يتم ريها إلا بعد جفاف التربة جزئياً، مع المحافظة على رطوبة جذورها وعدم تركها تجف تماماً </p>

      <h3> الإضاءة</h3>
      <p> تحتاج ضوء ساطع مرشح مثل ضوء النافذة </p>

      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل مائل للبرودة، ويناسبها درجة حرارة الغرفة الطبيعية </p>

    </div>
  </div>

  <div id="id04" class="modal">

    <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2>ايشيفيريا</h2>
      <h3> الـري</h3>
      <p> لا يتم ريها إلا بعد جفاف التربة </p>
      <h3> الإضاءة</h3>
      <p> تحتاج ضوء ساطع مرشح مثل ضوء النافذة أو الانارة الصناعية للغرفة </p>
      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل يناسبها درجة حرارة الغرفة الطبيعية، والجو الدافئ حتى 30 درجة مئوية</p>

    </div>
  </div>

  <div id="id05" class="modal">

    <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> جاردينيا </h2>
      <h3> الـري</h3>
      <p>لا يتم ريها إلا بعد جفاف التربة جزئياً، تجنب الجفاف التام للتربة، ويفضل رش أوراقها برذاذ الماء كونها محبة للرطوبة مع تجنب رش الأزهار </p>
      <h3> الإضاءة</h3>
      <p> تحتاج ضوء ساطع مرشح مثل ضوء النافذة أو الانارة الصناعية للغرفة </p>
      <h3> درجة الحرارة </h3>
      <p> تحتاج جو معتدل إلى بارد يناسبها درجة حرارة الغرفة الطبيعية حتى 20 درجة مئوية </p>


    </div>
  </div>

  <div id="id06" class="modal">

    <span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> قوزمينيا </h2>
      <h3> الـري</h3>
      <p>لا يتم ريها إلا بعد جفاف التربة جزئياً، ويفضل رش أوراقها برذاذ الماء من فترة لاخرى كونها محبة للرطوبة </p>
      <h3> الإضاءة</h3>
      <p> تحتاج ضوء ساطع مرشح مثل ضوء النافذة أو الانارة الصناعية للغرفة</p>
      <h3> درجة الحرارة </h3>
      <p>تحتاج إلى جو معتدل يناسبها درجة حرارة الغرفة الطبيعية، والجو الدافئ حتى 30 درجة مئوية </p>
    </div>
  </div>

  <div id="id07" class="modal">

    <span onclick="document.getElementById('id07').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> الزنبق </h2>
      <h3> الـري</h3>
      <p> يفضل رشها برذاذ الماء من فترة لاخرى كونها محبة للرطوبة </p>
      <h3> الإضاءة</h3>
      <p> تحتاج ضوء ساطع الى متوسط مرشح مثل ضوء النافذة او الإنارة الصناعية للغرفة </p>
      <h3> درجة الحرارة </h3>
      <p> تحتاج جو بارد تناسبها درجة حرارة بين 3 و 10 درجة مئوي </p>
    </div>
  </div>

  <div id="id08" class="modal">

    <span onclick="document.getElementById('id08').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> اللانتانا </h2>
      <h3> الـري</h3>
      <p> لا يتم ريّها إلا بعد جفاف التربة جزئيا </p>

      <h3> الإضاءة</h3>
      <p> تحتاج ضوء ساطع مرشح مثل ضوء النافذ </p>

      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل يناسبها درجة حرارة الغرفة الطبيعية، والجو الدافئ حتى 30 درجة مئوية</p>
    </div>
  </div>
  <script type="text/javascript" src="js/index.js"></script>

  <footer>&copy;2021</footer>
</body>

</html>
