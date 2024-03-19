<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <link rel="icon" type="image/x-icon" href="order.ico">


   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      .fontchange{
         font-family:Rabar_027;
      }
    
      
      body{background:white;}
  
   </style>

</head>
<body dir="rtl">
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading"style="background-color:RGB(163,8,12);">
   <h3 class="fontchange"> دەربارەی ئێمە </h3>
   <p class="fontchange"><a href="home.php" class="fontchange">سەرەکی</a> <span class="fontchange"> / دەربارە</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="content">
         <h3 class="fontchange"> بۆچی ئێمە هەڵبژێرن ؟</h3>
         <p class="fontchange"> 
         کوالیتی خزمەتگوزاری، خواردن، ژینگە و بەهای پارە توخمە سەرەکییەکانی هەڵبژاردنی چێشتخانەن. چێشتخانەی مەسیف یەکێکە لە نایابترین چێشتخانەکانی خواردنی باش لە ناوچەکەدا کە دیمەنێکی سەرنجڕاکێشی هەیە و کەشێکی تەواو و خواردنی خۆشی هەیە. تیمەکەمان هەمیشە بەوپەڕی خۆشحاڵییەوە خزمەتگوزاری ناوازەتان پێشکەش بکات و دڵتان بەدەست بهێنێت.
         </p>
         <a href="https://epu.edu.iq/shaqlawa-technical-collage/" target="_blank" class="btn fontchange"> زیاتر بزانە </a>
         <a href="menu.php" class="btn fontchange"> خواردنەکانمان </a>
      </div>

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

<h1 class="title fontchange"> چەند هەنگاوێکی ئاسان </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3 class="fontchange"> داواکاریەکەت یەکلابکەوە </h3>
         <p class="fontchange"> ئەو خواردنە هەڵبژێرە کە دەتەوێت </p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3 class="fontchange"> خێراترین گەیاندن </h3>
         <p class="fontchange"> ئێمە بە زووترین کات خواردنەکەت بۆ دەنێرین </p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3 class="fontchange"> چێژ وەربگرە </h3>
         <p class="fontchange"> تامی خواردنەکانمان لەبیر نەکراون </p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<!-- <section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum molestias ut earum nulla sint voluptatum labore nemo.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section> -->

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>