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
                echo"<td>Admin</td>"    ;} 
                else {echo"<td>Thành Viên</td>"; } 
                echo"<td><a href='del_user.php?id=$data[id]' onclick='return xacnhan();'>Delete</a></td>";
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

<?php include("../Footer.php")?>