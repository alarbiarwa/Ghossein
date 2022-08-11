<!DOCTYPE php>

<php dir="rtl">

<head>

  <meta charset="utf-8">
  <title>تنظيف النباتات</title>
  <link rel="icon" href="logo.png">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  


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
    <h2>أهميّة تنظيف النباتات</h2>
    <h3 style="text-align: center; color:gray">ليش تنظيف النبات مهم إلى هذه الدرجة؟</h3>
    <p>ممكن البعض يراوده هذا السؤال من باب .. وش المشكلة أو وش ممكن يصير لو ما نظّفتها؟
      <br>
      الحين راح نعطيك كم سبب يقنعك بأهميّة تنظيفها
    </p>
  </div>

  <table>
    <tbody>
      <tr>
        <td>
          <div class="card">
            <img src="images/health.jpeg" style="width:90%" onclick="getmodal('id01');">
            <input type="button" value="لصحّتك" class="bold" onclick="getmodal('id01');">
            <div id="id01" class="modal">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">لصحّتك</h3>
                <p>مثل ما تعرف أن النباتات مفيدة لنا, لأنها تنتج الأكسجين و تقلّل من البكتيريا المحمولة في الهواء و تزيل
                  السموم الضارة من الهاوء .. و فوق كل ذا لها تأثير إيجابي على مزاجنا !
                  <br>
                  لكن كل هالتأثيرات ممكن تقل في حال كانت النباتات متسخة
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="card">
            <img src="images/plantsOfClean.jfif" style="width:90%" onclick="getmodal('id02');">
            <input type="button" value="مظهرها" class="bold" onclick="getmodal('id02');">
            <div id="id02" class="modal">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">مظهرها</h3>
                <p>بالنسبة لمعظم الناس ممكن يكون هذا السبب الرئيسي للعناية بالنباتات, و بالنسبه للجزء الأكبر
                  احنا كبشر نحبّ نعيش في مكان لطيف يخلّينا نحسّ بتحسّن .. و نفس الشيء ينطبق على زوّار المكان اللي يحتوي نباتات
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="card">
            <img src="images/health-of-plants.jpeg" style="width:90%" onclick="getmodal('id03');">
            <input type="button" value="صحّة النبات" class="bold" onclick="getmodal('id03');">
            <div id="id03" class="modal">
              <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">صحّة النبات</h3>
                <p>كل نبات ما يُعد صحّي الا إذا كان خالي من الغبار, و الأفضل انه تكون بالخارج .. معرّضة للهواء
                  الطلق و أشعة الشمس و هذا يحفّز عمليّة البناء الضوئي .. لكن إذا كانت مغطاة بالغبار فراح تقلّ كميّة
                  الضوء اللي راح يوصل له
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="card">
            <img src="images/afa.jpeg" style="width:90%" onclick="getmodal('id04');">
            <input type="button" value="مقاومة الآفات" class="bold" onclick="getmodal('id04');">
            <div id="id04" class="modal">
              <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">مقاومة الآفات</h3>
                <p>و هذا شيء بديهي, راح يكون من السهل إنتشار الآفات عليها بما أنها غير مُدارة</p>

                <br>
                <p class="paragrapgh">طيب, و بعد ما صار عندك الوعي الكافي لأهميّة تنظيف النباتات راح نعطيك كم طريقة
                  راح تفيدك في هذه الشغلة
                </p>
                <p>1- دش داخلي : و هذه أسهل طريقة , و هي أنك تغسلها برفق .. لكن لازم يكون الماء دافئ, و ما فيه
                  أي حاجة لإستخدام الصابون
                </p>
                <p>2- دش لكن بالهواء الطلق : و هذه مهمّة البيئة, إذا كانت درجة الحرارة دافئة و ما كان الطقس عاصف
                  بشكل مفرط .. فـ ليش لا؟
                </p>
                <p>3- قطعة قماش مبلّلة : مثل النباتات الكبيرة صعب يتم نقلها, تقدر تكتفي بقطعة قماش مبلّلة لأداء المهمة</p>
                <p>4- البخاخ : و هذه الطريقة الشائعة, و هي أنك تستخدم بخّاخات لتنظيف الأوراق, و هذا
                  خيار مناسب للنباتات ذات الأشواك مثل الصبّار
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="card">
            <img src="images/helpful.jpeg" style="width:90%" onclick="getmodal('id05');">
            <input type="button" value="نصائح بتفيدك" class="bold" onclick="getmodal('id06');">
            <div id="id05" class="modal">
              <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 style="color:darkgreen">نصائح بتفيدك</h3>
                <p>طيب, و بعد ما صار عندك الوعي الكافي لأهميّة تنظيف النباتات راح نعطيك كم طريقة
                  راح تفيدك في هذه الشغلة
                </p>
                <p>1- دش داخلي : و هذه أسهل طريقة , و هي أنك تغسلها برفق .. لكن لازم يكون الماء دافئ, و ما فيه
                  أي حاجة لإستخدام الصابون
                </p>
                <p>2- دش لكن بالهواء الطلق : و هذه مهمّة البيئة, إذا كانت درجة الحرارة دافئة و ما كان الطقس عاصف
                  بشكل مفرط .. فـ ليش لا؟
                </p>
                <p>3- قطعة قماش مبلّلة : مثل النباتات الكبيرة صعب يتم نقلها, تقدر تكتفي بقطعة قماش مبلّلة لأداء المهمة</p>
                <p>4- البخاخ : و هذه الطريقة الشائعة, و هي أنك تستخدم بخّاخات لتنظيف الأوراق, و هذا
                  خيار مناسب للنباتات ذات الأشواك مثل الصبّار
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
  </div>
  <script src="js/index.js"></script>
  <footer>&copy;2021</footer>
</body>

</php>
