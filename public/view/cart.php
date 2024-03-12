<main>
    <div style="height: 70px;"></div>
    <h1>Giỏ Hàng</h1>
    <?php
    $thanhtientong = 0;
    $i = 0;
    echo '
    <div class="row">
    
    ';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $cart[2];
        $thanhtiensp = $cart[3] * $cart[4];
        $thanhtientong = $thanhtiensp + $thanhtientong;
        $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="xóa"></a>';
        echo '
        <div class="col-md-8 col-lg-8 d-flex mb-5 mx-1 vo">
            <div class="col-md-3">

                <form action="" class="d-flex">
                    <input type="checkbox" name="" id="">
                    <img src="' . $hinh . '" class="img-fluid h-5 mx-3" alt="">
                </form>
            </div>
            <div class="col-md-5 mx-5">
                <p>
                   ' . $cart[1] . '
                </p>
                <h6 class="price">' . $cart[3] . '</h6>
            </div>
            <div class="col-md-4 my-auto">
                <input type="number" value="' . $cart[4] . '" class="product-input-count"><span class="price">' . $thanhtiensp . '</span>
           ' . $xoasp . '
            </div>
        </div>
        ';
        $i = $i + 1;
    }
    echo '
    <div class="col-md-4 col-lg-4 bg-danger">
        <div class="row">
            <div class="d-flex">
                <div class="col-md-5">Thành tiền: ' . $thanhtientong . '$</div>
            </div>
        </div>
        <div class="row">
            <button class="thanhtoan">THANH TOÁN</button>
        </div>
    </div>
</div>';
    ?>


    <!-- <div class="row">
        <div class="col-md-8 col-lg-8 d-flex ">
            <div class="col-md-3">
                <form action="" class="d-flex">
                    <input type="checkbox" name="" id="">
                    <img src="../images/book-img/1.jpg" class="img-fluid" alt="">
                </form>
            </div>
            <div class="col-md-5">
                <p>
                    Phía Tây Không Có Gì Lạ (Tái Bản 2022)
                </p>
                <h6 class="price">56.000đ</h6>
            </div>
            <div class="col-md-4 my-auto">
                <input type="number" value="1" class="product-input-count"><span class="price">56.000</span>
                <i class="fa fa-trash"></i>
            </div>
        </div>

        <div class="col-md-4 col-lg-4 bg-danger">
            <div class="row">
                <div class="d-flex">
                    <div class="col-md-5">Thành tiền: </div>
                    <div class="col-md-5">0đ</div>
                </div>
            </div>
            <div class="row">
                <button class="thanhtoan">THANH TOÁN</button>
            </div>
        </div>
    </div> -->