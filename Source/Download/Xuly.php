<?php
$fname=$_GET["filename"];
// mở file
$file = fopen("filedown/".$fname,"rb");
//Báo dữ liệu là nhị phân
header("Content-Type:application/octet-stream");

header("content-Disposition: attachment;filename=".$fname); // nếu ko có sẽ down file xuly.php
//đọc và hiển thị
fpassthru($file);
fclose($file);
?>