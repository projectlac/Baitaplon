<?php 
$id=$_GET['id'];

require("Include/connection.php");

$sql="DELETE  FROM posts WHERE id=$id";
mysqli_query($conn,$sql);

mysqli_close($conn);
header('location:list_post.php');
exit();
?>