<?php
  session_start();

?>

<?php include("Header.php")?>

<link rel="stylesheet" href="../css/css1.css">

<?php  

if (isset($_POST["ok"])){
    $name=$_POST["txtname"];
    $mess=$_POST["txtmess"];
    if ($name == "" || $mess =="") {
        echo "<h2 class='head2'>Bạn vui lòng điền đầy đủ thông tin. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";
    }else{

require("Include/connection.php");

        $sql="INSERT INTO cmt value ('','$name','$mess',now(),'N','$id')";
        $query = mysqli_query($conn,$sql);

        mysqli_close($conn);

        echo"<script type='text/javascript'>";
            echo"alert('Bình luận của bạn đã được gửi thành công')";
                echo"</script>";
    }    
}

?>




<div class="row">
    <div class="col-md-8"> 
        <div class="NenChiTiet">
            <h2 class="head"><?php echo $thucthan->name ?></h2>
            <img src="img/<?php echo $thucthan->anhc?>" alt="" srcset="" class="img1">
</br>
            <p><?php echo $thucthan->truyenthuyet?></p>





<table border="1px">
    <tr>
        <td><img src="img/<?php echo $thucthan->anhp?>" alt="" srcset="" width = "75px" height = "75px" style="float:left"  /></td>
        <td>
            <h4>
           <?php echo $thucthan->noitai_name ?></h4>
            <p><?php echo $thucthan->noitai ?></p></td>
 
    </tr>
    <tr>
        <td><img src="img/<?php echo $thucthan->anh1?>" alt="" srcset="" width = "75px" height = "75px" style="float:left"  /></td>
        <td>
            <h4>
           <?php echo $thucthan->skill1_name ?></h4>
            <p><?php echo $thucthan->skill1 ?></p></td>
 
    </tr>    <tr>
        <td><img src="img/<?php echo $thucthan->anh2?>" alt="" srcset="" width = "75px" height = "75px" style="float:left"  /></td>
        <td>
            <h4>
           <?php echo $thucthan->skill2_name ?></h4>
            <p><?php echo $thucthan->skill2 ?></p></td>
 
    </tr>    <tr>
        <td><img src="img/<?php echo $thucthan->anh3?>" alt="" srcset="" width = "75px" height = "75px" style="float:left"  /></td>
        <td>
            <h4>
           <?php echo $thucthan->skill3_name ?></h4>
            <p><?php echo $thucthan->skill3 ?></p></td>
 
    </tr>    <tr>
        <td><img src="img/<?php echo $thucthan->anh4?>" alt="" srcset="" width = "75px" height = "75px" style="float:left"  /></td>
        <td>
            <h4>
           <?php echo $thucthan->skill4_name ?></h4>
            <p><?php echo $thucthan->skiil4 ?></p></td>
 
    </tr>

</table>

</br>
</br>

    <fieldset>
    <legend>Bình luận</legend>
<form action="mvc-chitietthucthan.php?id=<?php echo $id; ?>" method="POST">
        <table>
            <tr>
            <td>Name</td>
            <td><input type="text" size="25" name="txtname"></td>

            </tr>
            <tr>

            <td>Lời Bình</td>
            <td><textarea cols="60",rows="5" name="txtmess"></textarea></td>
            </tr>

            <tr>
            <td></td>
            <td><input type="submit" value="Thêm Bình Luận" name="ok" style="width:150px;"></td>
            </tr>

        </table>
</form>
    </fieldset>

    </br>
    </br>


    <?php include('binhluan.php');
?>

</div>


</div>
<div class="col-md-4">	<!--Ben Phai-->
        <div class="NenPhai">
        <?php include("post.php");?>
</div>
</div>
</div>
<?php include("Footer.php")?>