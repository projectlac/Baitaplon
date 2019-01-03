<?php include('hd-admin.php') ?>

    <div id=wrapper> 
    <table>




            <tr style="background: #0f6;">
            <td style="width:100px;">STT</td>
            <td style="width:100px;">User</td>
            <td > Bình luận</td>
            <td style="width:100px;">Ẩn</td>
            <td style="width:100px;">Phán Xử</td>
            </tr>

            <?php
include("Include/connection.php");
$stt=1;
$sql="SELECT cmt_id,name,cmt,check1 from cmt";
$result = mysqli_query($conn,$sql);

while($data= mysqli_fetch_array($result))
{

           
            echo" <tr>";
            echo"<td>$stt</td>";
            echo"<td>$data[name]</td>";
            echo"<td>$data[cmt]</td>";
            if($data['check1']=='N'){
                echo "<td><a href='edit_cmt.php?id=$data[cmt_id]'><img src='assets/img/edit.png' alt='xoa' width='15px;' height='15px;'/>Không Ẩn<a></td>";}
            else{
                echo"<td><a href='edit_cmt.php?id=$data[cmt_id]'><img src='assets/img/edit.png' alt='xoa' width='15px;' height='15px;'/>Ẩn<a></td>";
            }
            echo"<td><a href='del_cmt.php?id=$data[cmt_id]' onclick='return xacnhan();'><img src='assets/img/del.png' alt='xoa' width='15px;' height='15px;'/>Delete</a></td>";
            echo"</tr>"; 

  $stt++;          
            }         
            
  ?>         
    </table></div>
    </div>
    </br>
</body>
</html>

<?php include("Footer.php")?>