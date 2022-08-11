<!DOCTYPE html>

<html dir="rtl">

<head>

  <meta charset="utf-8">
  <title>مبيدات حشريّة</title>
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
    <h2>الآفات</h2>
    <p>تُعتبر هجمات الآفات الأكثر شيوعًا في الهواء, بس حتى أصحاب النباتات المنزليّة راح يظلّون ضحيّة لهجوم داخلي
      من حين لآخر
      <br> <br>
      و راح نسرد الآن بعض الآفات الأكثر شيوعًا مع أعراضها المحدّدة و بعدها العلاجات المقترحة
    </p>
  </div>

  <table>
    <tbody>
      <tr>
        <td>
          <div class="card">
            <img src="images/millipedes.jpg" style="width:90%" onclick="getmodal('id01');">
            <input type="button" value="الديدان الألفيّة" class="bold" onclick="getmodal('id01');">
            <div id="id01" class="modal">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">الديدان الألفيّة</h3>
                <p>الدودة الألفيّة هي عادةً حشرات مفيدة, و هي تأكل غالبًا المواد العضويّة مثل الأوراق المتساقطة ممّا يُساعد
                  على تكسيرها و تحويلها إلى مغذيات للنباتات لكن من الداخل ممكن تكون مقلقة للرؤيّة
                </p>
                <p class="paragrapgh">نسرد الحين بعض طروق علاجها</p>
                <p>1- عضوي : في حال لقيت عدد كبير منهم, نوصي هنا بإعادة زراعة نباتك و إزالة أكبر قدر ممكن من التربة
                  القديمة من حول الجذور
                </p>
                <p>2- كيميائي : إذا لزم الأمر, امسك دلو و املأه بالماء الدافي و الصابون السائل, بعد كذا اغمر جذر
                  النبات بالكامل و اتركه لينقع لمدة نصف ساعة بعد كذا تقدر تشيله و تشطف التربة .. بكذا راح تغرق الحشرات
                  أو حتى تُقتل بسبب المواد الكيميائيّة
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="card">
            <img src="images/Mealybug.jpg" style="width:90%" onclick="getmodal('id02');">
            <input type="button" value="البق الدقيقي" class="bold" onclick="getmodal('id02');">
            <div id="id02" class="modal">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">البق الدقيقي</h3>
                <p>هالنوع يسبّب الضرر عن طريق امتصاص النسغ من النبات, إذا تركتها بدون علاج راح يؤدي تلفها إلى
                  إصفرار أوراق النبات و سقوطها بالنهاية
                </p>
                <p class="paragrapgh">و هذه بعض أعراضها :
                  <br>
                  تميل هذه المستعمرات إلى التجمّع على الجانب السفلي من الأوراق و في مفاصل أوراق النباتات, وقتها يظهر
                  لك انه النبات مصاب بالذبول و جاف بشكل عام .. و ممكن يفقد أوراقه بسرعه كبيرة
                </p>
                <p class="paragrapgh">نسرد الحين بعض طروق علاجها</p>
                <p>1- عضوي : تقدر تتخلّص منها بسهولة عن طريق رجّها أو رشّها بالماء</p>
                <p>2- كيميائي : استخدم المنتجات اللي تحتوي على الأحماض الدهنيّة الطبيعيّة أو اللي تحتوي على
                  مادة خافضة للتوتّر السطحي
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="card">
            <img src="images/scalepest.jpg" style="width:90%" onclick="getmodal('id03');">
            <input type="button" value="مقياس الحشرات" class="bold" onclick="getmodal('id03');">
            <div id="id03" class="modal">
              <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">مقياس الحشرات</h3>
                <p>هو آفة صعب تحديدها و ممكن صعب القضاء عليها بعد, الحشرات هذه لها قشرة خارجيّة بنيّة صلبة
                  تحسبها في مكانها, و هي مموهة بدقّة إلى حد أنك لو نظرت لها راح تحسبه عيب طبيعي على ورقة النبات
                </p>
                <p class="paragrapgh">و هذه بعض أعراضها :
                  <br>
                  بكل بساطة, هي لزجة في كل مكان, ناظر بكثف للجانب السفلي من الأوراق أو السيقان و راح تشوف أنها أقراص
                  بنيّة صفيرة مستديرة أو مستطيلة
                </p>
                <p class="paragrapgh">نسرد الحين بعض طروق علاجها</p>
                <p>1- عضوي : استخدم الكحول, فـ هالشيء يذيبهم في الأساس</p>
                <p>2- كيميائي : ابحث عن البيرميثرين أو المنتجات اللي تحتوي علو الملاثيون .. استخدمها كآخر حل
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="card">
            <img src="images/slugs.jfif" style="width:90%" onclick="getmodal('id04');">
            <input type="button" value="الرخويات أو القواقع" class="bold" onclick="getmodal('id04');">
            <div id="id04" class="modal">
              <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">الرخويات أو القواقع</h3>
                <p>في 95% من الحالات راح تواجه هالمشكلة على النباتات اللي تختار تحطّها في الخارج في الأشهر الأكثر
                  دفئًا من العام, إلى حد أنهم قادرين ينشئون متجر في منزلك
                  <br>
                  هي حشرة كبيرة, و حتى الضرر اللي تسبّبه كبير جدًا و اللي ممكن يصير خلال فترة زمنيّة قصيرة !
                </p>
                <p class="paragrapgh">و هذه بعض أعراضها :
                  <br>
                  راح تلاحظها بشكل سريع, راح تتعرّض الأوراق للتلف أو الثقوب الكبيرة, و أحيانًا يتركون أثر لزج في جميع أنحاء المنطقة
                </p>
                <p class="paragrapgh">نسرد الحين بعض طروق علاجها, و لا تشيل هم لأنها تُعتبر من الأسهل من ناحية التعامل معها</p>
                <p>1- عضوي : إذا كانت النباتات بالخارج فالموضوع بسيط, بس حطّها بمكان محمي و مرتفع, لانها
                  تتمتّع بغرائز تخلّيها ترجع لنفس المكان القديم
                </p>
                <p>2- عضوي \ كيميائي : تقدر تقتلهم ببساطة إما بحذاء - يُكرم القارئ - أو بحبيبات
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
