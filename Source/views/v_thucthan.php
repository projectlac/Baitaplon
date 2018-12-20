<link rel="stylesheet" href="css/css1.css">

<div class="NenTrai11">

<h2 class="head">Thức Thần</h2>
<?php 
foreach ($thucthans as $shiki){
?>
<div class="Khung">
<a href=mvc-chitietthucthan.php?id=<?php echo $shiki->id ?>>
<img src="img/<?php echo $shiki->anh?>" alt="" width = "210px" height = "210px" >
<h4><?php echo $shiki->name ?></h4></a>
<p> <?php echo substr(($shiki->truyenthuyet),0,100)."..." ?></p>
</div>

<?php
}
?>
</div>
