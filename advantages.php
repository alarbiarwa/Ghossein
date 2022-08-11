<!DOCTYPE html>

<html dir="rtl">

<head>

  <meta charset="utf-8">
  <title>اهميّة النباتات</title>
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
    <h2>ليش البناتات مهمّة في حياتنا؟</h2>
    <p>لا شك في انه الكل يتفق في أن إستخدام النباتات بداخل المنزل يزيّن الغرف و يزيدها إقبال و شراحة و يخلق
      وجودها بيئة هادئة, و راح
      نعدّد بعض النقاط اللي توضّح أهميّة النباتات و الفارق اللي تصنعه
    </p>
  </div>
  <table>
    <tbody>
      <tr>
        <td>
          <div class="card">
            <img src="images/NASA.jpg" style="width:90%" onclick="getmodal('id01');">
            <input type="button" value="مكافحة للأمراض" class="bold" onclick="getmodal('id01');">
            <div id="id01" class="modal">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">مكافحة للأمراض</h3>
                <p>في الثمانينات, بدأ ظهور إتجاه شائع في المباني اللي تم بناءها مع وضع كفاءة الطاقة في الإعتبار في جميع
                  أنحاء أوروبا و الولايات المتحدة
                  <br>
                  اشتمل هذا الإتجاه على عدد من الأعراض اللي لوحِظت في الأشخاص العاملين في هذه المباني مثل الحساسيّة
                  و الصداع و فقدان التركيز و سرعان ما ارتبطت هذه الظاهرة بسوء نوعيّة الهواء الداخلي و صارت تُعرف بإسم
                  ( متلازمة البناء المرضي SBS )
                  <br>
                  من ذاك الوقت و مسؤولين الصحّة في دائرة قلق بسبب تلوّث الهواء الداخلي و ما يسبّبه من مخاطر صحّية و تكلفة ماليّة نتيجة لذلك
                </p>
                <p> و في ذاك الوقت و عن طريق الصدفة, بدأت وكالة ناسا ببعض التجارب على النباتات المنزليّة في محاوولة
                  إيجاد طرق لإزالة السموم و التلوث, كانت ناسا تبحث عن طرق لحل المشاكل اللي تصير في المركبات الفضائيّة
                  و في الغلاف الجوّي المحتمل في المستقبل على النباتات و القمر, و كلاهما راح يشملان الناس في بيئة محكمة الإغلاق
                </p>
                <p>كان الدكتور ولفرتون عالمًا مشاركًا في أبحاث ناسا و اللي توصّلت إلى أن بعض النباتات المنزليّة
                  قادرة على تصفية و إزالة التلوّث بفعاليّة كبيرة مما أدى إلى زيادة كبيرة في جودة الهواء الداخلي
                  <br>
                  بعد هذا الخبر, نشر ولفرتون قائمة تضم 50 نباتًا منزليًا منظفة للهواء و كتابًا مجانيًا
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="card">
            <img src="images/bedroom.jpg" style="width:90%"  onclick="getmodal('id02');">
            <input type="button" value="لها قيمة نفسيّة" class="bold"  onclick="getmodal('id02');">
            <div id="id02" class="modal">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">لها قيمة نفسيّة</h3>
                <p>ثقافيًا, تجعلنا النباتات نشعر بالراحة و من الممكن أن يكون لها إرتباط روحي قوي بمن حولنا, كإرتباط
                  النباتات و الأزهار في مناسباتنا السعيدة
                  <br>
                  أيضًا ممطن تساعد النباتات و الإعتناء بها في التخلّص من التوتّر اليومي و التخفيف من حدّته, و تقدر تسأل أي
                  بستاني
                  <br>
                  بالواقع .. قامت مجلّة UK Magazine world Gardeners World بهالشيء, و في يونيو قدّموا نتائج دراسة أُجريت على مستوى الدولة
                  و لخّصت إلى أن 80% من البستانيين أعلنوا أنهم " راضون عن الحياة " مقارنة بـ 67% من غير البستانيين,
                  <br>
                  إضافة لذلك .. وجدوا أن البستانيين أكثر إيجابيّة عقليًا, حيث وجدت دراسات أخرى أن زراعة النباتات كهواية
                  من أفضل الطرق لتحسين الصحّة العقليّة و الجسديّة في أي عمر
                  <br>
                  و من كثر الفارق اللي يصنعه وجود النباتات في الغرف, يقسم بعض الناس أن وجودها في غرفة النوم يحسّن نوعيّة نومهم
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>

      <tr>
        <td>
          <div class="card">
            <img src="images/houseplants.jpg" style="width:90%"  onclick="getmodal('id03');">
            <input type="button" value="جيّدة في بيئة العمل" class="bold"  onclick="getmodal('id03');">
            <div id="id03" class="modal">
              <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card">جيّدة في بيئة العمل</h3>
                <p>في المملكلة المتحدة وحدها, يُنفق سكّانها سنويًا أكثر من ملياري جنيه إسترليني على النباتات الداخلية
                  و الزهور المقطوفة, و ينفق الأوروبيّون 36 مليار يورو في جميع أنحاء أمريكا
                  <br>
                  <br>
                  هذا يعني انه نفقات النباتات منذ جيل الألفيّة في إزدياد من قِبل أفضل المطاعم و الفنادق في العالم
                  و تتميّز أكثر المباني لفتًا للنظر و التي لا تُنسى بالنباتات بطريقةٍ ما, لك أن تتخيّل أن المكاتب الأكثر
                  فاعليّة من حيث الإنتاجيّة و تقليل التغيّب تحتوي جميعها على نباتات كجزء من تصميم المبنى
                </p>

                <p>و لكل الأسباب المذكورة في المقالة, نقدر نقول بكل ثقة أن النباتات مفيدة لك .. سواءً في المنزل لراحتك أو
                  <br>
                  أو في بيئة عملك لتحفيزك, أو حتى في متجرك لجذب إنتباه و إقبال الزباين لك بكل رحابة صدر, و راح تستفيد
                  منها شخصيًا في كل الأحوال من خلال تحسين صحّتك الجسديّة و الحفاظ عليها و تعزيز صحّتك العقليّة
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>
 <!--sarah-->
 <tr>
        <td>
          <div class="card">
            <img src="images/opinion.jpg" style="width:90%"  onclick="getmodal('id04');">
            <input type="button" value="برأيك لماذا هي مهمة؟" class="bold"  onclick="getmodal('id04');">
            <div id="id04" class="modal">
              <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">×</span>
              <div class="modal-content animate">
                <h3 class="head-card"> برأيك لماذا هي مهمة؟ </h3>

                <form action="advantages.php" method="GET">
                        <input type="text" name="text" id="opinion" />
                        <input type="submit" name="submit" value="حفظ">
                </form>

                         
                <p><?php
               
               if(isset($_GET['text'])) {
                $data = $_GET['text'] . "\r\n";
                $ret = file_put_contents('opinion.txt', $data, FILE_APPEND | LOCK_EX);
               }
               $myfile = fopen("opinion.txt", "r") or die("Unable to open file!");
               while(!feof($myfile)) {
                 echo fgets($myfile) . "<br>";
               }
                  ?>
                </p>
              </div>
            </div>
          </div>
        </td>
      </tr>
      <!--/sarah-->


      <script src="js/index.js"></script>
    </tbody>
  </table>
  </div>
  <footer>&copy;2021</footer>
</body>

</html>
