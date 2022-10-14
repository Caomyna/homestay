<?php
      $connection = mysqli_connect('localhost','root','','homestay1');
   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $query = "INSERT INTO booking(name, email, phone, address, location, guests, arrivals, leaving, username, password) 
      values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving','$username','$password') ";
      mysqli_query($connection, $query);

      header('location:book.php'); 
      book_firm();

   }else{
      echo 'something went wrong please try again!';
   }

?>