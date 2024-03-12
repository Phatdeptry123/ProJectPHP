<div class="row">
    <div class="row">
        <h1>Danh sách người dùng</h1>
    </div>
    <form action="index.php?act=listuser" method="post">
        <input type="text" name="keyw">
        <input type="submit" value="GO" name="listcheck" class="btn btn-primary">
    </form>
    <div class="row">
        <table>
            <tr>
                <th></th>
                <th>Id Người dùng</th>
                <th>Tên người dùng</th>
                <th>Tên người dùng</th>
                <th>Mật Khẩu</th>
                <th></th>
            </tr>

            <?php
            foreach ($listuser as $user) {
                extract($user);
                $suauser = "index.php?act=suauser&id_user=" . $id_user;
                $xoauser = "index.php?act=xoauser&id_user=" . $id_user;
                $trangthaiuser = "index.php?act=trangthaiuser&id_user=" . $id_user;
                echo '
                    <tr>
                <td>' . $id_user . '</td>
                <td>' . $ten_user . '</td>
                <td>' . $account . '</td>
                <td>' . $password . '</td>
                <td><a href="' . $suauser . '"> <input type="button" value="Sửa"></a><a href="' . $xoauser . '"> <input type="button" value="Xóa"></a>
                <a href="' . $trangthaiuser . '"> <input type="button" value="Trạng Thái"></a></td>
            </tr>';
            }
            ?>

        </table>
    </div>

</div>