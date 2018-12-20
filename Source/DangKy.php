
<?php require_once("Include/connection.php"); ?>


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
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password = $_POST["pass"];
		$name = $_POST["name"];
		$email = $_POST["email"];
		$pass2 =$_POST["pass2"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống

		if ($username == "" || $password == "" || $name == "" || $email == "") {
			echo "<h2 class='head2'>Bạn vui lòng điền đầy đủ thông tin. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";
		}else{

			$check = "SELECT username FROM users WHERE username='$username'";
			$query1 = mysqli_query($conn,$check);
			$num_rows1 = mysqli_num_rows($query1);
			if ($num_rows1 > 0){
				echo "<h2 class='head2'>Tài khoản đã tồn tại. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";
			}

			else{
				$check1 = "SELECT email FROM users WHERE email='$email'";
				$query2 = mysqli_query($conn,$check1);
				$num_rows2 = mysqli_num_rows($query2);
				if ($num_rows2 > 0){
					echo "<h2 class='head2'>Email đã tồn tại. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";
				}
	
				else{
				if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email))
				{
					echo "<h2 class='head2'>Email này không hợp lệ. Vui lòng nhập Email khác. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";
					exit();
				}
				else{

			if ($password != $pass2)
			{
				echo "<h2 class='head2'>Mật khẩu xác nhận không chính xác. Vui long nhập lại. </br><a href='javascript: history.go(-1)'>Trở lại</a></h2>";
			}


			else {
				

					$sql = "INSERT INTO users(username, password, fullname, email, createdate ) VALUES ( '$username', '$password', '$name', '$email', now())";
					// thực thi câu $sql với biến conn lấy từ file connection.php
					mysqli_query($conn,$sql);
					echo "<h2 class='head2'> Chúc mừng bạn đã đăng ký thành công </br><a href='TrangChu.php'>Trở lại</a></h2>";
                    include('mail/sendmail.php');
				

				}}}
			}}
		}
 
?>
	
<div id="login-box">
  <div class="left">
    <h1>Đăng Ký</h1>
    <form action="DangKy.php" method="post">
    <input type="text" name="username" placeholder="Username" id="username"/>
    <input type="text" name="email" placeholder="E-mail" id="email" />
    <input type="text" name="name" placeholder="Họ Tên" id="name"/>
    <input type="password" name="pass" placeholder="Password" id="pass"/>
    <input type="password" name="pass2" placeholder="Retype password" id="pass2" />
    
	<input type="submit" name="btn_submit" value="Đăng Ký"/>
	</form>
  </div>
  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>


</div>
<?php include("Footer.php") ?>