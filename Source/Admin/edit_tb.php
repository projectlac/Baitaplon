<?php 



include('hd-admin.php');

$id=$_GET['id'];
include("include/connection.php");




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
$sql="UPDATE `vukhi` SET `name`='$tb',`mota`='$mt',`loai`='$loai',`gia`='$gia',`name_noitai1`='$nt1',`noitai1`='$mt1',`name_noitai2`='$nt2',`noitai2`='$mt2',`image`='$img' Where w_id=$id";

$result=mysqli_query($conn,$sql);
	echo "<h2 class='head2'> Bạn đã cập nhật trang bị thành công. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";
}
move_uploaded_file($_FILES["image"]["tmp_name"],"../img/w1/".$_FILES["image"]["name"]);

mysqli_close($conn);

}
//xử lý ảnh up


include("include/connection.php");
	$sql1="SELECT w_id, name, mota, loai, gia, name_noitai1, noitai1, name_noitai2, noitai2, image FROM vukhi WHERE w_id='$id'";
	$result=mysqli_query($conn,$sql1);
	$data=mysqli_fetch_array($result);


mysqli_close($conn);


?>


<div style="clear:left;"></div>
<div class="NenChiTiet" style="margin-left: 20px; margin-top: 20px; ">
<fieldset>
	<legend> Thêm Trang Bị</legend>
	<form action="edit_tb.php?id=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Tên trang bị: </td>
				<td><input type="text" name="txtname" value="<?php  echo $data["name"];?>"></td>

			</tr>
			<tr>
				<td> Hình ảnh cũ </td>
				
				<td><img src="../img/w1/<?php echo $data["image"] ?>"></td>
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
				<td><input type="text" size="10px" name="txtgia" value="<?php  echo $data["gia"];?>"></td>
			</tr>
			<tr>
			
				<td> Mô tả </td>
				<td><textarea cols="55" rows="5" name="txtmota" ><?php  echo $data["mota"];?></textarea></td>
			</tr>
			<tr>
				
				<td> Tên Nội Tại 1: </td>
				<td><input type="text" name="txtnoita1" value="<?php  echo $data["name_noitai1"];?>"></td>
			</tr>
		
			<tr>
				<td> Mô tả nội tại: </td>
				<td><textarea cols="55" rows="5" name="txtmt1" > <?php  echo $data["noitai1"];?></textarea></td>
			</tr>
			
			<tr>
				<td>Tên Nội Tại 2: </td>
				<td><input type="text" name="txtnoita2" value="<?php  echo $data["name_noitai2"];?>"></td>
			</tr>
						
			<tr>
				<td> Mô tả nội tại: </td>
				<td><textarea cols="55" rows="5" name="txtmt2"> <?php  echo $data["noitai2"];?></textarea></td>
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