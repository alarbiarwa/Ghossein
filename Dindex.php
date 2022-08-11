<!DOCTYPE html>
<html>

<head>
  <title> نباتات داخلية </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/Dstyle.css" />
  <link rel="stylesheet" href="css/style.css">
  <meta charset="utf-8">
  <link rel="icon" href="logo.png">

</head>
<?php 
  session_start();
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


  <h1 class="heading"> نباتـــات داخــلية</h1>
  <div class="gallery-grid">
    <figure class="gallery-frame">


      <img class="gallery-img" src="images/Dimg/ajl.png" onclick="getmodal('id01');" />

      <img class="gallery-img" src="images/Dimg/drsen.png" onclick="getmodal('id02');" />

      <img class="gallery-img" src="images/Dimg/drsenma.png" onclick="getmodal('id03');" />

      <img class="gallery-img" src="images/Dimg/vex.png" onclick="getmodal('id04');" />

      <img class="gallery-img" src="images/Dimg/keneta.png" onclick="getmodal('id05');" />

      <img class="gallery-img" src="images/Dimg/bouts.png" onclick="getmodal('id06');" />

      <img class="gallery-img" src="images/Dimg/yoca.png" onclick="getmodal('id07');" />

      <img class="gallery-img" src="images/Dimg/sro.png" onclick="getmodal('id08');" />

      <img class="gallery-img" src="images/Dimg/bonsay.png" onclick="getmodal('id09');"/>

      <img class="gallery-img" src="images/Dimg/vexka.png" onclick="getmodal('id010');" />

      <img class="gallery-img" src="images/Dimg/krton.png" onclick="getmodal('id011');" />

      <img class="gallery-img" src="images/Dimg/mo.png" onclick="getmodal('id012');" />

      <img class="gallery-img" src="images/Dimg/ore.png" onclick="getmodal('id013');" />

      <img class="gallery-img" src="images/Dimg/shve.png" onclick="getmodal('id014');" />

    </figure>
  </div>

  <div id="id01" class="modal">

    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> اجلونيما سترايبس </h2>
      <h3> الـري</h3>
      <p> لا يتم ريّها إلا بعد جفاف التربة جزئيا ويفضل رش أوراقها برذاذ الماء لتوفير الرطوبة </p>

      <h3> الإضاءة</h3>
      <p> تحتاج ضوء خفيف الى متوسط مثل ضوء النافذة أو الإنارة الصناعية داخل الغرفة </p>

      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل ويناسبها درجة حرارة الغرفة الطبيعية وتتحمل الجو الدافئ حتى 30 درجة مئوية </p>


    </div>
  </div>

  <div id="id02" class="modal">

    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> دراســينا كومـباكـتا </h2>

      <h3> الـري</h3>
      <p> لا يتم ريّها إلا بعد جفاف التربة جزئيا ويفضل رش أوراقها برذاذ الماء لتوفير الرطوبة </p>

      <h3> الإضاءة</h3>
      <p> تحتاج ضوء خفيف الى متوسط مثل ضوء النافذة أو الإنارة الصناعية داخل الغرفة </p>

      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل ويناسبها درجة حرارة الغرفة الطبيعية وتتحمل الجو الدافئ حتى 30 درجة مئوية </p>

    </div>
  </div>

  <div id="id03" class="modal">

    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> دراســينا مـاسنجانا </h2>
      <h3> الـري</h3>
      <p> لا يتم ريّها إلا بعد جفاف التربة جزئيا ويفضل رش أوراقها برذاذ الماء لتوفير الرطوبة </p>

      <h3> الإضاءة</h3>
      <p> تحتاج ضوء خفيف الى متوسط مثل ضوء النافذة أو الإنارة الصناعية داخل الغرفة </p>

      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل ويناسبها درجة حرارة الغرفة الطبيعية وتتحمل الجو الدافئ حتى 30 درجة مئوية </p>

    </div>
  </div>

  <div id="id04" class="modal">

    <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> فيكس مــطاط</h2>
      <h3> الـري</h3>
      <p> لا يتم ريّها إلا بعد جفاف التربة جزئيا ويفضل رش أوراقها برذاذ الماء لتوفير الرطوبة </p>
      <h3> الإضاءة</h3>
      <p> تحتاج ضوء ساطع مرشح مثل ضوء النافذة </p>
      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل ويناسبها درجة حرارة الغرفة الطبيعية وتتحمل الجو الدافئ حتى 30 درجة مئوية </p>

    </div>
  </div>

  <div id="id05" class="modal">

    <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> كــينتيـا </h2>
      <h3> الـري</h3>
      <p> لا يتم ريّها إلا بعد جفاف التربة جزئيا ويفضل رش أوراقها برذاذ الماء من فترة لأخرى كمان أنها تتحمل الجفاف بشكل جيد </p>
      <h3> الإضاءة</h3>
      <p> تحتاج ضوء خفيف الى متوسط مثل ضوء النافذة أو الإنارة الصناعية داخل الغرفة </p>
      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل ويناسبها درجة حرارة الغرفة الطبيعية وتتحمل الجو الدافئ حتى 30 درجة مئوية </p>
      <p> تحتاج إلى جو معتدل ويناسبها درجة حرارة الغرفة الطبيعية وتتحمل الجو الدافئ حتى 30 درجة مئوية </p>

    </div>
  </div>

  <div id="id06" class="modal">

    <span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> بـــوتس </h2>
      <h3> الـري</h3>
      <p> لا يتم ريّها إلا بعد جفاف التربة جزئيا مع المحافظة على رطوبتها ويفضل رش أوراقها برذاذ الماء بإستمرار لكونها محبة للرطوبة </p>
      <h3> الإضاءة</h3>
      <p> تحتاج ضوء خفيف الى متوسط مثل ضوء النافذة أو الإنارة الصناعية داخل الغرفة </p>
      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل ويناسبها درجة حرارة الغرفة الطبيعية وتتحمل الجو الدافئ حتى 30 درجة مئوية </p>
    </div>
  </div>

  <div id="id07" class="modal">

    <span onclick="document.getElementById('id07').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> يـــوكـا </h2>
      <h3> الـري</h3>
      <p> لا يتم ريّها إلا بعد جفاف التربة جزئيا </p>
      <h3> الإضاءة</h3>
      <p> تحتاج ضوء ساطع الى متوسط مرشح مثل ضوء النافذة او الإنارة الصناعية للغرفة </p>
      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل ويناسبها درجة حرارة الغرفة الطبيعية وتتحمل الجو الدافئ حتى 35 درجة مئوية </p>
    </div>
  </div>

  <div id="id08" class="modal">

    <span onclick="document.getElementById('id08').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> ســرو </h2>
      <h3> الـري</h3>
      <p> لا يتم ريّها إلا بعد جفاف التربة جزئيا </p>

      <h3> الإضاءة</h3>
      <p> تحتاج ضوء ساطع الى متوسط مرشح مثل ضوء النافذة او الإنارة الصناعية للغرفة </p>

      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل ويناسبها درجة حرارة الغرفة الطبيعية 25 درجة مئوية </p>
    </div>
  </div>


  <div id="id09" class="modal">

    <span onclick="document.getElementById('id09').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> بـونــساي </h2>
      <h3> الـري</h3>
      <p> لا يتم ريّها إلا بعد جفاف التربة جزئيا ويفضل رش أوراقها برذاذ الماء بإستمرار لكونها محبة للرطوبة
      </p>
      <h3> الإضاءة</h3>
      <p> تحتاج ضوء خفيف الى متوسط مثل ضوء النافذة أو الإنارة الصناعية داخل الغرفة </p>
      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل ويناسبها درجة حرارة الغرفة الطبيعية وتتحمل الجو حتى 28 درجة مئوية </p>
    </div>
  </div>

  <div id="id010" class="modal">

    <span onclick="document.getElementById('id010').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> فـيكـس كـاستفيولا </h2>
      <h3> الـري</h3>
      <p> لا يتم ريّها إلا بعد جفاف التربة جزئيا ويفضل رش أوراقها برذاذ الماءلكونها محبة للرطوبة </p>
      <h3> الإضاءة</h3>
      <p> تحتاج ضوء معتدل أو ساطع مرشح مثل ضوء النافذة أو الاناره الصناعية داخل الغرفة </p>
      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل ويناسبها درجة حرارة الغرفة الطبيعية وتتحمل الجو الدافئ حتى 30 درجة مئوية </p>
    </div>
  </div>

  <div id="id011" class="modal">

    <span onclick="document.getElementById('id011').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> كـرتون الذهب </h2>
      <h3> الـري</h3>
      <p> لا يتم ريّها إلا بعد جفاف التربة جزئيا ويفضل رش أوراقها برذاذ الماءلكونها محبة للرطوبة </p>

      <h3> الإضاءة</h3>
      <p> تحتاج ضوء معتدل أو ساطع مرشح مثل ضوء النافذة أو الاناره الصناعية داخل الغرفة </p>

      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل ويناسبها درجة حرارة الغرفة الطبيعية وتتحمل الجو الدافئ حتى 30 درجة مئوية </p>
    </div>
  </div>

  <div id="id012" class="modal">

    <span onclick="document.getElementById('id012').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> مـونستـيرا-القفص الصدري متٍسلقه </h2>
      <h3> الـري</h3>
      <p> لا يتم ريّها إلا بعد جفاف التربة جزئيا ويفضل رش أوراقها برذاذ الماءلكونها محبة للرطوبة </p>

      <h3> الإضاءة</h3>
      <p> تحتاج ضوء معتدل أو ساطع مرشح مثل ضوء النافذة أو الاناره الصناعية داخل الغرفة </p>

      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل ويناسبها درجة حرارة الغرفة الطبيعية وتتحمل الجو الدافئ حتى 30 درجة مئوية </p>
    </div>
  </div>

  <div id="id013" class="modal">

    <span onclick="document.getElementById('id013').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> أروكـاريـا </h2>
      <h3> الـري</h3>
      <p> لا يتم ريّها إلا بعد جفاف التربة جزئيا ويفضل رش أوراقها برذاذ الماءلكونها محبة للرطوبة </p>
      <h3> الإضاءة</h3>
      <p> تحتاج ضوء خفيف الى متوسط مثل ضوء النافذة أو الإنارة الصناعية داخل الغرفة </p>

      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل ويناسبها درجة حرارة الغرفة الطبيعية حتى 25 درجة مئوية </p>
    </div>
  </div>

  <div id="id014" class="modal">

    <span onclick="document.getElementById('id014').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> شـفليرا مبرقشة </h2>
      <h3> الـري</h3>
      <p> لا يتم ريّها إلا بعد جفاف التربة جزئيا ويفضل رش أوراقها برذاذ الماءلكونها محبة للرطوبة </p>

      <h3> الإضاءة</h3>
      <p> تحتاج ضوء معتدل أو ساطع مرشح مثل ضوء النافذة أو الاناره الصناعية داخل الغرفة </p>

      <h3> درجة الحرارة </h3>
      <p> تحتاج إلى جو معتدل ويناسبها درجة حرارة الغرفة الطبيعية حتى 28 درجة مئوية </p>
    </div>
  </div>


  <script type="text/javascript" src="js/index.js"></script>
  <footer>&copy;2021</footer>
</body>






</html>
