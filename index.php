<?php
include 'Masif/OnlineOrderingEnglish/components/connect.php';
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
   <title>home</title>
   <link rel="icon" type="image/x-icon" href="OnlineOrderingEnglish/order.ico">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="Masif/OnlineOrderingEnglish/css/style.css">
   <style>
      .fontchange{
         font-family:Rabar_027;
      }
      body{
         background: url(s.png); 
         background-repeat:no-repeat;
         background-size:contain;
         background-position: center; 
         overflow: hidden;
      }
      #clock{ 
         font-size:40px;
  line-height:35px;
  color:black;
  font-weight: 400;
    margin-left: 600px;
   
}
.header{background:RGB(163,8,12);}

.box{
margin:35%;
padding:20px;
}


@media (max-width:1080px) {
   .box{
margin:30%;
padding:20px;
}


}
.header{background:RGB(163,8,12);}

.box{
margin:35%;
padding:20px;
}


@media (max-width:770px) {
   .box{
margin:25%;
padding:20px;
}


}
@media (max-width:810px) {
   .box{
margin:25%;
padding:20px;
}
}





   </style>
</head>
<body>
<header class="header">
   <section class="flex">
      <a href="#" class="logo" style="color:white;  font-family:algerian" >⚜ FAST FOOD DELIVERY ⚜ </a>
      <nav class="navbar">
      </nav>
      <div class="icons">
      <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>
   </section>
</header>

<div id="clock">
<script>
        function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            // Add leading zero if needed
            hours = (hours < 10) ? "0" + hours : hours;
            minutes = (minutes < 10) ? "0" + minutes : minutes;
            seconds = (seconds < 10) ? "0" + seconds : seconds;

            var timeString = hours + ":" + minutes + ":" + seconds;

            document.getElementById("clock").innerText = timeString;
        }

    
        setInterval(updateClock, 1000);

        
        updateClock();
    </script>
</div>




<section class="category">
   <h1 class="title" style="color:darkgrey;  font-family:normal" >Choose Your Language  -  زمانێک هەڵبژێرە</h1>
   <br>
   
   <div class="box-container">
      <a href="shopping.php" class="box" style="border-radius:200px  " >
         <img src="en.png" alt="">
         <h3>English</h3>
      </a>
      <a href="bazarkrdn.php" class="box"  style="border-radius:200px">
         <img src="ku.png" alt="">
         <h3>کوردی</h3>
      </a>
      
   </div>
</section>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>
<script>
var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});
</script>


 
</body>
</html>
