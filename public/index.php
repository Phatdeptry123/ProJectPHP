<?php
session_start();
include "./model/pdo.php";
include "./model/sanpham.php";
include "./model/danhmuc.php";
include "./model/account.php";
include "global.php";

if (!isset($_SESSION['mycart'])) {
    # code...
    $_SESSION['mycart'] = [];
}


$newbook = loadall_book_home();

$dsdm = loadall_danhmuc();

include "view/header.php";


if (isset($_GET['act']) && ($_GET['act'])) {
    # code...
    $act = $_GET['act'];
    switch ($act) {
        case 'product':
            # code...
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                $id_danhmuc = $_GET['id_danhmuc'];
                $ten_danhmuc = load_tendanhmuc($id_danhmuc);
            }
            $ten_danhmuc = load_tendanhmuc($id_danhmuc);
            $one_book = loadone_book($_GET['id_book']);
            extract($one_book);
            $book_cungloai = load_book_cungloai($_GET['id_book'], $id_danhmuc);
            // $tenbook = load_tenbook($id_book);
            // extract($tenbook);
            // $one_danhmuc = loadone_danhmuc($_GET['id_danhmuc']);
            include "view/product.php";
            break;

        case 'cartegory':
            # code...
            if (isset($_POST['keyw']) && ($_POST['keyw'])) {
                $keyw = $_POST['keyw'];

            } else {
                $keyw = "";
            }
            $id_danhmuc = $_GET['id_danhmuc'];
            $ds_book = loadall_book($keyw, $id_danhmuc);
            $ten_danhmuc = load_tendanhmuc($id_danhmuc);
            include "view/cartegory.php";
            break;

        case 'cartegory-tk':
            # code...
            if (isset($_POST['keyw']) && ($_POST['keyw'])) {
                $keyw = $_POST['keyw'];

            } else {
                $keyw = "";
            }
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                $id_danhmuc = $_GET['id_danhmuc'];
                $ds_book = loadall_book($keyw, $id_danhmuc);
                $ten_danhmuc = load_tendanhmuc($id_danhmuc);
                include "view/cartegory.php";
            } else {
                $id_danhmuc = "";
            }

            $ds_book = loadall_book($keyw, $id_danhmuc);
            $ten_danhmuc = load_tendanhmuc($id_danhmuc);
            include "view/cartegory.php";
            break;

        case 'login-view':
            # code...
            include "view/manager-account/login.php";
            break;

        case 'login':
            if (isset($_POST['login']) && ($_POST['login'])) {
                $account = $_POST['account'];
                $password = $_POST['password'];
                $check_account = check_account($account, $password);
                if (is_array($check_account)) {
                    $_SESSION['check'] = $check_account;
                    header('Location: index.php');
                } else {
                    $thongbao = "Sai tên đăng nhập Hoặc mật khẩu";
                }
            }
            include "view/manager-account/login.php";
            break;

        case 'signup':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $ten_user = $_POST['ten_user'];
                $account = $_POST['account'];
                $password = $_POST['password'];
                insert_account($account, $password, $ten_user);
                $thongbao = "Đăng Ký Thành Công";
            }
            include "view/manager-account/signup.php";
            break;

        case 'infor-account':
            include "view/infor-account.php";
            break;


        case 'log-out':
            # code...
            session_unset();
            header('Location: index.php');
            break;

        case 'viewcart':
            # code...
            include "view/cart.php";
            break;

        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id_book = $_POST['id_book'];
                $bookname = $_POST['bookname'];
                $hinh = $_POST['hinh'];
                $price = $_POST['price'];
                $soluong = 1;
                $thanhtien = $soluong * $price;
                $bookadd = [$id_book, $bookname, $hinh, $price, $soluong, $thanhtien];
                array_push($_SESSION['mycart'], $bookadd);

            }
            # code...
            include "view/cart.php";
            break;
        // unset($_SESSION['mycart'][$_GET['idcart']]);
        case 'delcart':
            if (isset($_GET['idcart'])) {
                unset($_SESSION['mycart'][$_GET['idcart']]);
            } else {
                $_SESSION['mycart'] = [];
            }
            $_SESSION['mycart'] = array_values($_SESSION['mycart']);
            # code...
            header('Location: index.php?act=viewcart');
            break;


        default:
            # code...
            include "view/home.php";
            break;
    }
} else {

    include "view/home.php";
}
include "view/footer.php";
?>