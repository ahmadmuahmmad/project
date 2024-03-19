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
      
      body{background:white;}
  </style>
</head>
<body>
<?php include 'components/user_header.php'; ?>
<div class="heading"style="background-color:darkred;">
   <h3>about us</h3>
   <p><a href="home.php">Home</a> <span> / About</span></p>
</div>
<section class="about">
   <div class="row">

            <div class="image">
               <img src="images/about-img.svg" alt="">
            </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p>
         Unlike all other restaurants, Erbil Restaurant has prepared the best place and staff
         for you. For us, the most important criterion for a successful restaurant is
         cleanliness. Visit us and testify for yourself
         </p>
         <a href="https://epu.edu.iq/shaqlawa-technical-collage/" target="_blank" class="btn">Learn More</a>
         <a href="menu.php" class="btn">Our Menu</a>
      </div>

      
   </div>
</section>
<section class="steps">
   <h1 class="title">simple steps</h1>
   <div class="box-container">
      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p>Choose The Products You Want</p>
      </div>
      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p>It Will Arrive In The Shortest Possible Time</p>
      </div>
      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Enjoy Food</h3>
         <p>The flavors of our food not been forgotten</p>
      </div>
   </div>
</section>
<?php include 'components/footer.php'; ?>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
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