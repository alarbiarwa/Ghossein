<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title> نباتات صالحة للأكل </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/Dstyle.css" />
  <link rel="stylesheet" href="css/style.css">
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
 
  <h1 class="heading"> نباتـــات صـالحة للأكل </h1>
  <div class="gallery-grid">
    <figure class="gallery-frame">

      <img class="gallery-img" src="images/eatimg/hnd.jpg" onclick="getmodal('id01');" />
      <img class="gallery-img" src="images/eatimg/lsa.jpg" onclick="getmodal('id02');" />
      <img class="gallery-img" src="images/eatimg/sba.jpg" onclick="getmodal('id03');" />
      <img class="gallery-img" src="images/eatimg/sno.jpg" onclick="getmodal('id04');" />
      <img class="gallery-img" src="images/eatimg/tot'.jpg" onclick="getmodal('id05');" />
      <img class="gallery-img" src="images/eatimg/bot.jpg" onclick="getmodal('id06');" />

    </figure>
  </div>

  <div id="id01" class="modal">

    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">


      <div>
        <h2> نبات الهندباء </h2>
        <p> من أسهل النباتات البرية الصالحة للأكل في هذه القائمة هو نبات الهندباء البرية، وقد يتم العثور عليه في كل مكان في الحديقة الخاصة بك، وفي الغابة، وأحيانا ينمو بين الشقوق في الخرسانة، وفي الربيع تظهر براعم صفراء زاهية، والنبات بأكمله صالح
          للأكل مثل الجذور والأوراق والأزهار، فيمكنك أن تأكل كل شيء نيئا أو تطبخه لتزيل المرارة،
          ويمكنك غلى النبات وتناول المشروب، واستخدام الزهرة كمزيج لسلطة الهندباء
          ، ونبات الهندباء غني بفيتامين (أ) وفيتامين (ج)، وبيتا كاروتين
        </p>
      </div>
    </div>
  </div>


  <div id="id02" class="modal">

    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">

      <h2> لسان الحمل </h2>
      <p> مثل الهندباء والبرسيم، يعتبر لسان الحمل من النباتات البرية التي عادة تنمو في كل مكان تقريبا تجد فيه جميع الأعشاب، كما تعلمون ، فيمكنك اختيار الأوراق الخضراء الممزقة وترك سيقان الزهور الطويلة، فيمكن استخدامها مع بعض الزبدة والثوم تماما كما
        تفعل مع الخضراوات الورقية الأخرى، كما أن لسان الحمل الذي يعتبر من النباتات البرية لديه صفات طبية متأصلة كذلك، ويتم استخدام الأوراق الطازجة كاملة على شكل كمدات، وتفرك الأوراق على أجزاء من الجسم التي لدغتها الحشرات، أو استخدامها
        على الحروق، حيث أن الأوراق سوف تعمل على تخفيف آثارها وتوقف نزيف الجروح الطفيفة.
      </p>
    </div>
  </div>

  <div id="id03" class="modal">

    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> الصبار الكمثري الشائك </h2>
      <p>
        الصبار الكمثري الشائك الذي يعد من العناصر الأساسية في النظام الغذائي في المكسيك وأمريكا الوسطى منذ مئات السنين يعد نباتا لذيذا وغذائيا يساعدك على البقاء على قيد الحياة إذا كنت تقطعت بك السبل في الصحراء، فقط قم بإزالة الأشواك بعناية على الجلد
        الخارجي (وإلا سوف تشعر بأنك تبلع نمسا)، وثمار الصبار الكمثري الشائك تنضج في أواخر الصيف، وتبدو ككمثرى حمراء أو أرجوانية (ومن هنا الاسم) ويمكن أن تؤكل كفاكهة،
        ويمكن إعداد بعض الشرائح من النبات وتناوله مثل الخضار النيئ أو المغلي أو المقلي، وعادة ما تكون بتلات
        الزهرة من اللون الأصفر أو الوردي أو الأرجواني أو الأحمر، ويمكن أيضا تناولها في السلطة.
      </p>

    </div>
  </div>

  <div id="id04" class="modal">

    <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> الصنوبر </h2>
      <p>
        هناك اكثر من مية نوع من الصنوبر بعض أنواع الصنوبر من النباتات البرية التي لديها بذور صالحة للأكل كبيرة (مكسرات) لذيذة تماما، ويمكنك أيضا استخدام الإبر للأغراض الطبية، فقط أضيفي بعض إبر الصنوبر إلى الماء المغلي لصنع الشاي الغني بفيتامين أ
        وفيتامين ج، حتى أن بعض الناس قد استخدموه غلي أو تحمير اللحاء الأبيض الداخلي من أن تناوله، واستخدموا
        حبوب اللقاح كمكثف للشوربات واليخنة، مع الحذر أن بعض أنواع الصنوبر سامة
      </p>

    </div>
  </div>

  <div id="id05" class="modal">

    <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> التوت الأسود </h2>
      <p>
        التوت الأسود من النباتات البرية التي تستطيع أن تأكلها إذا وجدته في البرية، فالتوت الأسود البري هو آمن بنسبة 100 ٪ للأكل وسهل التعرف عليه، والتوت الأسود لديه فروع حمراء مع أشواك طويلة، وأوراق خضراء خشنة، وزهور بيضاء مع 5 بتلات، وإذا عثرت على
        التوت الأسود في البرية، فقد عثرت على الذهب، والتوت الأسود هو أفضل بكثير من أي شيء،
        وهو متاح الآن وسوف تشتريه من المتاجر، وينضج التوت من أغسطس إلى سبتمبر
      </p>

    </div>
  </div>

  <div id="id06" class="modal">

    <span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div class="modal-content animate">
      <h2> عشب البوط </h2>
      <p>
        عشب البوط هو عشب ينمو بجانب البرك والمستنقعات، وهو واحد من النباتات البرية الصالحة للأكل الأقل شهرة، وعادة ما يتم العثور على عشب البوط بالقرب من حواف الأراضي الرطبة في المياه العذبة، ومعظم عشب البوط صالح ،فيمكنك غلي الجذور أو تناولها نيئة،
        ويمكنك أيضا تناول معظم ساق النبات، وأفضل جزء من الساق هو القريب من القاع حيث يكون النبات أبيض بشكل رئيسي، فيمكنك إما غلى الساق أو أكل الساق نيء،
        ويمكنك أيضا غلي أوراق الشجر وأكلها كما تفعل مع غيرها من الخضراوات، وعلى الرغم من أن رأس البذرة قد يشبه الذرة،
        إلا أنها ليست صالحة للأكل، ومع ذلك، يمكنك الإحتفاظ بالرؤوس وتمزيقها لاستخدامها كمادة في صنع النار
      </p>

    </div>
  </div>

  <script type="text/javascript" src="js/index.js"></script>

  <footer>&copy;2021</footer>

</body>

</html>
