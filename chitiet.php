<?php
include('lib_db.php');

$id_sp= $_GET['id_sp'];
$sql_chitiet="SELECT * FROM san_pham WHERE id_sp=$id_sp";
$data_chitiet=select_one($sql_chitiet);
// print_r($data_dm);exit;
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
	<div class="Header bg-faded" > 
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light bg-faded">
				<div class="container-fluid">
					<a class="navbar-brand" href="index.php">
						<img class="img-fluid-1" src="images/logo1.jpg  " alt="" >
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
							<li class="nav-item">
								<a class="nav-link active" href="#">Sản phẩm</a>
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
									<li><a class="dropdown-item" href="chuyen-muc.php?id_dm=<?php echo $data_giay5['id_dm'] ?>">Yezzy	</a></li>
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
						<form class="d-flex"  action="chuyen-muc.php" method="GET">
							<input  class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
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
	<div class="container border bg-white">
		<div class="row">
			<div class="col-md-6">
				<a href="#"> <img src="images/<?php echo $data_chitiet['anh_sp']; ?>" style="height:500px;width: 100%;" alt=""></a>	
			</div>
			<div class="col-md-6">
				<h3 class="pb-3 pt-4"><?php echo $data_chitiet['ten_sp']; ?></h3>
				<h5>Ma hang: <?php echo $data_chitiet['id_sp']; ?></h5>					
				<div class="nav-item dropdown">
					<a class="nav-link active dropdown-toggle" style="color: black;font-size: 20px;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Size
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">39</a></li>
						<li><a class="dropdown-item" href="#">40</a></li>
						<li><a class="dropdown-item" href="#">41</a></li>
						<li><a class="dropdown-item" href="#">42</a></li>
					</ul>
				</div>

				<h5> Số lượng còn lại : <?php echo $data_chitiet['so_luong']; ?></h5>
				<div class="buttons_added pb-3 ">
					<input onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;" type='button' value='-' />
					<input id='quantity' style="width: 30px;" min='1' name='quantity' type='text' value='1' />
					<input onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' />
				</div>

				<a href="#" class="btn btn-secondary    "> Thêm vào giỏ hàng</a>
				<p class="pt-4" style=" font-size: 20px "> Mô tả:<?php echo $data_chitiet['Mo_ta'];?></p>


				
			</div>

		</div>

	</div>
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


	<script src="js/jquery-3.5.1.min.js"></script>

	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>