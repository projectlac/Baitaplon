<?php session_start() ?>
<?php include('hd-admin.php') ?>


    <div id='wrapper'> 
    <table>





            <tr style="background: #0f6;">
            <td style="width:100px;">STT</td>
            <td>Tiêu đề</td>
            <td> Nội dung</td>

            <td style="width:100px;">Phán Xử</td>

            </tr>

<?php

// mở sql
require("Include/connection.php");
$stt=1;// biến đếm
// truy vẫn dữ liệu.
$sql="SELECT id,title,content FROM posts";
$result=mysqli_query($conn,$sql);
while($data= mysqli_fetch_array($result))
{


        echo "<tr>";
        echo "<td>$stt</td>";
        echo "<td>$data[title]</td>";
        echo "<td>$data[content]</td>";
        echo "<td><a href='del_post.php?id=$data[id]' onclick='return xacnhan();'> <img src='assets/img/del.png' alt='xoa' width='15px;' height='15px;'/>Delete</a></td>";
        echo "</tr>"   ;
$stt++;
};    
//đóng sql
mysqli_close($conn);
?>
    </table></div>
    </div>
    </br>
</body>
</html>

<?php include("Footer.php")?>