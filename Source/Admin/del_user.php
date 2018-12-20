<?php 
$id=$_GET['id'];

require("Include/connection.php");

$sql="DELETE  FROM users WHERE id=$id";
mysqli_query($conn,$sql);

mysqli_close($conn);
header('location:list_user.php');
exit();
?>