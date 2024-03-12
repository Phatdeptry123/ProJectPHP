






<h1>Thêm Sách</h1>



<div class="row mr-2">
    <div class="row frmtile ">
        <form action="index.php?act=addbook" method="post" enctype="multipart/form-data">
            <div class="row col-3">
                <label>Thuộc danh mục</label> <br>
                <select name="id_danhmuc" id="">
                    <?php 
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo' <option value="'.$id_danhmuc.'">'.$ten_danhmuc.'</option> ';
                        }
                    ?> 
                </select>
            </div>
            <div class="row mb-2">
            <label>Tên sách</label><br>
                <input type="text" name="bookname" class="mr-1 col-3">
            </div>
            <div class="row mb-2">
            <label>Mô tả sách</label> 
                <input type="text" name="mota" class="mr-1 col-3">
            </div>
            <div class="row mb-2">
            <label>Rating</label> 
                <input type="text" name="rating" class="mr-1 col-3">
            </div>
            <div class="row mb-2">
            <label>Nhà xuất bản</label> 
                 <br>
                <input type="text" name="nxb" class="mr-1 col-3">
            </div>
            <div class="row mb-2">
            <label>Tác Giả</label> 
                 <br>
                <input type="text" name="author" class="mr-1 col-3">
            </div>
            <div class="row mb-2">
            <label>Giá</label> 
                 <br>
                <input type="text" name="price" class="mr-1 col-3">
            </div>
            <div class="row mb-2">
            <label>Hình ảnh</label> 
                 <br>
                <input type="file" name="hinh" class="mr-1 col-5">
            </div>
            <div class="row mb-2">

            <div class="row">
                <div class="d-flex">
                    <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-primary col-3">
                    <input type="reset" value="Nhập lại" class="btn btn-primary col-3">
                    <a href="index.php?act=listbook"><input type="button" value="Danh Sách" class="btn btn-primary col-12"></a>
                </div>
            </div>
            <?php 
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao
            ?>
        </form>
    </div>
</div>