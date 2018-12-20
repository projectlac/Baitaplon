<link rel="stylesheet" href="css/css1.css">
<h2 class="head" style="text-align:center">
            Bài Post mới

        </h2>
<?php 
foreach ($posts as $pts){
?>

<div class="KhungP">
    <h5><?php echo $pts->title;// In ra title bài viết ?></h5>
    <p><?php echo substr(($pts->content), 0, 100)." ...";// In ra nội dung bài viết lấy chỉ 100 ký tự ?></p>
    <a href="chitietpost.php?id=<?php echo $pts->id; // Tạo liên kết đến trang display.php và truyền vào id bài viết ?>"> Xem thêm</a>
</div>
<?php
}
?>