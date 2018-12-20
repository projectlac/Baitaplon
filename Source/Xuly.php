<?php

if($_FILES["userfile"]["error"]>0){
    echo "File chưa được chọn hoặc kích thước file quá 2MB"; // kích cỡ file
}
else{
    if($_FILES["userfile"]["type"]!= "image/jpeg" && $_FILES["userfile"]["type"]!= "image/png"){
    echo "Bạn chỉ được upload file .jpeg hoặc .png";
    }
    else{
    move_uploaded_file($_FILES["userfile"]["tmp_name"],"data/".$_FILES["userfile"]["name"]);
    echo " Upload Thành Công";
    }

}
?>
