<?php
  session_start();

?>
<?php include("Header.php")?>



<link rel="stylesheet" href="css/css1.css">
<div class="row">
    <div class="col-md-8"> 
        <div class="NenTrai11">
            <h2 class="head" style="text-align: center;"><?php echo $ttid->tieude ?></h2>

    

     
        
            
            <h4><?php echo $ttid->mota ?></h4>

             <img src="img/trangchu/<?php echo $ttid->img ?>" alt="" srcset="" width = "250px" height = "auto" style="float:left"  />
            <p  style="  text-indent: 20px;"> <?php echo ($ttid->noidung )?></p>
           

</div>
</div>



<div class="col-md-4">	<!--Ben Phai-->
        <div class="NenPhai">
        <?php include("post.php");?>
</div>
</div>
</div>
</div>
<?php include("footer.php")?>




