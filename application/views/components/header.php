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
    <header>
        <nav>
          <button class="show-links-button"><i class="fas fa-bars"></i></button>
          <ul class="links">
            <li id="language-switch">
              <object data="assets/images/language.svg" type=""></object>
              <a href="" id="language-text"> English</a>
            </li>
            <li>
              <object data="assets/images/ksa.svg" type=""></object>
              <a href=""> اليمن YER</a>
            </li>
            <li>
              <object data="assets/images/location.svg" type=""></object>
              <a href="">سياسة الخصوصية </a>
            </li>
            <li>
              <object data="assets/images/i.svg" type=""></object>
              <a href="<?php echo BASEURL;?>contact_us">المساعدة</a>
            </li>
            <li>
              <object data="assets/images/trueShield.svg" type=""></object>
              <a href="<?php echo BASEURL;?>contact">اتصل بنا</a>
            </li>
            <li>
              <object data="assets/images/van.svg" type=""></object>
              <a href="<?php echo BASEURL;?>about">من نحن</a>
            </li>
            <li>
              <object data="assets/images/star.svg" type=""></object>
              <a href="<?php echo BASEURL;?>library" class="index">الرئيسية</a>
             
            </li>
            <li id="show-dialog">
              <object data="assets/images/profile.svg" type=""></object>
              <a href="">ادخل لحسابك </a>
              <a href=""> او سجل الان</a>
            </li>
          </ul>
        </nav>
  <!--login-->
  <div class="overlay hide"></div>
  <div class="logIn hide">
    <button id="hide-dialog">
      <img src="assets/images/cancel.svg" alt="" />
    </button>
    <h2>تسجيل الدخول</h2>
  
    <form action="">
      <input
        type="text"
        name=""
        placeholder="البريد الالكتروني او رقم الجوال"
        id=""
      />
      <div class="password">
        <input type="password" name="" placeholder="كلمة المرور" id="" />
        <a href="" class="forgot">نسيت ؟</a>
      </div>
      <input
        type="submit"
        value=" تسجيل الدخول
    "
      />
    </form>
  
    <div class="create-account">
      <p>ليس لديك حساب ؟</p>
      <button id="create-new-account">إنشاء حساب جديد</button>
    </div>
  </div>
  
      <!---sin up-->
  
  
      <div class="signUp hide">
        <button id="hide-signUpDialog">
          <img src="assets/images/cancel.svg" alt="" />
        </button>
        <h2>إنشاء حساب</h2>
  
        <form action="">
          <div class="phone-number">
            <input type="number" name="" placeholder="رقم الجوال" id="phone" />
            <select name="countryCode" id="countryCode">
              <option data- value="+970">+970</option>
              <option style="background-image: url(assets/images/country.svg)">
                +970
              </option>
            </select>
          </div>
          <p>سوف نرسل لك <strong>رمز التحقق عن طريق رسالة نصية</strong></p>
  
          <button class="btn">إرسال رمز التحقق</button>
          <input type="text" name="" placeholder="الإسم الأول" id="" />
          <input type="text" name="" placeholder="أسم العائلة" id="" />
          <input type="email" name="" placeholder="البريد الإلكتروني" id="" />
          <input
            type="email"
            name=""
            placeholder="تأكيد البريد الإلكتروني"
            id=""
          />
          <input type="text" name="" placeholder="كلمة المرور" id="" />
  
          <div class="check">
            <input type="checkbox" name="" id="" />
            <label for="agree">أوافق علي <a href="">الشروط والاحكام</a></label>
          </div>
          <div class="check">
            <input type="checkbox" name="email-post-signIn" id="" />
            <label for="agree">التسجيل للإنضمام للنشرة الإخبارية</label>
          </div>
          <input type="submit" class="btn" value="إنشاء حساب" />
        </form>
  
        <p class="login">
          لديك حساب ؟
          <a href="">
            تسجيل الدخول <img src="assets/images/rightArrowBlue.svg" alt=""
          /></a>
        </p>
      </div>
   
        <!-- <button id="show-dialog">show dialog</button> -->
  
        <div class="sertching">
          <div class="img">
            <img src="assets/images/ccc.png" alt="" />
          </div>
  
          <div class="subsertching">
            <input type="search" placeholder="البحث" />
            <object
              data="assets/images/search.svg"
              class="iconofsertch"
              type=""
            ></object>
          </div>
  
          <div style="position: relative">
            <span id="counter"></span>
            <a href="<?php echo BASEURL;?>cart"> </a>
            <object data="assets/images/cart.svg" class="cart" type=""></object>
          </div>
        </div>
  
        <!-- ------------------- slider ------------------- -->
        <div class="slider-container">
          <div class="slides">
            <div class="slide">
              <img src="assets/images/slider_img3.jpg" class="slide-img" alt="" />
            </div>
            <div class="slide">
              <img src="assets/images/slider_img4.webp" class="slide-img" alt="" />
            </div>
            <div class="slide">
              <img src="imgs/slider_img3.jpg" class="slide-img" alt="" />
            </div>
            <div class="slide">
              <!-- <div> -->
              <img src="imgs/slider_img4.webp" class="slide-img" alt="" />
              <!-- </div> -->
            </div>
          </div>
          <div class="btn-container">
            <button type="button" class="nextBtn">
              <img src="imgs/svg/rightArrow.svg" alt="" />
            </button>
            <button type="button" class="prevBtn">
              <img
                src="imgs/svg/rightArrow.svg"
                style="transform: rotateY(180deg)"
                alt=""
              />
            </button>
          </div>
        </div>
  <!---catogrey-->


      </header>

     


     <script>
    



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