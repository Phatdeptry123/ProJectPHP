<h1>Thêm thể loại</h1>



<div class="row">
    <div class="row frmtile">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb-2">
                Tên Loại <br>
                <input type="text" name="ten_danhmuc" class="mr-1 col-3">
            </div>
            <div class="row">
                <div class="d-flex">
                    <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-primary col-3">
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