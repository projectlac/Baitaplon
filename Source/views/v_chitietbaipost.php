
<?php
  session_start();

?>
<link rel="stylesheet" href="css/css1.css">



<?php include("Header.php")?>

<link rel="stylesheet" href="../css/css1.css">


<div class="row">
    <div class="col-md-8"> 
        <div class="NenChiTiet">
<h2 class="head">
<p style="text-align:center">Tiêu đề: <?php echo $post->title; ?></p>

        </h2>

<h4>Nội dung: </h4>
<p><?php echo $post->content; ?></p>


</div></div>
<div class="col-md-4">	<!--Ben Phai-->
        <div class="NenPhai">
        <?php include("post.php");?>
</div></div>

<?php
include("Footer.php")
?>