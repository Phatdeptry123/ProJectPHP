<?php
if (is_array($dm)) {
    extract($dm);
}
?>






<h1>Cập nhật lại hàng</h1>


<div class="row">
    <div class="row frmtile">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mt-5 pt-5">
                Mã Loại <br>
                <input type="text" name="id_danhmuc" class="mr-1 col-3">
            </div>
            <div class="row mb-2">
                Tên Loại <br>
                <input type="text" name="ten_danhmuc" class="mr-1 col-3" value="<?= $ten_danhmuc ?>">
            </div>
            <div class="row">
                <div class="d-flex">
                    <input type="hidden" name="id_danhmuc"
                        value="<?php if (isset($id_danhmuc) && ($id_danhmuc > 0))
                            echo $id_danhmuc; ?>">
                    <input type="submit" name="capnhat" value="Cập Nhật" class="btn btn-primary col-3">
                    <input type="reset" value="Nhập lại" class="btn btn-primary col-3">
                    <a href="index.php?act=listdm"><input type="button" value="Danh Sách"
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