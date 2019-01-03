<?php include('hd-admin.php') ?>

    <div id=wrapper> 
    <table>




    <tr>
           
            <td colspan="2"></td>

            <td colspan="2"><a href="add_tc.php"><img src='assets/img/addd.png' alt='xoa' width='15px;' height='15px;' />Thêm Bài Viết</a></td>
            </tr> 



            <tr style="background: #0f6;">
            <td style="width:100px;">STT</td>
            <td>Tiêu đề</td>
            <td style="width:100px;">Edit</td>

            <td style="width:100px;">Phán Xử</td>

            </tr>


<?php

// mở sql
require("Include/connection.php");
$stt=1;// biến đếm
// truy vẫn dữ liệu.
$sql="SELECT id,tieude FROM trangchu";
$result=mysqli_query($conn,$sql);
while($data= mysqli_fetch_array($result))
{


           echo  "<tr>";
           echo  "<td>$stt</td>";
           echo  "<td>$data[tieude]</td>";
           echo  "<td><a href='edit_tc.php?id=$data[id]'> <img src='assets/img/edit.png' alt='xoa' width='15px;' height='15px;'/>Edit</a></td>";
           echo  "<td><a href='del_tc.php?id=$data[id]' onclick='return xacnhan();'> <img src='assets/img/del.png' alt='xoa' width='15px;' height='15px;'/>Delete</a></td>";
           echo  "</tr>";
 
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