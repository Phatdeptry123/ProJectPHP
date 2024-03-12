<?php
if (is_array($tour)) {
    extract($tour);
}
$hinhpath = "../upload/" . $hinh;
$hinh = "<img src='" . $hinhpath . "' height='80'";
?>







<h1>Cập nhật lại tour</h1>


<div class="row">
    <div class="row frmtile">
        <form action="index.php?act=updatetour" method="post" enctype="multipart/form-data">
            <div class="row mt-5 pt-5">
                <label class="col-1"> Thể loại</label>
                <select name="id_danhmuc" class="btn btn-primary col-3">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($id_danhmuc == $id_danhmuc) {
                            # code...
                            echo ' <option value="' . $id_danhmuc . '" selected>' . $ten_danhmuc . '</option> ';
                        } else {
                            echo ' <option value="' . $id_danhmuc . '">' . $ten_danhmuc . '</option> ';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="row mb-2 mt-2">
                <label class="col-1"> Tên sách</label> <br>
                <input type="text" name="tourname" class="mr-1 col-3" value="<?= $tourname ?>">
            </div>
            <div class="row mb-2">
                <label class="col-1"> Mô tả</label> <br>
                <input type="text" name="mota" class="mr-1 col-3" value="<?= $mota ?>">
            </div>
            <div class="row mb-2">
                <label class="col-1"> Rating</label> <br>
                <input type="text" name="rating" class="mr-1 col-3" value="<?= $rating ?>">
            </div>
            <div class="row mb-2">
                <label class="col-1"> Tuorguide</label><br>
                <input type="text" name="tourguide" class="mr-1 col-3" value="<?= $tourguide ?>">
            </div>
            <div class="row mb-2">
                <label class="col-1"> Giá</label> <br>
                <input type="text" name="price" class="mr-1 col-3" value="<?= $price ?>">
            </div>
            <div class="row mb-2">
                <label class="col-1"> Hình ảnh</label> <br>
                <input type="file" name="hinh" class="mr-1 col-3">
                <div class="col-3" style="background-color: red;">
                    <?= $hinh ?>
                </div>
            </div>
            <div class="row">
                <div class="d-flex">
                    <input type="hidden" name="id_tour" value="<?= $id_tour ?>">
                    <input type="submit" name="capnhat" value="Cập nhật" class="btn btn-primary col-3">
                    <input type="reset" value="Nhập lại" class="btn btn-primary col-3">
                    <a href="index.php?act=listsp"><input type="button" value="Danh Sách"
                            class="btn btn-primary col-12"></a>
                </div>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao
                    ?>
            </form>
        </div>
    </div>