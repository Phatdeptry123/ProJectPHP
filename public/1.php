<?php
session_start();
$_SESSION['mycart'] = [];
$sp1 = [1, "san pham 1", 1000, 2];
$sp2 = [1, "san pham 2", 2000, 3];

$cart = [];
$cart[] = $sp1;
$cart[] = $sp2;
$_SESSION['mycart'] = $cart;
echo '<h1>
test session_start
</h1> 
<a href="2.php">Xem sản phẩm đã tạo</a>'
    ?>