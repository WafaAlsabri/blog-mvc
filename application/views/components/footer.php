<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
      src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
      data-auto-a11y="true"
    ></script>
    <link rel="stylesheet" href="<?php echo BASEURL;?>assets/css/subtsyle.css">
   
    
    <link rel="stylesheet" href="css/all.min.css" />
    <title>Document</title>
</head>
<body>
  
<footer>
   

  <section class="upper-part">
      <ul class="about">
        <h3>عن جرير</h3>
        <li><a href="">من نحن</a></li>
        <li><a href="">الحوكمه</a></li>
        <li><a href="">علاقات المستثمرين و التقارير</a></li>
        <li><a href="">الاستدامه</a></li>
        <li><a href="">الاخبار</a></li>
        <h3><a href="">فرص العمل</a></h3>
      </ul>

      <ul class="quick-links">
        <h3>روابط سريعه</h3>
        <li><a href="">اصدارات جرير</a></li>
        <li><a href="">قارئ جرير</a></li>
        <li><a href="">شركاء برامج المكافئات </a></li>
        <li><a href="">خدمات شركات الاتصال</a></li>
      </ul>

      <ul class="services">
        <h3>خدمات جرير</h3>
        <li><a href=""> خدمات تقسيط تقسيط المشتريات</a></li>
        <li><a href="">خدمات ما بعد البيع</a></li>
        <li><a href="">خدمات الحمايه الشاملة</a></li>
        <li><a href="">حماية أجهزة آبل</a></li>
        <li><a href="">بطاقة خصم جرير</a></li>
        <li><a href="">بطاقة جرير للهدايا</a></li>
      </ul>

      <ul class="custumer-services">
        <h3>خدمةالعملاء</h3>
        <li><a href=""> مبيعات الشركات</a></li>
        <li><a href="">الاسئلة المتكررة</a></li>
        <li><a href="">دليل التسوق والمطبوعات</a></li>
        <li><a href="">مواقع المعارض</a></li>
        <li><a href="">سياسة الضمان</a></li>
        <li><a href="">سياسة الاسترجاع والاستبدال</a></li>
        <p class="call-us">
          اتصل بنا <br />
          92090232323
        </p>
      </ul>
      <section class="posts">
        <div>
          <h3>انضم الى نشرتنا البريدية</h3>
          <form action="">
            <input type="search" placeholder="ادخل بريدك الالكتروني" />
            <input type="submit" value="اشتراك" />
          </form>
        </div>
        <div class="contact-us">
          <h3>تواصل معنا</h3>
          <div class="social-icons">
            <img src="assets/images/facebook.svg" alt="" />
            <img src="assets/images/twitter.svg" alt="" />
            <img src="assets/images/youtube.svg" alt="" />
            <img src="assets/images/facebook.svg" alt="" />
            <img src="assets/images/linkedin.svg" alt="" />
            <img src="assets/images/snapshat.svg" alt="" />
            <img src="assets/images/tictok.svg" alt="" />
          </div>
        </div>
      </section>
    </section>
    <section class="lower-part">
      <div class="text">
        <p><a href="" style="color: slategrey;">سياسة الخصوصية </a> <a href="">| شروط الخدمة</a></p>
        <p style="color: slategrey;">
          جميع الحقوق محفوظة لمكتبة جرير 2015 س.ت.1011120120. اونلاين
          س.ت.1010987453
        </p>
      </div>
      <div class="pay-methods">
        <div class="img">
          <img src="assets/images/payInGallery.svg" alt="" />
        </div>
        <div class="img">
          <img
            src="assets/images/qitaf.svg"
            class="white-card"
            alt=""
          />
        </div>
        <div class="img">
          <img
            src="assets/images/mada.svg"
            class="white-card"
            style="padding: 8px 3px"
            alt=""
          />
        </div>
        <div class="img">
          <img src="assets/images/visa.svg" alt="" />
        </div>
        <div class="img">
          <img src="assets/images/masterCard.svg" alt="" />
        </div>
        <div class="img">
          <img
            src="assets/images/americanExpress.svg"
            style="background-color: #27ade4; border-radius: 5px"
            alt=""
          />
        </div>
        
      </div>
    </section>

<!--<div class="subfooter">
<div class="subfooter1">

  <p>سياسة الخصوصية | شروط الخدمة</p>
  <br>
  <p>جميع الحقوق محفوظة لدى مكتبةر</p>
</div>
<div class="subfooter2">

  <img  class="img2" src="assets/images/mada.png"> 
  <img  class="img2" src="assets/images/visa.png"> 
  <img  class="img2" src="assets/images/mada.png"> 
  <img  class="img2" src="assets/images/visa.png"> 
</div>
<div class="overlay" id="overlay" onclick="openForm()"></div>
</div>-->
</footer>
     <script>
       /*counter
        setInterval(displayClock,500);
  function displayClock(){
      var time=new Date();
      var hrs=time.getHours();
      var min=time.getMinutes();
      var sec=time.getSeconds();
      var en='AM';
      if(hrs>12){hrs=hrs-12;}
      if(hrs==0){hrs=12;}
      if(hrs<10){hrs='0' +hrs;}
      document.getElementById('clock').innerHTML=hrs + ':' + min + ':' + sec ;
  }*/



prevBtn.style.display = "none";


const showDialog = document.getElementById("show-dialog");
const loginDialog = document.querySelector(".logIn");
const overlay = document.querySelector(".overlay");
const hideDialog = document.getElementById("hide-dialog");
const hideSignUpDialog = document.getElementById("hide-signUpDialog");

const createNewAccout = document.getElementById("create-new-account");
const signUpDialog = document.querySelector(".signUp");
console.log(signUpDialog);

console.log(showDialog);
showDialog.addEventListener("click", function (e) {
  e.preventDefault();
  overlay.classList.toggle("hide");
  //   if(!showDialog.classList.contains("hide") || ! signUpDialog.classList.contains("hide"))
  loginDialog.classList.toggle("hide");
});
hideDialog.addEventListener("click", function () {
  overlay.classList.add("hide");
  loginDialog.classList.add("hide");
  
});






 

</script>

      <script src="Js/main.js"></script>
      <script src="assets/js/p.js"></script>
</body>
</html>