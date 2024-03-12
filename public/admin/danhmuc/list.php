<div class="row">
    <div class="row">
        <h1>Danh sách thể loại</h1>
    </div>
    <div class="row">
        <table>
            <tr>
                <th></th>
                <th>Mã loại</th>
                <th>Tên Loại</th>
                <th></th>
            </tr>

            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                $suadm = "index.php?act=suadm&id_danhmuc=" . $id_danhmuc;
                $xoadm = "index.php?act=xoadm&id_danhmuc=" . $id_danhmuc;

                # code...
                echo '
                    <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>' . $id_danhmuc . '</td>
                <td>' . $ten_danhmuc . '</td>
                <td><a href="' . $suadm . '"> <input type="button" value="Sửa"></a><a href="' . $xoadm . '"> <input type="button" value="Xóa"></a></td>
            </tr>';
            }
            ?>

        </table>
    </div>

</div>