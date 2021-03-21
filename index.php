<?php
include ("lib_db.php");

$sql_giaban="SELECT * FROM `san_pham` ORDER BY gia_sp DESC LIMIT 1,6" ;
$data_giaban=select_list($sql_giaban);
// print_r($data_giaban);exit;

$sql= "SELECT * FROM dmsanpham WHERE id_dm = 1";
$data_giay1=select_one($sql);
$sql= "SELECT * FROM dmsanpham WHERE id_dm = 2";
$data_giay2=select_one($sql);
$sql= "SELECT * FROM dmsanpham WHERE id_dm = 3";
$data_giay3=select_one($sql);
$sql= "SELECT * FROM dmsanpham WHERE id_dm = 4";
$data_giay4=select_one($sql);
$sql= "SELECT * FROM dmsanpham WHERE id_dm = 5";
$data_giay5=select_one($sql);
$sql= "SELECT * FROM dmsanpham WHERE id_dm = 6";
$data_giay6=select_one($sql);

?>



<!doctype html>


<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" >
  <link href="css/style.css" rel="stylesheet" >
  <title>Sneaker House</title>
</head>
<body>
  <div class="Header" > 
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img class="img-fluid-1" style="border-radius: 50%" src="images/logo1.jpg  " alt="" >
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">            
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Trang Chủ</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Giày thể thao
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="chuyen-muc.php?id_dm=<?php echo $data_giay1['id_dm'] ?>">Ultra boost</a></li>
                  <li><a class="dropdown-item" href="chuyen-muc.php?id_dm=<?php echo $data_giay2['id_dm'] ?>">Jordan</a></li>
                  <li><a class="dropdown-item" href="chuyen-muc.php?id_dm=<?php echo $data_giay3['id_dm'] ?>">Converse</a></li>
                  <li><a class="dropdown-item" href="chuyen-muc.php?id_dm=<?php echo $data_giay4['id_dm'] ?>">Nike Air Force</a></li>
                  <li><a class="dropdown-item" href="chuyen-muc.php?id_dm=<?php echo $data_giay5['id_dm'] ?>">Yezzy</a></li>
                  <li><a class="dropdown-item" href="chuyen-muc.php?id_dm=<?php echo $data_giay6['id_dm'] ?>">Vans</a></li>

                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Liên Hệ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Giới thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Tin tức</a>
              </li>
            </ul>
            <button  style=" margin-right: 20px;"type="button" onclick="" class="btn btn-secondary ml-3"><a style="color: white;" href="login.php">Đăng Nhập</a></button>
            <button  style=" margin-right: 20px;"type="button" onclick="" class="btn btn-secondary ml-3"><a  style="color: white;"  href="signup.php"> Đăng Kí</a></button>
            <form class="d-flex" action="chuyen-muc.php" method="GET">
              <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <div class="bannerslide">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/banner1.jpg"  height= "500" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/banner2.jpg"  height="500" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/banner3.jpg"  height="500" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>


  </div>
  <div class="product ">     
    <div class="container bg-white  border">
      <div class="row">
        <div class="col-12 col-md-4 mt-2 p-2  ">
         <div class="card" style="width: 100%;">
          <a href="chuyen-muc.php?id_dm=<?php echo $data_giay1['id_dm'] ?>"><img src="images/ultral4.0.jpg" class="card-img-top imgwh" alt="..."></a>
          <div class="card-body">
            <a href="chuyen-muc.php?id_dm=<?php echo $data_giay1['id_dm'] ?>"><p class="card-text">Utral Boost</p></a>
          </div>
        </div>     
      </div>
      <div class="col-12 col-md-4 mt-2 p-2 ">
        <div class="card" style="width: 100%;">
          <a href="chuyen-muc.php?id_dm=<?php echo $data_giay2['id_dm'] ?>"><img src="images/Jordan6.jpg" class="card-img-top imgwh" alt="..."></a>
          <div class="card-body">
            <a href="chuyen-muc.php?id_dm=<?php echo $data_giay2['id_dm'] ?>"><p class="card-text">Jordan</p></a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mt-2 p-2 ">
       <div class="card" style="width: 100%;">
        <a href="chuyen-muc.php?id_dm=<?php echo $data_giay3['id_dm'] ?>"><img src="images/hinh13.jpg" class="card-img-top imgwh" alt="..."></a>
        <div class="card-body">
          <a href="chuyen-muc.php?id_dm=<?php echo $data_giay3['id_dm'] ?>"><p class="card-text">Converse</p></a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4 mt-2 p-2">
      <div class="card" style="width: 100%;">
        <a href="chuyen-muc.php?id_dm=<?php echo $data_giay4['id_dm'] ?>"><img src="images/hinh7.jpg" class="card-img-top imgwh" alt="..."></a>
        <div class="card-body">
          <a href="chuyen-muc.php?id_dm=<?php echo $data_giay4['id_dm'] ?>"><p class="card-text">Nike Air Force</p></a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4 mt-2 p-2">
      <div class="card" style="width: 100%;">
        <a href="chuyen-muc.php?id_dm=<?php echo $data_giay5['id_dm'] ?>"><img src="images/hinh12.jpg" class="card-img-top imgwh" alt="..."></a>
        <div class="card-body">
          <a href="chuyen-muc.php?id_dm=<?php echo $data_giay5['id_dm'] ?>"><p class="card-text">Yezzy</p></a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4 mt-2 p-2">
      <div class="card" style="width: 100%;">
        <a href="chuyen-muc.php?id_dm=<?php echo $data_giay6['id_dm'] ?>"><img src="images/snk6.jpg" class="card-img-top imgwh" alt="..."></a>
        <div class="card-body">
          <a href="chuyen-muc.php?id_dm=<?php echo $data_giay6['id_dm'] ?>"><p class="card-text">Vans</p></a>
        </div>
      </div>      
    </div>
  </div>
