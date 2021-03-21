<?php
include("lib_db.php");
$error = array();
$data = array();

            //lấy dữ liệu từ post đưa vào mảng data
$data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
$data['pwd'] = isset($_POST['pwd']) ? $_POST['pwd'] : '';

$email = $data['email'];
$pwd = $data['pwd'];
$query = "SELECT COUNT(*) FROM thanh_vien WHERE email = '$email' AND pwd = '$pwd'";
            //thực thi truy vấn
$data = select_one($query);
$count = 0;
foreach ($data as $item) {
    $count += $item;
}
if ($count>0) {

    setcookie("email", $email, time() + (86400 * 30));
                //đăng nhập vào trang chính

    header("Location:admin.php");
    die();
}
else
{
    $error['message'] = 'Tên đăng nhập hoặc mật khẩu không đúng !';
}

if (isset($_POST["submit"])) {
    echo '<script language="javascript">';
    echo 'alert("Tên đăng nhập hoặc mật khẩu không đúng !")';
    echo '</script>';    
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Trang Đăng nhập</title>
    <meta http-equiv="Content-Type" content="text/shtml; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
    <link rel="stylesheet" type="style/css" href="">
</head>


<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Đăng Nhập</h2>
            </div>
            <form action="login.php" method="POST">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input   required="true" type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input required="true" type="password" class="form-control" name="pwd">
                    </div>
                    <button class="submit  " type="Submit-" name="Submit">Submit</button>
                    <div class="container" style="background-color:#f1f1f1">
                
                <button type="button" onclick="quay_lai_trang_truoc()" class="cancelbtn">Cancel</button>
                <button type="button" onclick="dieu_huong()" class="cancelbtn" >Đăng ký</button>


            </div>
                </div>
            </form>
        </div>
    </div>

          <script>
          function quay_lai_trang_truoc(){
              history.back();
          }
      </script> 
      <script>
        function dieu_huong(){
            location.assign("signup.php");
        }
    </script>



</body>