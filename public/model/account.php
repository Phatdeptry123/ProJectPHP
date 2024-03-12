<?php
function insert_account($account, $password, $ten_user, $role)
{
    $sql = "insert into nguoidung (account, password, ten_user, role) values('$account','$password','$ten_user', '$role')";
    pdo_execute($sql);
}
function check_account($account, $password)
{
    $sql = "select * from nguoidung where account='" . $account . "' AND password='" . $password . "'";
    $kq = pdo_query_one($sql);
    return $kq;
}
function loadall_user($keyw)
{
    $sql = "select * from nguoidung  where 1";
    if ($keyw != "") {

        $sql .= " and ten_user like '%" . $keyw . "%'";
    }
    $listuser = pdo_query($sql);
    return $listuser;
}
function delete_user($id_user)
{
    $sql = "delete from nguoidung where id_user=" . $id_user;
    pdo_query($sql);

    // $sql = "delete from user where id_user=" . $_GET['id_user'];
    // pdo_query($sql);
}
function trangthai_user($id_user)
{
    $sql = "select * from login_log  where id_user=" . $id_user;
    $listdangnhap = pdo_query($sql);
    return $listdangnhap;
}
?>