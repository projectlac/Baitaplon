<?php
  session_start();

?>


<?php require_once("Include/connection.php"); ?>
<?php
include('Header.php');?>




<div class="row">
    <div class="col-md-8">
        <div class="NenTrai">
                <h2 class="head">Trang Chủ</h2>
                <div  style="border: #CCC solid 1px; margin-top: 15px; height: 220px;" >
                
                
                <video class="video1" width="320" height="240" controls >
                <source src="assets/img/trailer.webm" type="video/webm">

                </video>
                <p style="  text-indent: 20px;"> Như vậy dự án game MOBA trên di động mới nhất của ông lớn NetEase đã lộ diện và đó chính là Âm Dương Sư MOBA – một bản thể game MOBA hoàn chỉnh có bản quyền chính hãng từ tựa game mobile đấu thẻ tướng nổi tiếng toàn cầu cùng tên. </p>
                <p>
                     <a class="btn" href="#">Xem thêm..</a>
                </p>
               </div> 
               
                <?php include("mvc-trangchu.php") ?>
                
        </div>
   
    </div>
    <div class="col-md-4">
        <div class="NenPhai">
<?php  include("post.php") ?>
        </div>
	</div>
</div>

<?php include('Footer.php')?>