<!DOCTYPE html>
<html>

<head>
  <title> نباتات خـارجية </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/Dstyle.css" />
  <link rel="stylesheet" href="css/style.css" />
  <meta charset="utf-8">
  <link rel="icon" href="logo.png">
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
 
  <h1 class="heading"> نباتـــات خـارجية</h1>
  <div class="gallery-grid">
    <figure class="gallery-frame">

      <img class="gallery-img" src="images/khimg/le.jpg" onclick="getmodal('id01');" />

      <img class="gallery-img" src="images/khimg/dv.jpg" onclick="getmodal('id02');" />

      <img class="gallery-img" src="images/khimg/h.jpg" onclick="getmodal('id03');" />

      <img class="gallery-img" src="images/khimg/sa.jpg" onclick="getmodal('id04');" />

      <img class="gallery-img" src="images/khimg/nan.jpg" onclick="getmodal('id05');" />

      <img class="gallery-img" src="images/khimg/al.jpg" onclick="getmodal('id06');" />

      <img class="gallery-img" src="images/khimg/and.jpg" onclick="getmodal('id07');" />

      <img class="gallery-img" src="images/khimg/md.jpg" onclick="getmodal('id08');" />

    </figure>
  </div>

  <div id="id01" class="modal">

    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> ليوكوتو </h2>

      <p> هذه هي الشجيرة الصغيرة المثالية دائمة الخضرة للظل </p>

      <h3> وممــيزاتها</h3>
      <p>
      <ul>
        <li> أطراف السيقان الملونة </li>
        <li> في الخريف تتحول الأوراق إلى ظلال خريفية نابضة بالحياة </li>
        <li> تتدلى نورات من زهور بيضاء على شكل جرة من سيقانها في الربيع</li>

      </ul>
      </p>

    </div>
  </div>

  <div id="id02" class="modal">

    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> الدافني </h2>
      <p> فالزهور المعطرة الغنية علاج للحواس من الربيع وحتى الخريف </p>

      <h3> وممــيزاتها</h3>
      <p>
      <ul>
        <li> طبيعة نمو كثيفة ، يصل ارتفاعها وانتشارها إلى أقل من متر واحد فقط</li>
        <li> تعد هذه الخضرة الفاتنة مثالية لحاوية أو حدود بجوار منطقة جلوس مستخدمة كثيراً </li>
      </ul>
      </p>

    </div>
  </div>

  <div id="id03" class="modal">

    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> الهيبي </h2>
      <p> تأتي الهيبي في جميع الأشكال والألوان والأحجام ، مما يجعلها من أفضل الشجيرات الصغيرة دائمة الخضرة للشمس ، خاصة في التربة السهلة التصريف </p>

      <h3> وممــيزاتها</h3>
      <p>
      <ul>
        <li>تتميز هيبي الملكة الفضية بأوراقها الملونة المتنوعة وزهورها البنفسجية</li>
        <li> للحصول على تلون أكثر أناقة ، جرب هيبي ضوء النجم ذو الهوامش الضيقة والفضية للأوراق وتنسيق الأزهار البيضاء </li>
        <li> تعد هذه الشجيرات الصغيرة دائمة الخضرة مثالية لجذب النحل والفراشات </li>
      </ul>
      </p>

    </div>
  </div>


  <div id="id04" class="modal">

    <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> الصنوبريات </h2>
      <p> هي نباتات دائمة الخضرة قليلة الخدمة ولا تحتاج إلى رعاية إضافية بمجرد إنشائها. ولديها تنوع الألوان </p>
      <h3> وممــيزاتها</h3>
      <p>
      <ul>
        <li> جرب السرو الغربي في حاويات على جانبي المدخل. مع شكلها المستدير بشكل طبيعي</li>
        <li> يعد الأرز الياباني مفيداً في توفير لون موسمي دائم الخضرة </li>
        <li> للحصول على مظهر أكثر خشونة ، ابحث عن الصنوبر القزم لأوراقها التي تشبه الإبرة </li>
      </ul>
      </p>
    </div>
  </div>



  <div id="id05" class="modal">

    <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> الناندين المستأنس </h2>
      <p> ينمو هذا الصنف القزم ليبلغ طوله 45 سم (18 بوصة) وانتشار بطول 60 سم (24 بوصة) لديك شجيرة صغيرة لجميع المواسم</p>
      <h3> وممــيزاتها</h3>
      <p>

      <ul>
        <li> يحتفظ النبات شبه دائم الخضرة ببعض أوراقه خلال فصل الشتاء ، خاصة في المواقع المعتدلة ، ولكنه يظهر أيضًا بعض التغييرات في أوراق الخريف التي تظهر في النباتات المتساقطة</li>
        <li> تشتهر ناندينا بتغير لونها مع ظهور أوراق الشجر الذهبية الجديدة ، قبل أن يتحول إلى اللون الأخضر </li>
        <li> في الخريف يتحول إلى ظلال غنية من الأحمر والماهوجني </li>
      </ul>
      </p>
    </div>
  </div>


  <div id="id06" class="modal">

    <span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> شجر الورد </h2>
      <p> تظل شجرة الورد أنيقة ومضغوطة وكما تنتج أيضاً أزهارًا تجذب الأنظار على مدار العام </p>
      <h3> وممــيزاتها</h3>
      <p>
      <ul>
        <li> هذه الشجيرات دائمة الخضرة </li>

      </ul>
      </p>
    </div>
  </div>


  <div id="id07" class="modal">

    <span onclick="document.getElementById('id07').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> الاندروميدا</h2>
      <p> تخلق أوراق الشجر المتنوعة نقطة محورية رائعة </p>
      <h3> وممــيزاتها</h3>
      <p>
      <ul>
        <li> طبيعتها الكثيفة المتراصة حيث تشكل شجيرة دائمة الخضرة ملفتة للنظر </li>
        <li> تظهر أوراق الشجر الصغيرة عند خروجها من البراعم باللون القرنفلي ، وتتدلى الأزهار الكريمية على شكل جرس في مجموعات </li>
        <li> مع ارتفاع وانتشار 60 سم ، هذه الشجيرة الصغيرة دائمة الخضرة مثالية للشمس أو بقعة مظللة قليلاً</li>
      </ul>
      </p>
    </div>
  </div>


  <div id="id08" class="modal">

    <span onclick="document.getElementById('id08').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> المضاض </h2>
      <p>بغض النظر عن الزيادة السنوية في الحجم ، فإنها تظل دون تغيير تقريبًا على مدار العام </p>
      <h3> وممــيزاتها</h3>
      <p>
      <ul>
        <li> لا يصل ارتفاع هذه الشجيرات الصغيرة إلى أكثر من متر واحد في الارتفاع والانتشار</li>
        <li> تعتبر غطاء أرضي مفيدًا ، أو نبات حاوية دائمة الخضرة </li>
      </ul>
      </p>
    </div>
  </div>




  <script type="text/javascript" src="js/index.js"></script>

  <footer>&copy;2021</footer>
</body>










</html>
