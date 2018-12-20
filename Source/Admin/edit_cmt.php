<?php include('hd-admin.php');

$id=$_GET['id'];
if(isset($_POST['ok'])){
    $check=$_POST['txtcheck'];

    require('Include/connection.php');
    $sql="UPDATE cmt SET check1='$check' Where cmt_id=$id";
    $result = mysqli_query($conn,$sql);

    mysqli_close($conn);

    header('location:list_cmt.php');
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
<form action="edit_cmt.php?id=<?php echo $id ?>" method="POST">

<table>
    <tr>

        <td >
            <select name="txtcheck" id="">
            <option value="N">Không ẩn</option>
            <option value="Y">Ẩn</option>
            
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