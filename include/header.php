<!DOCTYPE html>
<html lang="en">
<head>
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="js/script.js">

</head>


<body>
   
<!-- header section starts  --> 
    <section class="header">

        <nav class="navbar-expand-lg navbar">
            <div class="container-fluid">
                <a href="index.php" class="logo">Let's Travel</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Giới thiệu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link submenu" href="package.php">Các địa điểm</a>
                            <ul class="dropdown-content">
                                <li><a class="dropdown-item" href="package.php#daLat">Đà Lạt</a></li>
                                <li><a class="dropdown-item" href="package.php#daNang">Đà Nẵng</a></li>
                                <li><a class="dropdown-item" href="package.php#hoiAn">Hội An</a></li>
                                <li><a class="dropdown-item" href="package.php#hue">Huế</a></li>
                                <li><a class="dropdown-item" href="package.php#haNoi">Hà Nội</a></li>
                                <li><a class="dropdown-item" href="package.php#haGiang">Hà Giang</a></li>
                                <li><a class="dropdown-item" href="package.php#khanhHoa">Khánh Hòa</a></li>
                                <li><a class="dropdown-item" href="package.php#ninhBinh">Ninh Bình</a></li>
                                <li><a class="dropdown-item" href="package.php#nhaTrang">Nha Trang</a></li>
                                <li><a class="dropdown-item" href="package.php#mocChau">Mộc Châu</a></li>
                                <li><a class="dropdown-item" href="package.php#vungTau">Vũng Tàu</a></li>
                                <li><a class="dropdown-item" href="package.php#saPa">Sa Pa</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="book.php">Đặt vé</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.php" class="fas fa-user iconuser"></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div id="menu-btn" class="fas fa-bars" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></div>

<!-- 
        <nav class="navbar-expand-lg navbar">
           
            <a href="index.php">Trang chủ</a>
            <a href="about.php">Giới thiệu </a>
            <a href="package.php">Các địa điểm</a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
            </ul>
            <a href="book.php">Đặt vé</a>
            <a href="login.php" class="fas fa-user"></a>

        </nav> 

        <div id="menu-btn" class="fas fa-bars"></div> 
-->
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>