<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select_user->execute([$email, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $_SESSION['user_id'] = $row['id'];
      header('location:menu.php');
   }else{
      $message[] = 'ناوی بەکارهێنەر یان ووشەی نهێنی هەڵەیە!!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>چوونەژوورەوە</title>
   <link rel="icon" type="image/x-icon" href="order.ico">


   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      .fontchange{
         font-family:Rabar_027;
      }
      body{background:#f7ef99;}
   </style>

</head>
<body dir="rtl">
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<section class="form-container" >

   <form action="" method="post">
      <h3 class="fontchange" style="border:double;">چوونەژورەوە</h3>
      <input type="email" name="email" required placeholder="ئیمەیڵەکەت داخڵبکە" class="box fontchange" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" required placeholder="ووشەی نهێنی داخڵبکە" class="box fontchange" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="چوونەژوورەوە" name="submit" class="btn fontchange">
      <p class="fontchange">هەژمارت نییە ؟! <a href="newpharmaccyy.php" class="fontchange">لێرە هەژمار دروستبکە</a></p>
   </form>

</section>











<?php include 'components/footer.php'; ?>






<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>