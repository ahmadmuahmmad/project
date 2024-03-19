<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? OR number = ?");
   $select_user->execute([$email, $number]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $message[] = 'ئیمەیڵەکە یان ژمارەکە پێشتر بەکارهاتووە!!';
   }else{
      if($pass != $cpass){
         $message[] = 'پاسوۆردەکان هاوشێوەنین!!';
      }else{
         $insert_user = $conn->prepare("INSERT INTO `users`(name, email, number, password) VALUES(?,?,?,?)");
         $insert_user->execute([$name, $email, $number, $cpass]);
         $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
         $select_user->execute([$email, $pass]);
         $row = $select_user->fetch(PDO::FETCH_ASSOC);
         if($select_user->rowCount() > 0){
            $_SESSION['user_id'] = $row['id'];
            header('location:home.php');
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>بەژداربوون</title>
   <link rel="icon" type="image/x-icon" href="order.ico">


   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      .fontchange{
         font-family:Rabar_027;
      }
   </style>

</head>
<body dir="rtl">
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<section class="form-container">

   <form action="" method="post">
      <h3 class="fontchange">هەژمارێک دروست بکە</h3>
      <input type="text" name="name" required placeholder="ناوەکەت بنووسە" class="box fontchange" maxlength="50">
      <input type="email" name="email" required placeholder="ئیمەیڵەکەت بنووسە" class="box fontchange" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="number" name="number" required placeholder="ژمارە تەلەفۆنەکەت بنووسە" class="box fontchange" min="0" max="9999999999" maxlength="50">
      <input type="password" name="pass" required placeholder="ووشەی نهێنی بنووسە" class="box fontchange" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="cpass" required placeholder="ووشەی نهێنی دووبارە بنووسەوە" class="box fontchange" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="درووستکردنی هەژمار" name="submit" class="btn fontchange">
      <p class="fontchange">هەژمارت هەیە ؟! <a href="login.php" class="fontchange">بچۆرە ژوورەوە</a></p>
   </form>

</section>











<?php include 'components/footer.php'; ?>







<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>