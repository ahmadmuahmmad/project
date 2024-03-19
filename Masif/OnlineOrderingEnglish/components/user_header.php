<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header"style="background-color:RGB(163,8,12);">

   <section class="flex" style="background-color:white;">

      <a href="home.php" class="logo" style="color:black;">Masif Resturant 🍴</a>

      <nav class="navbar" style="color:white;">
         <a href="home.php" style="color:red;">Home</a>
         <a href="about.php" style="color:red;">About</a>
         <a href="menu.php" style="color:red;">Menu</a>
         <a href="orders.php" style="color:red;">Orders</a>
         <a href="contact.php" style="color:red;">Contact</a>
         <a href="../../shopping.php" style="color:red;">All Resturants</a>
         
         <a href="../OnlineOrderingKurdish/home.php" style="color:green;">( English-کوردی)</a>

      </nav>

      <div class="icons">
         <?php
            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_items = $count_cart_items->rowCount();
         ?>
         <a href="search.php"><i class="fas fa-search" style="color:black;"></i></a>
         <a href="cart.php"><i class="fas fa-shopping-cart" style="color:green;"></i><span style="color:black;">(<?= $total_cart_items; ?>)</span></a>
         <div id="user-btn" class="fas fa-user" style="color:red;"></div>
         <div id="menu-btn" class="fas fa-bars" style="color:red;"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p class="name"><?= $fetch_profile['name']; ?></p>
         <div class="flex">
            <a href="profile.php" class="btn">Profile</a>
            <a href="components/user_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">Logout</a>
         </div>
         <!-- <p class="account">
            <a href="login.php">Login</a> Or
            <a href="register.php">Register</a>
         </p>  -->
         <?php
            }else{
         ?>
            <p class="name">Please Login First!</p>
            <a href="login.php" class="btn">Login</a>
         <?php
          }
         ?>
      </div>

   </section>

</header>

