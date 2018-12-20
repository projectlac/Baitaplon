<?php 
$id=$_GET['id'];

require("Include/connection.php");

$sql="DELETE  FROM cmt WHERE cmt_id=$id";
mysqli_query($conn,$sql);

mysqli_close($conn);
header('location:list_cmt.php');
exit();
?>