<?php 



include('hd-admin.php');
include("include/connection.php");
?>


<?php
if (isset($_POST["ok"])) {
$tc=$_POST["txtname"];

$img=$_FILES["image"]["name"];


$mt=$_POST["txtmota"];

$nd=$_POST["txtnd"];






	if($tc==""||$mt==""||$nd==""){echo "<h2 class='head2'>Bạn vui lòng điền đầy đủ thông tin. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";}
else{

	
	$sql="INSERT INTO trangchu(`tieude`,`mota`,`noidung`,`img`) VALUES ('$tc','$mt','$nd','$img')";
	$result=mysqli_query($conn,$sql);
	echo "<h2 class='head2'> Bạn đã thêm bài viết thành công. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";
}

mysqli_close($conn);


//xử lý ảnh up
move_uploaded_file($_FILES["image"]["tmp_name"],"../img/trangchu/".$_FILES["image"]["name"]);







}
?>


<div style="clear:left;"></div>
<div class="NenChiTiet" style="margin-left: 20px; margin-top: 20px; ">
<fieldset>
	<legend> Thêm Bài Viết</legend>
	<form action="add_tc.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td> Tiêu đề: </td>
				<td><input type="text" name="txtname"></td>

			</tr>
			<tr>
				<td> Hình ảnh: </td>
				<td><input type="file" name="image"></td>
			</tr>

			<tr>
				<td> Mô tả: </td>
				<td><textarea cols="55" rows="5" name="txtmota"></textarea></td>
			</tr>
		
			<tr>
				<td> Nội dung chính: </td>
				<td><textarea cols="55" rows="5" name="txtnd"></textarea></td>
			</tr>

						
			<tr>
				<td></td>
				<td><input type="submit" value="Thêm" name="ok"></td>
			</tr>

		</table>
	</form>
</fieldset>



</div>
</br>

<?php require('../Footer.php') ?>