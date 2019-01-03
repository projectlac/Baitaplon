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
      <div style="clear: left;"></div>
<div id="phantrang">

<?php 
$display=6;
include("Include/connection.php");


$sqlq="SELECT * FROM thucthan";
$result=mysqli_query($conn,$sqlq);
$sum1=mysqli_num_rows($result);

$page=ceil($sum1/$display);
	if($page>1){
echo "<ul>";

for ($i = 1;$i<= $page; $i++)
{
$trang= ($i-1)*$display;

	echo "<li><a href='ThucThan.php?trang=$trang'>$i</a></li>";

}

echo "</ul>";
};
mysqli_close($conn);
?>

</div>
</div>


