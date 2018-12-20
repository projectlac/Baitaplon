
<?php
session_start();
?>


<?php
if ($_SESSION['captruycap']==2)
{
     include('hd-admin.php');
     include('../Footer.php');
exit();
}

else {
    header("Location:../TrangChu.php");
}
?>