<?php 
    include 'include/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book</title>
</head>
<body>
<!-- <div class="heading" style="background:url(http://localhost/homestayWeb/images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div> -->

<div class="heading" style="background:url(https://dsdigkpw1b1xa.cloudfront.net/frontend/images/vietnam-trip-4.jpg) no-repeat">
   <h1>Đặt vé ngay</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Hãy nhập thông tin của bạn!</h1>

   <form action="book_db.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Họ và tên :</span>
            <input type="text" class="inputName" placeholder="Hãy nhập tên của bạn" name="name" required>
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="Hãy nhập email của bạn" name="email" required>
         </div>
         <div class="inputBox">
            <span>SĐT :</span>
            <input type="number" class="inputSdt" placeholder="Hãy nhập số điện thoại của bạn" name="phone" required>
         </div>
         <div class="inputBox">
            <span>Địa chỉ :</span>
            <input type="text" placeholder="Hãy nhập địa chỉ của bạn" name="address" required>
         </div>
         <div class="inputBox">
            <span>Nơi đến :</span>
            <input type="text" placeholder="Bạn muốn du lịch ở đâu???" name="location" required>
         </div>
         <div class="inputBox">
            <span>Bao nhiêu:</span>
            <input type="number" placeholder="Hãy nhập số du khách" name="guests" required>
         </div>
         <div class="inputBox">
            <span>Ngày đến :</span>
            <input type="date" name="arrivals" required>
         </div>
         <div class="inputBox">
            <span>Ngày đi :</span>
            <input type="date" name="leaving"required>
         </div>
         <div class="inputBox">
            <span>Username :</span>
            <input type="text" class="inputUser" placeholder="Hãy nhập username" name="username">
         </div>
         <div class="inputBox">
            <span>Password :</span>
            <input type="password" class="inputPass" placeholder="Hãy nhập Password" name="password">
         </div>
      </div>

      <input type="submit" value="Đặt vé" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->


</body>
</html>

<?php  include 'include/footer.php';?>