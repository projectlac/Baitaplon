<?php 



include('hd-admin.php');
include("include/connection.php");
?>


<?php
if (isset($_POST["ok"])) {
$tt=$_POST["txtname"];

$img=$_FILES["image"]["name"];

$img1=$_FILES["image1"]["name"];

$img2=$_FILES["image2"]["name"];

$img3=$_FILES["image3"]["name"];

$img4=$_FILES["image4"]["name"];

$img5=$_FILES["image5"]["name"];

$img6=$_FILES["image6"]["name"];

$mt=$_POST["txtmota"];

$nt=$_POST["txtnoitai"];
$mtnt=$_POST["txtmt"];

$mt1=$_POST["txtmt1"];
$mt2=$_POST["txtmt2"];
$mt3=$_POST["txtmt3"];
$mt4=$_POST["txtmt4"];

$kn1=$_POST["txtkn1"];
$kn2=$_POST["txtkn2"];
$kn3=$_POST["txtkn3"];
$kn4=$_POST["txtkn4"];




	if($tt==""||$mt==""||$mt1==""||$mt2==""||$mt3==""||$mt4==""||$nt==""||$kn1==""||$kn2==""||$kn3==""||$kn4==""){echo "<h2 class='head2'>Bạn vui lòng điền đầy đủ thông tin. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";}
else{

	
	$sql="INSERT INTO `thucthan`(`id`,`name`, `truyenthuyet`, `noitai`, `skill1`, `skill2`, `skill3`, `skiil4`, `skill1_name`, `skill2_name`, `skill3_name`, `skill4_name`, `noitai_name`, `anh`, `anhp`, `anh1`, `anh2`, `anh3`, `anh4`, `anhc`) VALUES ('','$tt','$mt','$mtnt','$mt1','$mt2','$mt3','$mt4','$kn1','$kn2','$kn3','$kn4','$nt','$img','$img2','$img3','$img4','$img5','$img6','$img1')";
	$result=mysqli_query($conn,$sql);
	echo "<h2 class='head2'> Bạn đã thêm trang bị thành công. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";
}

mysqli_close($conn);


//xử lý ảnh up
move_uploaded_file($_FILES["image"]["tmp_name"],"../img/".$_FILES["image"]["name"]);
move_uploaded_file($_FILES["image1"]["tmp_name"],"../img/".$_FILES["image1"]["name"]);
move_uploaded_file($_FILES["image2"]["tmp_name"],"../img/".$_FILES["image2"]["name"]);
move_uploaded_file($_FILES["image3"]["tmp_name"],"../img/".$_FILES["image3"]["name"]);
move_uploaded_file($_FILES["image4"]["tmp_name"],"../img/".$_FILES["image4"]["name"]);
move_uploaded_file($_FILES["image5"]["tmp_name"],"../img/".$_FILES["image5"]["name"]);
move_uploaded_file($_FILES["image6"]["tmp_name"],"../img/".$_FILES["image6"]["name"]);







}
?>


<div style="clear:left;"></div>
<div class="NenChiTiet" style="margin-left: 20px; margin-top: 20px; ">
<fieldset>
	<legend> Thêm Thức Thần</legend>
	<form action="add_tt.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Tên Thức Thần </td>
				<td><input type="text" name="txtname"></td>

			</tr>
			<tr>
				<td> Hình ảnh </td>
				<td><input type="file" name="image"></td>
			</tr>

			<tr>
				<td> Hình ảnh nền </td>
				<td><input type="file" name="image1"></td>
			</tr>
			<tr>
				<td> Mô tả </td>
				<td><textarea cols="55" rows="5" name="txtmota"></textarea></td>
			</tr>
			<tr>
				
				<td> Nội Tại : </td>
				<td><input type="text" name="txtnoitai"></td>
			</tr>
			<tr>
				<td> Hình ảnh nội tại </td>
				<td><input type="file" name="image2"></td>
			</tr>		
			<tr>
				<td> Mô tả nội tại: </td>
				<td><textarea cols="55" rows="5" name="txtmt"></textarea></td>
			</tr>
			
				

				<td> Kĩ năng 1 : </td>
				<td><input type="text" name="txtkn1"></td>
			</tr>
			<tr>
				<td> Hình ảnh kĩ năng </td>
				<td><input type="file" name="image3"></td>
			</tr>		
			<tr>
				<td> Mô tả : </td>
				<td><textarea cols="55" rows="5" name="txtmt1"></textarea></td>
			</tr>



				<td> Kĩ năng 2 : </td>
				<td><input type="text" name="txtkn2"></td>
			</tr>
			<tr>
				<td> Hình ảnh kĩ năng </td>
				<td><input type="file" name="image4"></td>
			</tr>		
			<tr>
				<td> Mô tả : </td>
				<td><textarea cols="55" rows="5" name="txtmt2"></textarea></td>
			</tr>


				<td> Kĩ năng 3 : </td>
				<td><input type="text" name="txtkn3"></td>
			</tr>
			<tr>
				<td> Hình ảnh kĩ năng </td>
				<td><input type="file" name="image5"></td>
			</tr>		
			<tr>
				<td> Mô tả : </td>
				<td><textarea cols="55" rows="5" name="txtmt3"></textarea></td>
			</tr>


				<td> Kĩ năng 4 : </td>
				<td><input type="text" name="txtkn4"></td>
			</tr>
			<tr>
				<td> Hình ảnh kĩ năng </td>
				<td><input type="file" name="image6"></td>
			</tr>		
			<tr>
				<td> Mô tả : </td>
				<td><textarea cols="55" rows="5" name="txtmt4"></textarea></td>
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