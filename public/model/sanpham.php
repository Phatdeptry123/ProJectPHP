<?php
function insert_book($id_danhmuc, $bookname, $author, $hinh, $price, $rating, $mota, $nxb)
{
    $sql = "insert into book (id_danhmuc, bookname,author,hinh, price, rating, mota, nxb) values('$id_danhmuc','$bookname','$author','$hinh', '$price', '$rating', '$mota', '$nxb')";
    pdo_execute($sql);
}
;
function delete_book($id_book)
{
    $sql = "delete from book where id_book=" . $id_book;
    pdo_query($sql);

    // $sql = "delete from book where id_book=" . $_GET['id_book'];
    // pdo_query($sql);
}
function loadall_book($keyw, $id_danhmuc)
{
    // $sql = "select * from book  where 1";
    // if ($keyw != "") {

    //     $sql .= " and bookname like '%" . $keyw . "%'";
    // }
    // if ($id_danhmuc > 0) {
    //     $sql .= " and id_danhmuc like '%" . $id_danhmuc . "%'";
    // }
    // $sql .= " order by id_danhmuc desc";
    $sql = "call usp_GetBooks('$keyw', '$id_danhmuc')";
    $listbook = pdo_query($sql);
    return $listbook;
}
// function load_tenbook($id_book)
// {
//     $sql = "SELECT get_bookname_by_id('$id_book') as bookname;";
//     $tenbook = pdo_query($sql);
//     return $tenbook;

// }


function loadall_book_home()
{
    $sql = "select * from book  where 1 order by id_book desc";
    $listbook = pdo_query($sql);
    return $listbook;
}




function loadone_book($id_book)
{
    $sql = "select * from book where id_book=" . $id_book;
    $book = pdo_query_one($sql);
    return $book;
}
function update_book($id_book, $id_danhmuc, $bookname, $author, $hinh, $price, $rating, $mota, $nxb)
{
    $sql = "update book set id_danhmuc='" . $id_danhmuc . "',bookname='" . $bookname . "',author='" . $author . "',hinh='" . $hinh . "',price='" . $price . "',rating='" . $rating . "',mota='" . $mota . "',nxb='" . $nxb . "' where id_book=" . $id_book;
    pdo_execute($sql);
}

function load_book_cungloai($id_book, $id_danhmuc)
{
    $sql = "select * from book where id_book <> " . $id_book;
    $sql .= " and id_danhmuc =" . $id_danhmuc;
    $listbook = pdo_query($sql);
    return $listbook;
}






?>