<?php





?>
<main>
    <div class="container">
        <?php
        if ($ten_danhmuc > 0) {
            extract($ten_danhmuc);
            echo '
        <div class="cartegory-top d-flex">
        <p>Trang chủ </p> <span> &#10230; </span>
        <p>' . $ten_danhmuc . '</p>
    </div>
                ';
        } else {
            echo '';
        }
        ?>

    </div>
    <div class="container">
        <div class="row">

            <?php
            extract($one_book);
            // extract($tenbook);
            // extract($one_danhmuc);
            $linkbook = "index.php?act=product&id_book=" . $id_book;
            $hinh = $img_path . $hinh;
            echo '<div class="col-sm-4 col-12 bg-light pt-2">
                <img src="' . $hinh . '" class="img-fluid" alt="">
                <div class="row justify-content-around">
                <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id_book" value="' . $id_book . '">
                <input type="hidden" name="bookname" value="' . $bookname . '">
                <input type="hidden" name="hinh" value="' . $hinh . '">
                <input type="hidden" name="price" value="' . $price . '">
                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" class="col-md-12 col-lg-5 btn-addcart my-2">
                <button class="col-md-12 col-lg-5 btn-buynow my-2">Mua ngay</button>
                </form>
                </div>
            </div>
            <div class="col-md-8 col-12">
                <h4>' . $bookname . '</h4>
                <div class="row">
                    <div class="col">Nhà cung cấp: ' . $nxb . '</div>
                    <div class="col ">Tác giả: ' . $author . '</div>
                </div>
                <div class="row">
                    <div class="col">Danh Mục: ' . $ten_danhmuc . '</div>
                    <div class="col ">Hình thức bìa: <span> Bìa Mềm</span></div>
                </div>
                <div class="row">
                    <div>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <span>(93 đánh giá)</span>
                    </div>
                </div>
                <div class="row">
                    <h3 class="price">' . $price . ' $</h5>
                </div>
                
                <div>
                <p>' . $mota . '</p>
                </div>
                <div class="d-flex doitra">
                    Chính sách đổi trả: Đổi trả sản phẩm trong 30 ngày <a href="" class="pl-2">Xem thêm</a>
                </div>
                
                <div class="row">
                    <div class="col-3">Số lượng: </div>
                    <div class="btn-group col-3" role="group" aria-label="Basic example">
                        <input type="number" name="" id="" style="width: 40px;" value="1">
                    </div>
                </div>
            </div>
        </div>';
            ?>

        </div>
        <section>
            <h3 class="my-5 text-center">Sản Phẩm Tương Tự</h3>

            <div class="row">
                <?php
                foreach ($book_cungloai as $book_cungloai) {
                    # code...
                    extract($book_cungloai);
                    $linkbook = "index.php?act=product&id_book=" . $id_book;
                    $hinh = $img_path . $hinh;

                    echo ' <div class="col-md-4">
                <div class="card h-100">
                    <div class="container-fluid">
                        <div class="d-flex justify-content-center mt-3">
                            <div class="position-relative">
                                <img class="card-img-top" src="' . $hinh . '"
                                    style=" object-fit: cover;" alt="Card image cap">
                                <span
                                    class="position-absolute mt-1 top-0  start-100 translate-middle badge rounded-circle bg-danger">
                                    <div class="fs-5">
                                        30%
                                    </div>
                                </span>
                            </div>
                        </div>

                        <div class="card-body">

                        </div>
                        <a href="#">
                            <h5 class="card-title">' . $bookname . '</h5>
                        </a>
                        <div class="fs-3 text-danger">75.600 đ</div>
                        <div>75.600 đ</div>
                        <div class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            (2)
                        </div>
                        <a href="' . $linkbook . '" class="btn btn-primary my-2">Xem chi tiết</a>
                    </div>
                </div>
            </div>';
                }


                ?>

                <!-- <div class="col-md-4">
                    <div class="card h-100">
                        <div class="container-fluid">
                            <div class="d-flex justify-content-center mt-3">
                                <div class="position-relative">
                                    <img class="card-img-top" src="../images/book-img/1.jpg"
                                        style=" object-fit: cover;" alt="Card image cap">
                                    <span
                                        class="position-absolute mt-1 top-0  start-100 translate-middle badge rounded-circle bg-danger">
                                        <div class="fs-5">
                                            30%
                                        </div>
                                    </span>
                                </div>
                            </div>

                            <div class="card-body">

                            </div>
                            <a href="#">
                                <h5 class="card-title">Phía tây không có gì là lạ</h5>
                            </a>
                            <div class="fs-3 text-danger">75.600 đ</div>
                            <div>75.600 đ</div>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                (2)
                            </div>
                            <a href="#" class="btn btn-primary my-2">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="container-fluid">
                            <div class="d-flex justify-content-center mt-3">
                                <div class="position-relative">
                                    <img class="card-img-top" src="../images/book-img/1.jpg"
                                        style=" object-fit: cover;" alt="Card image cap">
                                    <span
                                        class="position-absolute mt-1 top-0  start-100 translate-middle badge rounded-circle bg-danger">
                                        <div class="fs-5">
                                            30%
                                        </div>
                                    </span>
                                </div>
                            </div>

                            <div class="card-body">

                            </div>
                            <a href="#">
                                <h5 class="card-title">Phía tây không có gì là lạ</h5>
                            </a>
                            <div class="fs-3 text-danger">75.600 đ</div>
                            <div>75.600 đ</div>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                (2)
                            </div>
                            <a href="#" class="btn btn-primary my-2">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="container-fluid">
                            <div class="d-flex justify-content-center mt-3">
                                <div class="position-relative">
                                    <img class="card-img-top" src="../images/book-img/1.jpg"
                                        style=" object-fit: cover;" alt="Card image cap">
                                    <span
                                        class="position-absolute mt-1 top-0  start-100 translate-middle badge rounded-circle bg-danger">
                                        <div class="fs-5">
                                            30%
                                        </div>
                                    </span>
                                </div>
                            </div>

                            <div class="card-body">

                            </div>
                            <a href="#">
                                <h5 class="card-title">Phía tây không có gì là lạ</h5>
                            </a>
                            <div class="fs-3 text-danger">75.600 đ</div>
                            <div>75.600 đ</div>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                (2)
                            </div>
                            <a href="#" class="btn btn-primary my-2">Xem chi tiết</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>