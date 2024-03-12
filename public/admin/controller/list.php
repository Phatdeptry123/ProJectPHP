<div class="row">
    <div class="row">
        <h1>Danh sách Sách</h1>
    </div>
    <form action="index.php?act=listbook" method="post">
            <input type="text" name="keyw">
            <select name="id_danhmuc" class="btn btn-primary">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo ' <option value="' . $id_danhmuc . '">' . $ten_danhmuc . '</option> ';
                }
                ?>
            </select>
            <input type="submit" value="GO" name="listcheck" class="btn btn-primary">
        </form>
    <div class="row">
        
        <table>
            <tr>
                <th></th>
                <th>Mã danh mục</th>
                <th>Mã Sách</th>
                <th>Tên Sách</th>
                <th>Tác giả</th>
                <th>Hình</th>
                <th>Giá</th>
                <th>Rating</th>
                <th></th>
            </tr>

            <?php
            foreach ($listbook as $book) {
                extract($book);
                $suabook = "index.php?act=suabook&id_book=" . $id_book;
                $xoabook = "index.php?act=xoabook&id_book=" . $id_book;
                $hinhpath = "../upload/" . $hinh;
                $hinh = "<img src='" . $hinhpath . "' height='80'";

                # code...
                echo '
                    <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>' . $id_danhmuc . '</td>
                <td>' . $id_book . '</td>
                <td>' . $bookname . '</td>
                <td>' . $author . '</td>
                <td>' . $hinh . '</td>
                <td>' . $price . '</td>
                <td>' . $rating . '</td>
                <td><a href="' . $suabook . '"> <input type="button" value="Sửa"></a><a href="' . $xoabook . '"> <input type="button" value="Xóa"></a></td>
            </tr>';
            }
            ?>

        </table>
    </div>

</div>