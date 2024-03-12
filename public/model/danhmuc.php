<?php
function insert_danhmuc($ten_danhmuc)
{
    $sql = "insert into danhmuc (ten_danhmuc) values('$ten_danhmuc')";
    pdo_execute($sql);
}
;
function delete_danhmuc($id_danhmuc)
{
    try {
        pdo_execute("CALL delete_danhmuc(?)", $id_danhmuc);
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
function loadall_danhmuc()
{
    $sql = "select * from danhmuc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadone_danhmuc($id_danhmuc)
{
    $sql = "select * from danhmuc where id_danhmuc=" . $id_danhmuc;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id_danhmuc, $ten_danhmuc)
{
    $sql = "update danhmuc set ten_danhmuc='" . $ten_danhmuc . "' where id_danhmuc=" . $id_danhmuc;
    pdo_execute($sql);
}

function load_tendanhmuc($id_danhmuc)
{
    if ($id_danhmuc > 0) {
        $sql = "select ten_danhmuc from danhmuc where id_danhmuc=" . $id_danhmuc;
        $ten_danhmuc = pdo_query_one($sql);
        return $ten_danhmuc;
    } else {
        return "";
    }

}
?>