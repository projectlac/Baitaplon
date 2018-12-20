<link rel="stylesheet" href="css/css1.css">

<div class="NenTrai11">

<h2 class="head">Thức Thần</h2>
<?php 
foreach ($vukhis as $v){
?>
<div class="Khung">

<img src="img/w1/<?php echo $v->w_id ?>.jpg" alt="" width = "210px" height = "210px" >
<h4><?php echo $v->name ?></h4></a>
<p> <?php echo ($v->gia) ?></p>
<p> <?php echo ($v->mota) ?></p>
<p> <?php echo ($v->name_noitai1) ?></p>
<p> <?php echo ($v->noitai1) ?></p>
<p> <?php echo ($v->name_noitai2) ?></p>
<p> <?php echo ($v->noitai2) ?></p>
</div>

<?php
}
?>
</div>