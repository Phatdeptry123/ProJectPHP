<div class="section-1">
    <?php
    if ($ten_danhmuc > 0 ) {
        extract($ten_danhmuc);
        echo '
    <h1 class="text-center my-5">' . $ten_danhmuc . '</h1>
            ';
    } else {
        echo '';
    }

    ?>

    <div class="row">

        <?php
        foreach ($ds_book as $ds_book) {
            # code...
            extract($ds_book);
            $linkbook = "index.php?act=product&id_book=" . $id_book;
            $hinh = $img_path . $hinh;
            echo '
                <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="container-fluid">
                        <div class="d-flex justify-content-center mt-3">
                            <div class="position-relative">
                                <img class="card-img-top" src="' . $hinh . '" style=" object-fit: cover;"
                                    alt="Card image cap">
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
                            <h5 class="card-title">' . $bookname . '</h5>
                        <div class="fs-3 text-danger">' . $price . '</div>
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
        <!-- <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="container-fluid">
                    <div class="d-flex justify-content-center mt-3">
                        <div class="position-relative">
                            <img class="card-img-top" src="' . $hinh . '" style=" object-fit: cover;"
                                alt="Card image cap">
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
                    <h5 class="card-title">' . $bookname . '</h5>
                    <div class="fs-3 text-danger">' . $price . '</div>
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
        </div> -->


    </div>
</div>