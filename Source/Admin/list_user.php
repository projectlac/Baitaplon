<?php include('hd-admin.php') ?>

    <div id=wrapper> 
    <table>
            <tr style="background: #0f6;">
            <td>STT</td>
            <td>UserName</td>
            <td>Email</td>
            <td>Quyền</td>
            <td>Phán Xử</td>
            </tr>
<?php

// mở sql
require("Include/connection.php");
$stt=1;// biến đếm
// truy vẫn dữ liệu.
$sql="SELECT id,username, email, permision FROM users";
$result=mysqli_query($conn,$sql);
while($data= mysqli_fetch_array($result))
{


                echo"<tr>";
                echo"<td>$stt</td>";
                echo"<td>$data[username]</td>";
                echo"<td>$data[email]</td>";
                if($data['permision']==2){
                echo"<td><a href='level_user.php?id=$data[id]'><img src='assets/img/edit.png' alt='xoa' width='15px;' height='15px;'/>Admin</a></td>"    ;} 
                else {echo"<td><a href='level_user.php?id=$data[id]'> <img src='assets/img/edit.png' alt='xoa' width='15px;' height='15px;'/>Thành Viên<a/></td>"; } 
                echo"<td><a href='del_user.php?id=$data[id]' onclick='return xacnhan();'><img src='assets/img/del.png' alt='xoa' width='15px;' height='15px;'/>Delete</a></td>";
                echo"</tr>  "; 
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