
<?php session_start();?>


<?php
if ($_SESSION['captruycap']==0)
{
	header("Location:TrangChu.php");

}

else {

?>


<?php include("Header.php") ?>


<link rel="stylesheet" href="css/css1.css">




<div class="row">
    <div class="col-md-8"> 
        <div class = "NenDanhSach">
<h2 class="head" style="text-align:center">
            Danh Sách Bài Viết

        </h2>
<a class='btn btn-light action-button' role='button' href='Post-Bai.php'>Thêm Bài Viết.</a>
</br>
</br>
<?php 
foreach ($posts as $pts){
?>

<div class="KhungDanhSach">
    <h5 style="text-align:center"><?php echo $pts->title;// In ra title bài viết ?></h5>
    <p><?php echo substr(($pts->content), 0, 50)." ...";// In ra nội dung bài viết lấy chỉ 100 ký tự ?></p>
    <a href="chitietpost.php?id=<?php echo $pts->id; // Tạo liên kết đến trang chitietpost.php và truyền vào id bài viết ?>"> Xem thêm</a>



</div>
<?php
}
?>


</div>
</div>

    <div class="col-md-4">	<!--Ben Phai-->
        <div class="NenPhai">

<h2 class="head" style="text-align:center">
            Tin mới

        </h2>
        <?php include("mvc-trangchu.php") ?>

        </div>
	</div>
</div>
</div>




<?php } ?>


<?php include("Footer.php")?>