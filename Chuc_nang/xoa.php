<?php
    $id_sp= $_GET['id_sp'];
    $sql= "DELETE FROM san_pham WHERE id_sp=$id_sp";
    // echo $sql;exit;
    mysqli_query($link,$sql);
    header("Location: admin.php?Page_layout=danhsach");
?>