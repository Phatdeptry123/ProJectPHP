<main>
    <div class="slider rounded">
        <div class="container my-5 rounded">
            <div id="carouselIndicators1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselIndicators1" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselIndicators1" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselIndicators1" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/slider/slide_1.jpg" class="d-block w-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/slider/silde_2.png" class="d-block w-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/slider/slide_3.jpg" class="d-block w-100" alt="Slide 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators1"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators1"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>



    <div class="section-1">
        <h1 class="text-center my-5">Sản phẩm mới</h1>
        <div class="row">
            <?php
            foreach ($newbook as $book) {
                extract($book);
                $linkbook = "index.php?act=product&id_book=".$id_book;
                $hinh = $img_path.$hinh;
                echo '
                <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="container-fluid">
                        <div class="d-flex justify-content-center mt-3">
                            <div class="position-relative">
                                <img class="card-img-top" src="'.$hinh.'" style=" object-fit: cover;"
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
                            <h5 class="card-title">'.$bookname.'</h5>
                        <div class="fs-3 text-danger">'.$price.'</div>
                        <div class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            (2)
                        </div>
                        <a href="'.$linkbook.'" class="btn btn-primary my-2">Xem chi tiết</a>
                    </div>
                </div>
            </div>';
            }
            ?>

            
        </div>
    </div>