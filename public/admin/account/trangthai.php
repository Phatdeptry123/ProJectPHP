<div class="container">
    <h1>Thời gian đăng nhập
    </h1>
    <?php
    foreach ($listdangnhap as $dangnhap) {
        extract($dangnhap);
        echo '
        <div class="row">
    <div class="col-4"></div>
    <div class="col-4">' . $thoi_gian . '</div>
    <div class="col-4"></div>

</div>
        ';
    }
    ?>
</div>