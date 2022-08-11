<!DOCTYPE html>

<html dir="rtl">

<head>

  <meta charset="utf-8">
  <title>أخطاء تقتل النباتات</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="logo.png">
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
 
  <div class="top details">
    <h2>خمسة أخطاء قاتله للنباتات</h2>
    <p>بالبداية .. بما أنك مقتني نبات من الأكيد انه عندك معرفة بأن النبات مخلوق بسيط و لا يتطلّب جهد كبير للعناية به
      <br>
      لكن في نفس الوقت, توجد بعض الأخطاء البسيطة و اللي من الممكن انه يغفلون عنها بعض مقتنيين النباتات
      و راح نسلّط الضوء عليها الآن
    </p>
  </div>

  <table>
    <tbody>
      <tr>
        <td>
          <div class="card">
            <img src="images/overwatering.jpeg" style="width:90%" onclick="getmodal('id01');">
            <input type="button" value="الإفراط في الريّ" class="bold" onclick="getmodal('id01');">
            <div id="id01" class="modal">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">الإفراط في الريّ</h3>
                <p>على الرغم من نواياك الحسنة في محاولتك على سقاية النباتات بشكل كافي حتى ما تتعرّض للذبول, لكن تكمن المشكلة في
                  الإستمرار بالريّ حتى تغرق الجذور
                  <br>
                  و من هنا نستنتج انه السبب الأساسي في موت النباتات بشكل أسرع هو الريّ
                  بطريقة غير صحيحة
                </p>
                <p>تحتاج أنك تتعلّم فن الصبر و إعطاء الوقت بين الريّ, علاوة على ذلك تحتاج تراقب النبات و تتفاعل معه
                  <br>
                  طيب كيف أتفاعل مع نباتي؟ عن طريق لمسك لسطح التربة مباشرة, في حال كان جاف .. فهذا يعني انه وقت
                  سقاية النبات قد حان, لكن في حال كانت التربة ما زالت رطبة .. ما راح تحتاج تسقيها
                </p>

                <p>أيضًا فيه عوامل أخرى تأثر في سقاية النباتات , راح نذكر لك بعضًا منها</p>

                <h4 class="head2">النبات بحد ذاته</h4>
                <p>بمعنى إذا كان النبات يحتوي على أوراق سميكة, فهذا يدل على أن النبات متكيّف بشكل طبيعي
                  لتلقّي كميّة قليلة من الماء, كثرة الريّ هنا راح تزيد من فرصة التعفّن
                  <br>
                  و العكس صحيح, في حال كانت أوراق النبات رقيقة أو كثيرة .. راح يحتاج إلى سقي متكرّر
                </p>

                <h4 class="head2">البيئة</h4>
                <p>مع إرتفاع درجة الحرارة و شدّة الضوء, راح تزيد حاجة النبات للماء, و هذا الشيء بدوره يزيد من مستوى فعاليّة
                  التمثيل الضوئي اللي يحتاج بدوره للمزيد من الماء
                </p>

                <h4 class="head2">الأماكن الرطبة</h4>
                <p>تحتاج النباتات الموجودة في أماكن رطبة إلى كميّات أقل من الماء مقارنة بالبناتات الموجودة في أماكن جافّة</p>

                <p>بنهاية هذا الموضوع, راح نلخّص أهم العلامات اللي تدل علو كثرة الماء أو قلّته</p>
                <p class="paragrapgh">علامات تدل على قلّة الماء</p>
                <p>1- الأوراق تُصبح ذابلة و في بعض الأحيان باهتة</p>
                <p>2- تتلاشى الأزهار بسرعة أو ما تتفتّح</p>
                <p>3- تُصبح حواف الأوراق بنيّة أو جافّة</p>
                <p>4- تبدأ الأوراق القديمة بالتساقط</p>

                <p class="paragrapgh">علامات تدل على كثرة الماء</p>
                <p>1- الأوراق تُصبح ذابلة</p>
                <p>2- تُصبح الأزهار متعفّنة</p>
                <p>3- تُصبح حواف الأوراق بنيّة</p>
                <p>4- تبدأ الأوراق القديمة و الجديدة بالتساقط</p>

              </div>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="card">
            <img src="images/too-cold.jpg" style="width:90%" onclick="getmodal('id02');">
            <input type="button" value=" البرودة" class="bold" onclick="getmodal('id02');">
            <div id="id02" class="modal">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">البرودة</h3>
                <p>مثل الإنسان, فإن غالبيّة النباتات تستوعب نطاق واسع من درجات الحرارة, لكن درجات الحرارة هذه ما تتضمّن
                  درجات الحرارة المنخفضة
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="card">
            <img src="images/too-much-or-too-little-light.jpg" style="width:90%" onclick="getmodal('id03');">
            <input type="button" value="قلّة أو كثرة الضوء" class="bold" onclick="getmodal('id03');">
            <div id="id03" class="modal">
              <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">قلّة أو كثرة الضوء</h3>
                <p>كلنا على عِلم بأن النباتات تحتاج إلى ضوء الشمس لكي تتمكّن من النمو بشكل كبير و قوي, لكن تختلف قابليّة
                  إستجابة النباتات لضوء الشمس من نوع لآخر
                  <br>
                  لكن قِلّة فقط من النباتات تتعامل مع أشعة الشمس المباشرة
                  لفترات طويلة, فكل ما عليك معرفته هو مقدار الضوء اللي يحتاجه نباتك
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="card">
            <img src="images/fertiliser.jpg" style="width:90%" onclick="getmodal('id04');">
            <input type="button" value="الكثير من السماد" class="bold" onclick="getmodal('id04');">
            <div id="id04" class="modal">
              <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">الكثير من السماد</h3>
                <p>هذا الخطر من الممكن أننا نقدر نقول انه نادر حدوثه لكنّه قابل للحصول, و لتوخي الحذر منذ البداية
                  و تجنّب الإضرار بنباتك إبقى على معرفة بإحتياج نباتك عن طريق قراءة الجزء الخلفي من صندوق السماد
                  <br>
                  لا تضاعف الكميّة أبدًا أو تُقدّم أكثر من الموصى به, فهذا الشيء ممكن يغيّر من التركيب الكيميائي للنمو
                  و يُسبّب مشاكل خطيرة للنبات
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="card">
            <img src="images/pests.jpg" style="width:90%" onclick="getmodal('id05');">
            <input type="button" value="الآفات و الأمراض" class="bold" onclick="getmodal('id05');">
            <div id="id05" class="modal">
              <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">الآفات و الأمراض</h3>
                <p>النباتات تمتص الآفات و تمنح المنزل سمعة سيئة لأنها تبدو و كأنها غير نظيفة, و علاوة على ذلك قد تُضعف
                  و تقتل الأوراق الخضراء
                  <br>
                  من بين كل الأسباب المذكورة, هذا هو السبب الوحيد لموت النباتات و اللي يكون خارج عن إرادتك, بالتالي
                  أفضل طريقة للإصلاح هي مراقبة و ملاحظة النباتات .. و بهذه الطريقة من أول مره تلاحظ ظهور أي شيء
                  بشكل خاطئ, راح تكون قادر على معرفة المشكلة و حلّها بوقت مبكّر قبل فوات الآوان
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>
      <script src="js/index.js"></script>
    </tbody>
  </table>
  </div>
  <footer>&copy;2021</footer>
</body>

</html>
