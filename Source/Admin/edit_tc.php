<?php 



include('hd-admin.php');

$id=$_GET['id'];
include("include/connection.php");




if (isset($_POST["ok"])) {
$tc=$_POST["txtname"];

$img=$_FILES["image"]["name"];


$mt=$_POST["txtmota"];

$nd=$_POST["txtnd"];





	if($tc==""||$mt==""||$nd==""){echo "<h2 class='head2'>Bạn vui lòng điền đầy đủ thông tin. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";}
else{

	
	$sql="UPDATE trangchu SET `tieude`='$tc',`mota`='$mt',`noidung`='$nd',`img`='$img' where id='$id'";
	$result=mysqli_query($conn,$sql);
	echo "<h2 class='head2'> Bạn đã cập nhật bài viết thành công. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";
}




//xử lý ảnh up
move_uploaded_file($_FILES["image"]["tmp_name"],"../img/trangchu/".$_FILES["image"]["name"]);
mysqli_close($conn);

}

include("include/connection.php");
	$sql1="SELECT id, tieude, mota, noidung, img FROM trangchu WHERE id='$id'";
	$result=mysqli_query($conn,$sql1);
	$data=mysqli_fetch_array($result);


mysqli_close($conn);


?>


<div style="clear:left;"></div>
<div class="NenChiTiet" style="margin-left: 20px; margin-top: 20px; ">
<fieldset>
	<legend> Sửa bài viết: </legend>
	<form action="edit_tc.php?id=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Tiêu đề: </td>
				<td><input type="text" name="txtname" value="<?php  echo $data["tieude"];?>"></td>

			</tr>
			<tr>
				<td> Hình ảnh cũ </td>
				
				<td><img height="auto;" width="150px;" src="../img/trangchu/<?php echo $data["img"] ?> "></td>
			</tr>
			<tr>
				<td> Hình ảnh </td>

				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<td>Mô tả </td>
			<td><textarea cols="55" rows="5" name="txtmota"><?php  echo $data["mota"];?></textarea></td>
			</tr>


			<tr>
				<td>Nội dung:  </td>
			<td><textarea cols="55" rows="5" name="txtnd"><?php  echo $data["noidung"];?></textarea></td>
			</tr>

			
			<tr>
				<td></td>
				<td><input type="submit" value=" Sửa" name="ok"></td>
			</tr>

		</table>
	</form>
</fieldset>



</div>
</br>

<?php require('Footer.php') ?>