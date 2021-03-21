<?php
    $sql_catalog= "SELECT * FROM  dmsanpham";
    $data_catalog=select_list($sql_catalog);

    if(isset($_POST['sbm'])){
      print_r($_POST);
        $data=array();
        $id_sp= null;
        $ten_sp=$_POST['ten_sp'];
        $id_dm=$_POST['id_dm'];
        $gia_sp=$_POST['gia_sp'];
        $phu_kien=$_POST['phu_kien'];
        $khuyen_mai=$_POST['khuyen_mai'];
        $chi_tiet_sp=$_POST['chi_tiet_sp'];
        $anh_sp= upload_file_by_name("anh_sp");
        $so_luong=$_POST['so_luong'];
        $mo_ta=$_POST['mo_ta'];
        

        
        //  print_r($image_link);
        // // echo $_FILES['image_link'];
        // exit();
        $data["id_sp"] = $id_sp;
        $data["ten_sp"] = $ten_sp;
        $data["id_dm"] = $id_dm;
        $data["gia_sp"] = $gia_sp;
        $data["phu_kien"] = $phu_kien;
        $data["khuyen_mai"] = $khuyen_mai;
        $data["chi_tiet_sp"] = $chi_tiet_sp;
        $data["anh_sp"] = $anh_sp;  
        $data["so_luong"] = $so_luong;
        $data["mo_ta"] = $mo_ta;
        $tbl = "san_pham";
        $sql_insert_product = data_to_sql_insert($tbl, $data);
        // print_r($sql_insert_product);exit();
        $ret = exec_update($sql_insert_product);
         // print_r($ret);exit();
        header("Location:admin.php?Page_layout=danhsach");
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Sản phẩm</h2>
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
                  <label for="">Tên Sản Phẩm</label>
                  <input type="text" name="ten_sp" id="" class="form-control" placeholder="" required>
                </div>

                <div class="form-group">    
                  <label for="">Giá sản phẩm</label>
                  <input type="text" name="gia_sp" id="" class="form-control" placeholder="" required>
                </div>
                <div class="form-group">    
                  <label for="">phụ kiện</label>
                  <input type="text" name="phu_kien" id="" class="form-control" placeholder="" required>
                </div>
                <div class="form-group">    
                  <label for="">khuyễn mãi</label>
                  <input type="text" name="khuyen_mai" id="" class="form-control" placeholder="" required>
                </div>                                
                <div class="form-group">    
                  <label for="">chi tiết sản phẩm</label>
                  <input type="text" name="chi_tiet_sp" id="" class="form-control" placeholder="" required>
                </div>
                <div class="form-group">
                  <label for="">Ảnh</label><br>
                  <input type="file" name="anh_sp" id=""  placeholder="" required>
                </div>
                <div class="form-group">    
                  <label for="">Số lượng</label>
                  <input type="text" name="so_luong" id="" class="form-control" placeholder="" required>
                </div>
                <div class="form-group">    
                  <label for="">Mô tả</label>
                  <input type="text" name="mo_ta" id="" class="form-control" placeholder="" required>
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>

    </div>
</div>