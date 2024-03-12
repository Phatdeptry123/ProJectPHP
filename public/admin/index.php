<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/account.php";

include "header.php";
//controler
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        // Thêm danh mục ////////////////////////////////////////////////
        case 'adddm':
            # code...
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_danhmuc = $_POST['ten_danhmuc'];
                insert_danhmuc($ten_danhmuc);
                $thongbao = "them thanh cong";
            }
            include "./danhmuc/add.php";
            break;


        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "./danhmuc/list.php";
            break;

        case 'xoadm':
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                delete_danhmuc($_GET['id_danhmuc']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "./danhmuc/list.php";
            break;


        case 'suadm':
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                $dm = loadone_danhmuc($_GET['id_danhmuc']);
            }
            include "./danhmuc/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ten_danhmuc = $_POST['ten_danhmuc'];
                $id_danhmuc = $_POST['id_danhmuc'];
                update_danhmuc($id_danhmuc, $ten_danhmuc);
                $thongbao = "Cap nhat thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            include "./danhmuc/list.php";
            break;



        // Thêm Sách
        case 'addbook':
            # code...
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_danhmuc = $_POST['id_danhmuc'];
                $bookname = $_POST['bookname'];
                $author = $_POST['author'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                ;
                $price = $_POST['price'];
                $rating = $_POST['rating'];
                $mota = $_POST['mota'];
                $nxb = $_POST['nxb'];
                insert_book($id_danhmuc, $bookname, $author, $hinh, $price, $rating, $mota, $nxb);
                $thongbao = "them thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            include "./controller/add.php";
            break;


        case 'adduser':
            # code...
            if (isset($_POST['themuser']) && ($_POST['themuser'])) {
                $account = $_POST['account'];
                $ten_user = $_POST['ten_user'];
                $password = $_POST['password'];
                $role = $_POST['role'];
                insert_account(
                    $account,
                    $password,
                    $ten_user,
                    $role
                );
                $thongbao = "them thanh cong";
            }
            include "./account/add.php";
            break;

        case 'listuser':
            if (isset($_POST['keyw']) && ($_POST['keyw'])) {
                $keyw = $_POST['keyw'];

            } else {
                $keyw = "";
            }

            $listuser = loadall_user($keyw);
            include "./account/list.php";
            break;
        case 'trangthaiuser':
            # code...
            $listdangnhap = trangthai_user($_GET['id_user']);
            include "./account/trangthai.php";
            break;
        case 'xoauser':
            echo "33";
            if (isset($_GET['id_user']) && ($_GET['id_user'] > 0)) {
                delete_user($_GET['id_user']);
            }
            $listuser = loadall_user('');
            include "./account/list.php";
            break;
            $listuser = loadall_user($keyw);
            include "./account/list.php";
            break;
        case 'listbook':
            if (isset($_POST['keyw']) && ($_POST['keyw'])) {
                $keyw = $_POST['keyw'];

            } else {
                $keyw = "";
            }
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                $id_danhmuc = $_GET['id_danhmuc'];
                $listbook = loadall_book($keyw, $id_danhmuc);
                $listdanhmuc = load_tendanhmuc($id_danhmuc);
                include "./controller/list.php";

            } else {
                $id_danhmuc = "";
            }

            $listbook = loadall_book($keyw, $id_danhmuc);
            $listdanhmuc = load_tendanhmuc($id_danhmuc);
            include "./controller/list.php";
            break;

        case 'xoabook':
            echo "33";
            if (isset($_GET['id_book']) && ($_GET['id_book'] > 0)) {
                delete_book($_GET['id_book']);
            }
            $listbook = loadall_book('', 0);
            include "./controller/list.php";
            break;


        case 'suabook':
            if (isset($_GET['id_book']) && ($_GET['id_book'] > 0)) {
                $book = loadone_book($_GET['id_book']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "./controller/update.php";
            break;

        case 'updatebook':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $id_book = $_POST['id_book'];
                $id_danhmuc = $_POST['id_danhmuc'];
                $bookname = $_POST['bookname'];
                $author = $_POST['author'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                ;
                $price = $_POST['price'];
                $rating = $_POST['rating'];
                $mota = $_POST['mota'];
                $nxb = $_POST['nxb'];
                update_book($id_book, $id_danhmuc, $bookname, $author, $hinh, $price, $rating, $mota, $nxb);
                $thongbao = "Cap nhat thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            $listbook = loadall_book('', 0);
            include "./controller/list.php";
            break;


        // case 'addbook':
        //     include "./controller/add.php";
        //     break;
        case 'adduser':
            include "./controller/add.php";
            break;
        default:
            # code...
            include "main.php";
            break;
    }
} else {
    include "main.php";
}

include "footer.php";

?>