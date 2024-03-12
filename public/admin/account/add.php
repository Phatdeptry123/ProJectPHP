<h1>Thêm người dùng</h1>



<div class="row mr-2">
    <div class="row frmtile ">
        <form action="index.php?act=adduser" method="post" enctype="multipart/form-data">
            <div class="row mb-2">
                <label>Tài Khoản</label>
                <br>
                <input type="text" name="account" class="mr-1 col-3">
            </div>
            <div class="row mb-2">
                <label>Tên Người Dùng</label>
                <br>
                <input type="text" name="ten_user" class="mr-1 col-3">
            </div>
            <div class="row mb-2">
                <label>Mật Khẩu</label>
                <br>
                <input type="text" name="password" class="mr-1 col-3">
            </div>
            <div class="row mb-2">
                <label>Quyền</label>
                <br>
                <input type="number" name="role" class="mr-1 col-3">
            </div>
            <div class="row mb-2">

                <div class="row">
                    <div class="d-flex">
                        <input type="submit" name="themuser" value="Thêm user" class="btn btn-primary col-3">
                        <input type="reset" value="Nhập lại" class="btn btn-primary col-3">
                        <a href="index.php?act=listuser"><input type="button" value="Danh Sách người dùng"
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