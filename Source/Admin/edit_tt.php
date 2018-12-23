<?php 



include('hd-admin.php');
$id=$_GET['id'];
include("include/connection.php");



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

	
	$sql="UPDATE `thucthan` SET `name`='$tt', `truyenthuyet`='$mt', `noitai`='$mtnt', `skill1`='$mt1', `skill2`='$mt2', `skill3`='$mt3', `skiil4`='$mt4', `skill1_name`='$kn1', `skill2_name`='$kn2', `skill3_name`='$kn3', `skill4_name`='$kn4', `noitai_name`='$nt', `anh`='$img', `anhp`='$img2', `anh1`='$img3', `anh2`='$img4', `anh3`='$img5', `anh4`='$img6', `anhc`='$img1' where id='$id'";

	$result=mysqli_query($conn,$sql);
	echo "<h2 class='head2'> Bạn đã sửa thức thần thành công. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";
}

//xử lý ảnh up
move_uploaded_file($_FILES["image"]["tmp_name"],"../img/".$_FILES["image"]["name"]);
move_uploaded_file($_FILES["image1"]["tmp_name"],"../img/".$_FILES["image1"]["name"]);
move_uploaded_file($_FILES["image2"]["tmp_name"],"../img/".$_FILES["image2"]["name"]);
move_uploaded_file($_FILES["image3"]["tmp_name"],"../img/".$_FILES["image3"]["name"]);
move_uploaded_file($_FILES["image4"]["tmp_name"],"../img/".$_FILES["image4"]["name"]);
move_uploaded_file($_FILES["image5"]["tmp_name"],"../img/".$_FILES["image5"]["name"]);
move_uploaded_file($_FILES["image6"]["tmp_name"],"../img/".$_FILES["image6"]["name"]);


mysqli_close($conn);



}

include("Include/connection.php");
	
	$sql1= "SELECT * FROM thucthan where id='$id'";
	$result=mysqli_query($conn,$sql1);
$data=mysqli_fetch_array($result);
mysqli_close($conn);



?>


<div style="clear:left;"></div>
<div class="NenChiTiet" style="margin-left: 20px; margin-top: 20px; ">
<fieldset>
	<legend> Thêm Thức Thần</legend>
	<form action="edit_tt.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Tên Thức Thần </td>
				<td><input type="text" name="txtname" value="<?php echo $data['name']?>"></td>

			</tr>
			<tr>
				<td> Hình ảnh cũ</td>
<td><img height="auto;" width="150px;" src="../img/<?php echo $data["anh"] ?> "></td>
</tr><tr>
				<td> Hình ảnh </td>
				
				<td><input type="file" name="image"></td>
			</tr>
				<td> Hình ảnh cũ</td>
<td><img height="auto;" width="150px;" src="../img/<?php echo $data["anhc"] ?> "></td>
			<tr>
				</tr><tr>
				<td> Hình ảnh nền </td>
				<td><input type="file" name="image1"></td>
			</tr>
			<tr>
				<td> Mô tả </td>
				<td><textarea cols="55" rows="5" name="txtmota"><?php echo $data["truyenthuyet"] ?></textarea></td>
			</tr>
			<tr>
				
				<td> Nội Tại : </td>
				<td><input type="text" name="txtnoitai" value="<?php echo $data["noitai_name"] ?>"></td>
			</tr>
			<tr>
								<td> Hình ảnh cũ</td>
<td><img height="auto;" width="150px;" src="../img/<?php echo $data["anhp"] ?> "></td>
</tr><tr>
				<td> Hình ảnh nội tại </td>
				<td><input type="file" name="image2"></td>
			</tr>		
			<tr>
				<td> Mô tả nội tại: </td>
				<td><textarea cols="55" rows="5" name="txtmt"><?php echo $data["noitai"] ?></textarea></td>
			</tr>
			
				

				<td> Kĩ năng 1 : </td>
				<td><input type="text" name="txtkn1" value="<?php echo $data["skill1_name"] ?>"></td>
			</tr>
			<tr>				<td> Hình ảnh cũ</td>
<td><img height="auto;" width="150px;" src="../img/<?php echo $data["anh1"] ?> "></td>

</tr><tr>
				<td> Hình ảnh kĩ năng </td>
				<td><input type="file" name="image3"></td>
			</tr>		
			<tr>
				<td> Mô tả : </td>
				<td><textarea cols="55" rows="5" name="txtmt1"><?php echo $data["skill1"] ?></textarea></td>
			</tr>



				<td> Kĩ năng 2 : </td>
				<td><input type="text" name="txtkn2" value="<?php echo $data["skill2_name"] ?>"></td>
			</tr>
			<tr>				<td> Hình ảnh cũ</td>
<td><img height="auto;" width="150px;" src="../img/<?php echo $data["anh2"] ?> "></td>
</tr><tr>
				<td> Hình ảnh kĩ năng </td>
				<td><input type="file" name="image4"></td>
			</tr>		
			<tr>
				<td> Mô tả : </td>
				<td><textarea cols="55" rows="5" name="txtmt2"><?php echo $data["skill2"] ?></textarea></td>
			</tr>


				<td> Kĩ năng 3 : </td>
				<td><input type="text" name="txtkn3" value="<?php echo $data["skill3_name"] ?>"></td>
			</tr>
			<tr>				<td> Hình ảnh cũ</td>
<td><img height="auto;" width="150px;" src="../img/<?php echo $data["anh3"] ?> "></td>
</tr><tr>
				<td> Hình ảnh kĩ năng </td>
				<td><input type="file" name="image5"></td>
			</tr>		
			<tr>
				<td> Mô tả : </td>
				<td><textarea cols="55" rows="5" name="txtmt3"><?php echo $data["skill3"] ?></textarea></td>
			</tr>


				<td> Kĩ năng 4 : </td>
				<td><input type="text" name="txtkn4" value="<?php echo $data["skill4_name"] ?>"></td>
			</tr>
			<tr>				<td> Hình ảnh cũ</td>
<td><img height="auto;" width="150px;" src="../img/<?php echo $data["anh4"] ?> "></td>
</tr><tr>
				<td> Hình ảnh kĩ năng </td>
				<td><input type="file" name="image6"></td>
			</tr>		
			<tr>
				<td> Mô tả : </td>
				<td><textarea cols="55" rows="5" name="txtmt4"><?php echo $data["skiil4"] ?></textarea></td>
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

<?php require('../Footer.php') ?>