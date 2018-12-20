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





