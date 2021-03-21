<?php
    $sql= "SELECT * FROM san_pham inner join dmsanpham on dmsanpham.id_dm =san_pham.id_dm";
    $data= select_list($sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách sản phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Danh Mục</th>
                        <th>Tên Sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Phụ kiện</th>
                        <th>khuyến mại</th>
                        <th>Chi tiết sản phẩm</th>
                        <th>Ảnh Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Mô tả</th>

                        <th>Sửa</th>
                        <th>Xoá</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                        $i=1;
                        foreach($data as $r){?>
                            <tr>
                                <td><?php echo $i++; ?> </td>
                                <td><?php echo $r['ten_dm']; ?></td>
                                <td><?php echo $r['ten_sp']; ?></td>
                                <td><?php echo $r['gia_sp']; ?></td>
                                <td><?php echo $r['phu_kien']; ?></td>
                                <td><?php echo $r['khuyen_mai']; ?></td>
                                <td><?php echo $r['chi_tiet_sp']; ?></td>
                                
                                <td>
                                    <img style="width: 100px; height:120px;" src="images/<?php echo $r['anh_sp']; ?>" alt="photo">
                                </td>
                                <td><?php echo $r['so_luong']; ?></td>
                                <td><?php echo $r['Mo_ta']; ?></td>
                               
                              
                                <td><a href="admin.php?Page_layout=sua&id_sp=<?php echo $r['id_sp'] ?>">Sửa</a></td>
                                <td><a onclick="return confirm_del('<?php echo $r['ten_sp'] ?>')" href="admin.php?Page_layout=xoa&id_sp=<?php echo $r['id_sp']; ?>">Xoá</a></td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="admin.php?Page_layout=them" class="btn btn-primary">Thêm mới</a>
        </div>
    </div>
</div>

<script>
    function confirm_del(name){
        return confirm("Bạn có chắc chắn muốn xoá : "+name+" ?");
    }
</script>