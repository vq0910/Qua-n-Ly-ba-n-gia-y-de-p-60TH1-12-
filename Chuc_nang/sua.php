       
<?php
    $sql_catalog= "SELECT * FROM san_pham inner join dmsanpham on dmsanpham.id_dm =san_pham.id_dm";
    $data_catalog=select_list($sql_catalog);
    $id_sp= $_GET['id_sp'];
    // đang bị sai là ko biết id sản phẩm
    $sql_up= "SELECT * FROM san_pham WHERE id_sp=$id_sp";
    $data_up= select_one($sql_up);

    if(isset($_POST['sbm'])){
     // print_r($_POST);die;
        $data=array();
        //$id_sp=$_POST['id_sp'];
        $id_dm=$_POST['id_dm'];
        //$ten_dm=$_POST['ten_dm'];
        $ten_sp=$_POST['ten_sp'];
        $gia_sp=$_POST['gia_sp'];
        $phu_kien=$_POST['phu_kien'];
        $khuyen_mai=$_POST['khuyen_mai'];
        $chi_tiet_sp=$_POST['chi_tiet_sp'];
        $anh_sp = ($_FILES["anh_sp"]["name"]!="") ? upload_file_by_name("anh_sp") : $data_up["anh_sp"];
        $so_luong=$_POST['so_luong'];
        $mo_ta=$_POST['mo_ta'];
        
       
        //  print_r($image_link);
        // // echo $_FILES['image_link'];
        // exit();
        $data["id_sp"] = $id_sp;
        $data["id_dm"] = $id_dm;
        //$data["ten_dm"] = $ten_dm;
        $data["ten_sp"] = $ten_sp;
        $data["gia_sp"] = $gia_sp;
        $data["phu_kien"] = $phu_kien;
        $data["chi_tiet_sp"] = $chi_tiet_sp;
        $data["anh_sp"] = $anh_sp;
        $data["so_luong"] = $so_luong;
        $data["mo_ta"] = $mo_ta;
        //print_r($data);die;
        $tbl = "san_pham";
        
        $cond = "id_sp={$id_sp}";
        //  print_r($cond);exit();
       $sql_update_product = data_to_sql_update($tbl, $data,$cond);
        //  print_r($sql_update_product);exit();
        $ret = exec_update($sql_update_product);
        // print_r($ret);exit();
        header("Location:admin.php?Page_layout=danhsach");
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Danh mục</label>
                    <select name="id_dm" id="" class="form-control">
                        <?php foreach($data_catalog as $r){ ?>
                            <option value="<?php echo $r['id_dm'];?>"> <?php echo $r['ten_dm']; ?> </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                  <label for="">Tên sản phẩm</label>
                  <input type="text" name="ten_sp" id="" class="form-control" placeholder="" required value="<?php echo $data_up['ten_sp']; ?> ">
                </div>

                <div class="form-group">
                  <label for="">Giá sản phẩm</label>
                  <input type="text" name="gia_sp" id="" class="form-control" placeholder="" required value=<?php echo $data_up['gia_sp']; ?> >
                </div>
                <div class="form-group">
                  <label for="">Phụ kiện</label>
                  <input type="text" name="phu_kien" id="" class="form-control" placeholder="" required value=<?php echo $data_up['phu_kien']; ?> >
                </div>
                <div class="form-group">
                  <label for="">Khuyến mãi</label>
                  <input type="text" name="khuyen_mai" id="" class="form-control" placeholder="" required value=<?php echo $data_up['khuyen_mai']; ?> >
                </div>
                <div class="form-group">
                  <label for="">Nội dung3</label>
                  <input type="text" name="chi_tiet_sp" id="" class="form-control" placeholder="" required value=<?php echo $data_up['chi_tiet_sp']; ?> >
                </div>

                <div class="form-group">
                  <label for="">Ảnh sản phẩm</label><br>
                  <input type="file" name="anh_sp" id="" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Số lượng </label>
                  <input type="text" name="so_luong" id="" class="form-control" placeholder="" required value=<?php echo $data_up['so_luong']; ?> >
                </div>
                <div class="form-group">
                  <label for="">Mô tả </label>
                  <input type="text" name="mo_ta" id="" class="form-control" placeholder="" required value=<?php echo $data_up['Mo_ta']; ?> >
                </div>
               

                <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
            </form>
        </div>
    </div>
</div>