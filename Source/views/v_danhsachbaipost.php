
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
        <div class = "NenDanhSachpost">
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


<div id="phantrang">

<?php 
$display=12;
include("Include/connection.php");


$sqlq="SELECT * FROM posts";
$result=mysqli_query($conn,$sqlq);
$sum1=mysqli_num_rows($result);

$page=ceil($sum1/$display);
    if($page>1){
echo "<ul>";
    
for ($i = 1;$i<= $page; $i++)
{
$trang= ($i-1)*$display;
    echo "<li><a href='DanhSachBaiPost.php?trang=$trang'>$i</a></li>";

}

echo "</ul>";
};
mysqli_close($conn);
?>

</div>
</div>
</div>

    <div class="col-md-4">	<!--Ben Phai-->
        <div class="NenPhai">

<h2 class="head" style="text-align:center">
            Tin mới

        </h2>
        <?php include("mvc-tinmoi.php") ?>

        </div>
	</div>
</div>
</div>




<?php } ?>


<?php include("Footer.php")?>