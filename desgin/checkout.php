<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

// include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<div class="heading">
   <h3>checkout</h3>
   <p><a href="home.php">home </a> <span> / checkout</span></p>
</div>

<section class="checkout">

   <h1 class="title">order summary</h1>

   <form action="" method="post">
      <div class="cart-items">
         <h3>cart items</h3>
         <p><span class="name">delicious pizza 01</span><span class="price">$3</span></p>
         <p><span class="name">main dish 02</span><span class="price">$3</span></p>
         <p><span class="name">delicious dessert 01</span><span class="price">$3</span></p>
         <p class="grand-total"><span class="name">grand total :</span> <span class="price">$9</span></p>
         <a href="cart.php" class="btn">view cart</a>
      </div>
      <div class="user-info">
         <h3>your info</h3>
         <p><i class="fas fa-user"></i> <span>shaikh anas</span></p>
         <p><i class="fas fa-phone"></i> <span>1234567890</span></p>
         <p><i class="fas fa-envelope"></i> <span>shaikhanas@gmail.com</span></p>
         <a href="update_profile.php" class="btn">update info</a>
         <h3>delivery address</h3>
         <p class="address"><i class="fas fa-map-marker-alt"></i> <span>flat no. 1, building no. 1, jogeshwari west, mumbai, india - 400104</span></p>
         <a href="update_address.php" class="btn">update address</a>
         <select name="method" class="box" required>
            <option value="" disabled selected>select payment method</option>
            <option value="cash on delivery">cash on delivery</option>
            <option value="credit card">credit card</option>
            <option value="paytm">paytm</option>
            <option value="paypal">paypal</option>
         </select>
      </div>
      <input type="submit" value="place order" name="order" class="btn order-btn">
   </form>

</section>
























<footer class="footer">

   <section class="box-container">

      <div class="box">
         <img src="images/email-icon.png" alt="">
         <h3>our email</h3>
         <a href="mailto:shaikhanas@gmail.com">shaikhanas@gmail.com</a>
         <a href="mailto:anasbhai@gmail.com">anasbhai@gmail.com</a>
      </div>

      <div class="box">
         <img src="images/clock-icon.png" alt="">
         <h3>opening hours</h3>
         <p>00:07am to 00:10pm </p>
      </div>

      <div class="box">
         <img src="images/map-icon.png" alt="">
         <h3>our address</h3>
         <a href="https://www.google.com/maps">mumbai, india - 400104</a>
      </div>

      <div class="box">
         <img src="images/phone-icon.png" alt="">
         <h3>our number</h3>
         <a href="tel:1234567890">+123-456-7890</a>
         <a href="tel:1112223333">+111-222-3333</a>
      </div>

   </section>

   <div class="credit">&copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!</div>

</footer>

<div class="loader">
   <img src="images/loader.gif" alt="">
</div>

<script src="js/script.js"></script>

</body>
</html>