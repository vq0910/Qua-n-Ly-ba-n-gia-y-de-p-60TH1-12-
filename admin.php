<?php
    include("lib_db.php");
    include("util.php");
    connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <?php
        if(isset($_GET['Page_layout'])){
            switch ($_GET['Page_layout']){
                case 'danhsach':
                    require_once('Chuc_nang/danhsach.php');
                    break;
                case 'them':
                    require_once('Chuc_nang/them.php');
                    break;
                case 'sua':
                        require_once('Chuc_nang/sua.php');
                        break;
                case 'xoa':
                    require_once('Chuc_nang/xoa.php');
                    break;

                default:
                    require_once('Chuc_nang/danhsach.php');
            }
        }
        else{
            require_once('Chuc_nang/danhsach.php');
        }
    ?>
</body>
</html>