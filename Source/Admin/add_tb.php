<?php 



include('hd-admin.php');
include("include/connection.php");
?>


<?php
if (isset($_POST["ok"])) {
$tb=$_POST["txtname"];
$loai=$_POST["loai"];
$img=$_FILES["image"]["name"];
$gia=$_POST["txtgia"];
$mt=$_POST["txtmota"];
$nt1=$_POST["txtnoita1"];
$mt1=$_POST["txtmt1"];
$nt2=$_POST["txtnoita2"];
$mt2=$_POST["txtmt2"];




	if($tb==""||$gia==""||$mt==""||$nt1==""||$mt1==""||$nt2==""||$mt2==""){echo "<h2 class='head2'>Bạn vui lòng điền đầy đủ thông tin. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";}
else{

	
	$sql="INSERT INTO `vukhi`(`w_id`, `name`, `mota`, `loai`, `gia`, `name_noitai1`, `noitai1`, `name_noitai2`, `noitai2`, `image`) VALUES ('','$tb','$mt','$loai','$gia','$nt1','$mt1','$nt2','$mt2','$img')";
	$result=mysqli_query($conn,$sql);
	echo "<h2 class='head2'> Bạn đã thêm trang bị thành công. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";
}

mysqli_close($conn);


//xử lý ảnh up
move_uploaded_file($_FILES["image"]["tmp_name"],"../img/w1/".$_FILES["image"]["name"]);








}
?>


<div style="clear:left;"></div>
<div class="NenChiTiet" style="margin-left: 20px; margin-top: 20px; ">
<fieldset>
	<legend> Thêm Trang Bị</legend>
	<form action="add_tb.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Tên trang bị: </td>
				<td><input type="text" name="txtname"></td>

			</tr>
			<tr>
				<td> Hình ảnh </td>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<td>Loại trang bị </td>
				<td><select name="loai">
					<option value="C"> Công </option>
					<option value="P"> Phòng </option>
					<option value="D"> Đa Dụng </option>
				</select>
			</td>
			</tr>


			<tr>
				<td>Giá:  </td>
				<td><input type="text" size="10px" name="txtgia"></td>
			</tr>
			<tr>
			
				<td> Mô tả </td>
				<td><textarea cols="55" rows="5" name="txtmota"></textarea></td>
			</tr>
			<tr>
				
				<td> Tên Nội Tại 1: </td>
				<td><input type="text" name="txtnoita1"></td>
			</tr>
		
			<tr>
				<td> Mô tả nội tại: </td>
				<td><textarea cols="55" rows="5" name="txtmt1"></textarea></td>
			</tr>
			
			<tr>
				<td>Tên Nội Tại 2: </td>
				<td><input type="text" name="txtnoita2"></td>
			</tr>
						
			<tr>
				<td> Mô tả nội tại: </td>
				<td><textarea cols="55" rows="5" name="txtmt2"></textarea></td>
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