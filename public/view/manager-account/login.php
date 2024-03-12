<div class="row">
    <div class="col-4">

    </div>
    <div class="col-4 border border-secondary ">
        <form action="index.php?act=login" method="post">
            <!-- Email input -->
            <h1 class="text-center my-3">Đăng Nhập</h1>
            <div class="form-outline mb-4 ">
                <input type="text" name="account" class="form-control" />
                <label class="form-label" for="form2Example1">Tên đăng nhập</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" class="form-control" />
                <label class="form-label" for="form2Example2">Mật Khẩu</label>
            </div>

            <!-- Submit button -->
            <button type="submit" name="login" value="đăng nhập" class="btn btn-primary btn-block mb-4 w-100">Đăng
                Nhập</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="index.php?act=signup">Register</a></p>
            </div>
        </form>
        <p class="text-center text-danger">

            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </p>
    </div>
    <div class="col-4">

    </div>
</div>