<?php
$fname=$_GET["filename"];
//mở file
$file = fopen("filedown/".$fname,"rb");
//Báo cáo dữ liệu là nhị phân
header("Content-Type:application/octet-stream");

header("content-Disposition: attachment;filename=".$fname); // nếu ko có sẽ down file xuly.php
//read và hiển thị
fpassthru($file);
fclose($file);
?>