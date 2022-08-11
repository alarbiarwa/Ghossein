<!DOCTYPE html>

<html dir="rtl">

<head>

  <meta charset="utf-8">
  <title>تسمية النباتات</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="logo.png">
  <link rel="stylesheet" href="css/style.css">

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

  <div class="top details">
    <h2>هل يفرق اسم النبات؟</h2>
    <p>موضوع غريب صح؟ بحقيقة الأمر هي أن الاسم اللاتيني تحديدّا عالمي جدًا في أنحاء العالم, بغض النظر عن اللغة
      اللي تتكلّم فيها .. فالموضوع يستحق أنك تفهم أسماء النباتات
    </p>
  </div>

  <table>
    <tbody>
      <tr>
        <td>
          <div class="card">
            <img src="images/latin-names-genus-species.png" style="width:90%" onclick="getmodal('id01');">
            <input type="button" value="كيف تصير تركيبة اسم النبات؟" class="bold" onclick="getmodal('id01');">
            <div id="id01" class="modal">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">كيف تصير تركيبة اسم النبات؟</h3>
                <p>عشان نشرح الأنواع, خناخذ مثال بسيط .. تخيّل أنه فيه عائلة تحمل لقب سميث .. لما تشوفهم من نظرة وحدة تقدر
                  تميّز هم من أي عائلة, لكن لو بتحدّد شخص بحد ذاته لازم تعرف اسمائهم الفرديّة
                  <br> <br>
                  بالضبط ينطبق الموضوع على النباتات .. لكن الفرق أن ترتيب الأسماء للنباتات يكون " اللقب , يليه الإسم الأول "
                  مثل Dracaena هو Dracaena marginata
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card">
            <img src="images/Spider-Plant-Vittatum-Large.jpg" style="width:90%" onclick="getmodal('id02');">
            <input type="button" value="بناءً لى ايش تتسمّى النباتات؟" class="bold" onclick="getmodal('id02');">
            <div id="id02" class="modal">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">بناءً على ايش تتسمّى النباتات؟</h3>
                <p>بعد عادةً ما يتم إنشاء الإسم الشائع ثقافيًا .. يعني عادةً ما يتم تجريد اللغة اللاتينيّة و يترك لك
                  اسم يصف مظهر النباتات بطريقة ما أو شيء يسوّيه, و أحيان يبقى الإسم اللاتيني لكن بشكل مكثّف أو أبسط
                  <br>
                  غالبًا ما يتم تدوين الإسم في العرف و التاريخ و اللي يخلّي إكتشاف النباتات ذات الإسم الشائع ممتع و واجد بعد
                  .. زي مثلًا يُعرف chlorophytum باسم نبات العنكبوت أو النبات الأم السيئ و سُمّيت كذا لأن نموّها يشبه نمو العنكبوت
                  لكنها تُعرف في المكسيك بإسم النبات الأم السيئ بسبب الطريقة اللي ترمي فيها أطفالها بعيد عنها
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="card">
            <img src="images/summary.jpeg" style="width:90%" onclick="getmodal('id03');">
            <input type="button" value="تلخيص خفيف لأفكارك" class="bold" onclick="getmodal('id03');">
            <div id="id03" class="modal">
              <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">تلخيص خفيف لأفكارك</h3>
                <p>بالنهاية عشان نرتب أفكارك بعد كل اللي تكلّمنا عنه .. راح نلخّص كل شيء بنقاط مع مثال</p>

                <p>- العائلة : هي مجموعة كبيرة من أجناس النباتات اللي تتشابه مع بعضها البعض
                  <br>
                  مثال .. Dracaena و chlorophytum من عائلة Asparagaceae
                </p>
                <p>- جنس : لالنباتات المماثلة اللي ترتبط إرتباط وثيق تُعطى جنسًا
                  <br>
                  مثال .. the dragon tree و lucky bamboo جنس من نوع Dracaena
                </p>
                <p>- الأنواع : ضمن مجموعة الجنس, يُعرف كل نبات مختلف بإسم الأنواع
                  <br>
                  مثال .. the dragon tree هي نوع من أنواع Dracaena
                </p>
                <p>- التنوع : الأنواع المتشابهة جدًا لها أنواع مختلفة
                  <br>
                  مثال .. the dragon tree ثلاثيّة الألوان , هي مجموعة متنوّعة من شجرة التنين القياسيّة
                </p>
                <p>- الإسم اللاتيني : الإسم العلمي أو النباتي الرسمي للنبات
                  <br>
                  مثال .. Dracaena marginata هو الإسم اللاتيني the dragon tree
                </p>
                <p>- الإسم الشائع : الإسم المعتاد أو الشائع اللي يستخدمه النبات في ثقافتك
                  <br>
                  مثال .. the dragon tree هو الإسم الشائع لـDracaena marginata
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
