

<?php
session_start();?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onmyoji Arena Wiki</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/Font.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div><div class="header-dark">
    <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="TrangChu.php">
            <img src="assets/img/k.png" alt="" height="50px" width="50px">
        </a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Thông Báo</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="ThucThan.php">Thức Thần</a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Trang Bị</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Sát Thương</a><a class="dropdown-item" role="presentation" href="#">Phòng Thủ</a><a class="dropdown-item" role="presentation" href="#">Đa Dụng</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="DanhSachBaiPost.php">Bài Viết</a></li>
                </ul>
                         <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form>
                
                
                
                <?php 

                if(isset($_SESSION["username"])){
                    echo "Chào " .$_SESSION["username"];
                    echo"<a href='DangXuat.php'>  ( Đăng Xuất )</a>";
                }
                else
                {   echo "<span class='navbar-text'><a href='DangNhap.php'class='login'>Đăng Nhập</a></span>";
                    
                    echo "<a class='btn btn-light action-button' role='button' href='DangKy.php'>Đăng Ký</a>";
                }
                ?>
                
                
                
                </div>
                
        </div>
</div>

 

<?php 
//Gọi file connection.php ở bài trước
require_once("Include/connection.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["btn_submit"])) {
	// lấy thông tin người dùng
	$username = $_POST["username"];
	$password = $_POST["password"];
	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
	//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	$username = strip_tags($username);
	$username = addslashes($username);
	$password = strip_tags($password);
	$password = addslashes($password);
	if ($username == "" || $password =="") {
		echo "<h2 class='head2'> Tài khoản hoặc mật khẩu không được để trống. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";
	}else{
		$sql = "SELECT * FROM users where username='$username' and password='$password'";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo "<h2 class='head2'> Tên đăng nhập hoặc mật khẩu không đúng. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";
		}else{
			$data= mysqli_fetch_array($query); //Lấy ra kết quả truy vấn
			
			$_SESSION['captruycap']=$data["permision"];
			if($_SESSION['captruycap']==2){
				
                header('Location:Admin/admin.php');
                
				
				
			}
			else{

				$_SESSION["username"] = $data["username"];
				header('Location: TrangChu.php');
				
	    	}
			
                // Thực thi hành động sau khi lưu thông tin vào session
				// ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
			
			
		}
		}
	
}
?>

	
<div id="login-box">
  <div class="left">
    <h1>Đăng Nhập</h1>
    <form action="DangNhap.php" method="post">
    <input type="text" name="username" placeholder="Username" id="username"/>

    <input type="password" name="password" placeholder="Password" id="pass"/>
    
	<input type="submit" name="btn_submit" value="Đăng Nhập" />
	</form>
  </div>
  
  <div class="right">
    <span class="loginwith">Log in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>

</div>
<?php include('Footer.php');?>
