<?php
   $connection = mysqli_connect('localhost','root','','homestay1');
   if(isset($_POST['register'])){
        $name = $_POST['name'];
        $password = md5($_POST['password']);
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $query = "INSERT INTO accounts (username, password, email, phone) 
        values('$name','$password','$email','$phone') ";
        mysqli_query($connection, $query);

        header('location:login.php'); 
        inform();

   }else{
      echo 'something went wrong please try again!';
   }

?>