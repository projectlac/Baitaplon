<link rel="stylesheet" href="css/css1.css">

    

    <?php 
foreach ($tt as $ttt){
?>
<div  style="border: #CCC solid 1px; margin-top: 15px; height: auto; min-height: 175px;"">
	<div style="clear: left;"> </div>
        <img src="img/trangchu/<?php echo $ttt->img ?>" alt="" srcset="" width = "150px" height = "150px" style="float:left"  />
        
            <h4 style="margin-top: 15px; text-indent: 20px;">
            <?php echo $ttt->tieude ?></h4>
            <p  style="  text-indent: 20px;"> <?php echo ($ttt->mota) ?></p>
           <p><a href="mvc-chitiettrangchu.php?id=<?php echo $ttt->id ?>" > Xem thêm...</a></p>


</div>	
<?php
}
?>
<div id="phantrang">

<?php 
$display=3;
include("Include/connection.php");


$sqlq="SELECT * FROM trangchu";
$result=mysqli_query($conn,$sqlq);
$sum1=mysqli_num_rows($result);

$page=ceil($sum1/$display);
	if($page>1){
echo "<ul>";
	
for ($i = 1;$i<= $page; $i++)
{
$trang= ($i-1)*$display;
	echo "<li><a href='TrangChu.php?trang=$trang'>$i</a></li>";

}

echo "</ul>";
};
mysqli_close($conn);
?>

</div>


