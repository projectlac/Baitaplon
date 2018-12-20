<?php

include("controllers/c_chitietpost.php"); ?>

<?php
$c_baipost= new C_chitietpost();
$c_baipost->hienthi_chitiet_baipost();
?>