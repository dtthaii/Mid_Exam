<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>my orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="heading">
   <h3>your orders</h3>
   <p><a href="home.php">home </a> <span> / orders</span></p>
</div>

<section class="orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">

      <div class="box">
         <p> placed on : <span>5-29-2022</span> </p>
         <p> name : <span>shaikh anas</span> </p>
         <p> number : <span>1234567899</span> </p>
         <p> email : <span>shaikhanas@gmail.com</span> </p>
         <p> address : <span>jogeshwari, mumbai, india - 400103</span> </p>
         <p> your orders : <span>pizza 01 (1) - main dish 02 (3) -</span> </p>
         <p> total price : <span>$12/-</span> </p>
         <p> payment method : <span>cash on delivery</span> </p>
         <p> payment status : <span>pending</span> </p>
      </div>

      <div class="box">
         <p> placed on : <span>5-29-2022</span> </p>
         <p> name : <span>shaikh anas</span> </p>
         <p> number : <span>1234567899</span> </p>
         <p> email : <span>shaikhanas@gmail.com</span> </p>
         <p> address : <span>jogeshwari, mumbai, india - 400103</span> </p>
         <p> your orders : <span>pizza 01 (1) - main dish 02 (3) -</span> </p>
         <p> total price : <span>$12/-</span> </p>
         <p> payment method : <span>cash on delivery</span> </p>
         <p> payment status : <span>pending</span> </p>
      </div>

   </div>

</section>


<?php include 'components/footer.php'; ?>


<!-- <div class="loader">
   <img src="images/loader.gif" alt="">
</div> -->

<script src="js/script.js"></script>

</body>
</html>