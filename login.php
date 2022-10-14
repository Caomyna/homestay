<?php 
    include 'include/header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="js/script.js">
    </head>
    <body>
        <!-- Form Login -->
        <section class="login-form">
            <div class="form-box">
                <div class="button-box">
                    <div id="buttn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Đăng nhập</button>
                    <button type="button" class="toggle-btn" onclick="register()">Đăng ký</button>
                </div>
                <div class="social-icons">
                    <i class="fa fa-facebook-square"></i>
                    <i class="fa fa-google"></i>
                    <i class="fa fa-twitter "></i>
                </div>
                <form id="login" class="input-group">
                    <input type="text" class="input-field" placeholder="Tên đăng nhập" required style="margin: 20px 0 10px 0 ;">
                    <input type="password" class="input-field" placeholder="Mật khẩu" required style="margin-bottom: 100px;">
                    <button type="submit" class="submit-btn" style="border-radius:30px; ">Đăng nhập</button>
                </form>

                <form id="register" action="register_db.php" method="post" class="input-group">
                    <input type="text" class="input-field" placeholder="Tên đăng nhập" name="name" required>
                    <input type="password" class="input-field" placeholder="Mật khẩu" name="password" required>
                    <input type="email" class="input-field" placeholder="Email" name="email"  required>
                    <input type="text" class="input-field" placeholder="Số điện thoại" name="phone" required>
                    <br><br>
                    <button type="submit" class="submit-btn" name ="register" style="border-radius:30px; margin-top:15px;">Đăng ký</button>
                </form>
            </div>
        </section>

        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("buttn");

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "150px";
            }

            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0px";
            }
        </script>
        
    </body>
</html>
