<?php 
$id=$_GET['id'];

require("Include/connection.php");

$sql="DELETE  FROM thucthan WHERE id=$id";
mysqli_query($conn,$sql);

mysqli_close($conn);
header('location:list_user.php');
exit();
?>