</div>   
</div>

<div class="container border bg-white">
  <div class="row ">
    <div class=" col-12 col-md-7 mt-5 "> 
     <a href="#" ><h3 class="text-sneaker py-4  ">SNEAKER NĂNG ĐỘNG</h3></a>
     <p class="tieude-sneaker  mt-1 ">Sneaker đã trở thành một biểu tượng của xã hội, là một sản phẩm của thời đại với những thiết kế cổ điển và những điều đó đều nằm trong những đôi giày Sneaker Delta Shoes. Không lỗi thời với thời gian, mang dấu ấn cá tính khác biệt và tạo mọi sự lôi cuốn từ chính đôi giày Sneaker. Tự tạo cuộc chơi, tự tạo phong cách, đó là Delta Shoes</p>
   </div>

   <div class=" col-12 col-md-5  mt-5 mb-5">
    <a href="#"><img src="images/snker1.jpg " width="501" height="280" alt="" ></a>
  </div>
  <div class="row">

    <?php foreach ($data_giaban as $r ) {?>
      <div class="col">
        <div class="card" style="width: 100%;">
          <img src="images/<?php echo $r['anh_sp']; ?>" style ="width: 100%;height: 300px;" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text"><?php echo $r['gia_sp']; ?></p>
            <a href="chitiet.php?id_sp=<?php echo $r['id_sp'] ?>" class="btn btn-primary">Chi tiết</a>
          </div>
        </div>
      </div>
    <?php }?>


    <div class=" Footer bg-dark text-light py-3 pt-3 border border-top-2 text-light">
      <div class="container">
        <div class="row">
          <div class="col-md-3">

            <ul>
              <li>CHĂM SÓC KHÁCH HÀNG</li>
              <li><a href="">Trang chủ</a></li>
              <li><a href="">Sản phẩm</a></li>
              <li><a href="">Giày thể thao</a></li>
              <li><a href="">Liên hệ</a></li>
              <li><a href="">Giới thiệu</a></li>

            </ul>

          </div>
          <div class="col-md-3">
            <ul>
              <LI>HƯỚNG DẪN</LI>
              <li><a href="">Trang chủ</a></li>
              <li><a href="">Sản phẩm</a></li>
              <li><a href="">Giày thể thao</a></li>
              <li><a href="">Liên hệ</a></li>
              <li><a href="">Giới thiệu</a></li>


            </ul>

          </div>
          <div class="col-md-3">
            <ul>
              <li>CHÍNH SÁCH</li>
              <li><a href="">Trang chủ</a></li>
              <li><a href="">Sản phẩm</a></li>
              <li><a href="">Giày thể thao</a></li>
              <li><a href="">Liên hệ</a></li>
              <li><a href="">Giới thiệu</a></li>

            </ul>

          </div>
          <div class="col-md-3">
            <ul >
              <li>DỊCH VỤ KHÁCH HÀNG</li>
              <li><a href="">Trang chủ</a></li>
              <li><a href="">Sản phẩm</a></li>
              <li><a href="">Giày thể thao</a></li>
              <li><a href="">Liên hệ</a></li>
              <li><a href="">Giới thiệu</a></li>

            </ul>     
          </div>     
        </div>
      </div>
    </div>
    <div>
      <div class="container-fluid text-center text-light py-3 bg-dark">
        Phát triển bởi Vq
      </div>

    </div>
    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
