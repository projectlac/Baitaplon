<?php
  session_start();

?>


<?php require_once("Include/connection.php"); ?>
<?php
include('Header.php');?>





<div class="row">
    <div class="col-md-8">  <!--Ben Trai-->

        
                

                <?php

include("mvc-thucthan.php");

?>

     
   
	</div>
	

    <div class="col-md-4">	<!--Ben Phai-->
        <div class="NenPhai">



<?php include("post.php");?>
        </div>
	</div>
</div>

<?php include('Footer.php')?>