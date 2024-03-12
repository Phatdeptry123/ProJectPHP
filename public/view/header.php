<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../asset/style.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>PT Store</title>
</head>

<body class="container bg">
    <header class="fixed-top container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container-fluid border-nav">
                <a class="navbar-brand" href="./index.php">
                    <img src="./images/PT_Store_Logo.png" alt="Logo" width="100" height="40"
                        class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <?php ob_start();
                        foreach ($dsdm as $danhmuc) {
                            extract($danhmuc);
                            $linkdm = "index.php?act=cartegory&id_danhmuc=" . $id_danhmuc;
                            echo '
                                <li class="nav-item">
                            <a class="nav-link" href="' . $linkdm . '">' . $ten_danhmuc . '</a>
                                </li>
                                ';
                        }
                        ob_flush()
                            ?>
                    </ul>
                    <form class="d-flex" action="index.php?act=cartegory-tk" method="post">
                        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search"
                            name="keyw">
                        <input type="submit" name="timkiem" value="Tìm Kiếm" class="btn btn-primary"
                            class="btn btn-outline-success fa fa-search">
                    </form>
                    <div class="navbar-nav">
                        <a class="nav-link" href="index.php?act=viewcart"><i class="fas fa-shopping-cart"></i></a>
                        <?php
                        if (isset($_SESSION['check'])) {
                            extract($_SESSION['check'])
                                ?>
                            <a class="nav-link" href="index.php?act=infor-account">
                                <?= $account ?>
                            </a>
                            <a class="nav-link" href="index.php?act=log-out">
                                <i class="fas fa-sign-out-alt"></i>
                            </a>
                            <?php
                        } else {


                            ?>
                            <a class="nav-link" href="index.php?act=login-view"><i class="fas fa-user"></i></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="mb-5">
        <div class="mt-3">
            paaaaaaaa
        </div>
    </div>