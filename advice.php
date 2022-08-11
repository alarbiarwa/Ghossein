<!DOCTYPE html>

<html dir="rtl">

<head>

  <meta charset="utf-8">
  <title>نصائح عن التربة </title>
  <link rel="icon" href="logo.png">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <h2>ما مدى أهميّة التربة؟</h2>
    <p>ممكن تستغرب من فكرة أننا كاتبين موضوع كامل خاص بالتربة, لكنها تُعد شيء مهم جدًا لأنها تُحافظ
      على نوعيّة الحياة التي يعيشها
      <br>
      الفرد, و نوعيّة الهواء الذي يتنفّسه, و أيضًا مهمة جدّا للنباتات
      <br>
      <small>معلومة : التربة تتكوّن من خمس مكونات اللي هي : المعادن, و المواد العضويّة,
        و الكائنات الحيّة, و الغاز, و الماء .. و هذا الشيء يثبت مدى أهميّتها
      </small>
      <br>
      طيب كيف ممكن تعرف إذا مزيج التربة هذا مناسب لنباتك؟
      <br>
      بشكل عام, معظم الناس يستخدمون السماد العضوي 100% أو السماد المنزلي للنباتات ..
      <br>
      و بعد فيه مواد
      شائة الإستخدام تقدر تضيفها عشان تصنع مزيجك المثالي و راح نعرض بعض منها
    </p>
  </div>
  <table>
    <tbody>
      <tr>
        <td>
          <div class="card">
            <img src="images/peat.jpg" style="width:90%" onclick="getmodal('id01');">
            <input type="button" value="تربــة الخث" class="bold" onclick="getmodal('id01');">
            <div id="id01" class="modal">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">تربــة الخث</h3>
                <p>تُعتبر وسيلة نمو إستثنائيّة لجمع النباتات المنزليّة تقريبًا , ممّا يوفّر الرطوبة المثاليّة و الاحتفاظ بالمغذيات
                  , يُعتبر رائع للزراعة المنزليّة, بما أنه رخيص و متوفّر بسهولة في غالبيّة المحلّات .. حتى أنه المزيج الأكثر
                  احتمالًا في الوجود
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="card">
            <img src="images/horse-manure.jpg" style="width:90%" onclick="getmodal('id02');">
            <input type="button" value="سمـاد المـزارع" class="bold" onclick="getmodal('id02');">
            <div id="id02" class="modal">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">سماد المزارع</h3>
                <p>يُعتبر روث الخيول أو سماد المزارع طريقة رائعة لتحسين أو إضافة وسط نمو مختار, فهو يحتفظ بالماء و يُضيف
                  عدد كبير من العناصر الغذائيّة المختلفة
                  <br>
                  طيب كيف تعرف انه هذا هو المنشود؟ بكل بساطة تشم رائحته, له رائحة ترابيّة خفيفة و ممكن حلوة .. ما تكون
                  رائحته كريهه .. بمعنى أوضح إذا ما كنت مرتاح لحمله بين يديك , فهو مو جاهز
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="card">
            <img src="images/Perlite.jpg" style="width:90%" onclick="getmodal('id03');">
            <input type="button" value="البيرلايت الأبيض" class="bold" onclick="getmodal('id03');">
            <div id="id03" class="modal">
              <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">البيرلايت الأبيض</h3>
                <p>يُحسّن البيرلايت الصرف و لكنه أيضًا يحتفظ ببعض الماء في شكله الطبيعي لأنه كثيف و شكله كالحجر الصغير,
                  لكن بمجرد تسخينه يتوسًع .. ممكن تعتقد أنه ثقيل لكنه بالواقع خفيف جدًا , و يتم إستخدام كميّات قليلة منه
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

</html>
