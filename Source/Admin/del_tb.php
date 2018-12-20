<?php 
$id=$_GET['id'];

require("Include/connection.php");

$sql="DELETE  FROM vukhi WHERE w_id=$id";
mysqli_query($conn,$sql);

mysqli_close($conn);
header('location:list_tb.php');
exit();
?>