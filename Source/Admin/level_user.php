<?php include('hd-admin.php');

$id=$_GET['id'];
if(isset($_POST['ok'])){
    $check=$_POST['txtcheck'];

    require('Include/connection.php');
    $sql="UPDATE users SET permision='$check' Where id=$id";
    $result = mysqli_query($conn,$sql);

    mysqli_close($conn);

    header('location:list_user.php');
    exit();
}


?>


</div>
<div style="clear:left;"></div>
<div style="   background:#FFF; width:250px; height:200px;  border:1px solid #0c6;
   margin-top: 20px;
   margin-left:auto;
   margin-right:auto;" >

<fieldset style="width:205px; margin:20px auto 10px;">
<legend>Ẩn bình luận?</legend>
<form action="level_user.php?id=<?php echo $id ?>" method="POST">

<table>
    <tr>

        <td >
            <select name="txtcheck" id="">
            <option value="1"> Thành viên</option>
            <option value="2">Admin</option>
            
            </select>
        </td>
    </tr>

    <tr>

    <td><input type="submit" value="update" name="ok" style="margin-top:20px";></td>
    </tr>



</table>



</form>
</fieldset>
</div>
</br>
</br>
<?php include('../Footer.php');?>