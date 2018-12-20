<?php
  session_start();

?>

<?php include('Header.php') ?>
<link rel="stylesheet" href="css/css1.css">

<div class="row">
    <div class="col-md-8"> 
        <div class="NenChiTiet">
<h2 class="head" style="text-align: center;">Trang Bị Tấn Công</h2>

<table border='1px'>
	<?php 
foreach ($c as $cong){
?>
<tr>
        <td><img src="img/w1/<?php echo $cong->image ?>" alt="" srcset="" width = "75px" height = "75px" style="float:left"  /></td>
        <td>
            <h4>
            <?php echo $cong->name ?></h4>
            <p> <?php echo ($cong->gia) ?></p>
<p> <?php echo ($cong->mota) ?></p>
<h5> <?php echo ($cong->name_noitai1) ?></h5>
<p> <?php echo ($cong->noitai1) ?></p>
<h5> <?php echo ($cong->name_noitai2) ?></h5>
<p> <?php echo ($cong->noitai2) ?></p>
</td>

</tr>
<?php
}
?>
</table>



</div></div>
<div class="col-md-4">	<!--Ben Phai-->
        <div class="NenPhai">
        <?php include("post.php");?>
</div></div>
</div>
<?php include("Footer.php") ?>