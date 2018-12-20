<div id="cmt1">
<?php
require("Include/connection.php");

$cmt = "SELECT name,cmt,time FROM cmt WHERE check1='N' and news_id=$id  order by time desc limit 4";
$query1 = mysqli_query($conn,$cmt);
$data1= mysqli_fetch_array($query1);


                echo"<div class='showcmt'>";
            echo"<div class='cmt'>";
            echo"<img src='img/noitai3.png' alt='' srcset='' width=50px; height=50px;>";
            
            echo"<div class='mess'>";
            echo"<p style='color:#C9F; font-weight: bold;'> $data1[name] <span style='color:#999'>$data1[time]</span></p>";
            echo"<p>$data1[cmt]</p>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
while($data3=mysqli_fetch_array($query1)){
                
            echo"<div class='showcmt'>";
            echo"<div class='cmt'>";
            echo"<img src='img/noitai3.png' alt='' srcset='' width=50px; height=50px;>";

            echo"<div class='mess'>";
            echo"<p style='color:#C9F; font-weight: bold;'> $data3[name] <span style='color:#999' >$data3[time]</span></p>";
            echo"<p>$data3[cmt]</p>";
            echo"</div>";
            echo"</div>";
            echo"</div>";}

mysqli_close($conn);
?>
</div>


