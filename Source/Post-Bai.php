<?php
	session_start(); 
	
 ?>
<?php require_once("Include/connection.php"); ?>
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

<!--header>
<---->
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
				<li class="nav-item" role="presentation"><a class="nav-link" href="Post-Bai.php">Bài Viết</a></li>
			</ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form>
                
			
			

			
			
			
			</div>
			
	</div>
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-727643">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-727643" class="active">
					</li>
					<li data-slide-to="1" data-target="#carousel-727643">
					</li>
					<li data-slide-to="2" data-target="#carousel-727643">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" alt="Carousel Bootstrap First" src="assets/img/logo.png">
						
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Second" src="assets/img/nen7.png" >

					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Third" src="assets/img/nen6.png">

					</div>
				</div> <a class="carousel-control-prev" href="#carousel-727643" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-727643" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
		</div>
	</div>
</div></div>






<?php
if ($_SESSION['captruycap']==0)
{
	header("Location:TrangChu.php");

}

else {

?>

<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$title = $_POST["title"];
		$content = $_POST["content"];
		$is_public = 0;
		if (isset($_POST["is_public"])) {
			$is_public = $_POST["is_public"];
		}
		
		$user_id = ($_SESSION['user_id']);
 
		$sql = "INSERT INTO posts(title, content, user_id, is_public, createdate, updatedate ) VALUES ( '$title', '$content', '$user_id', '$is_public', now(), now())";
		// thực thi câu $sql với biến conn lấy từ file connection.php
		mysqli_query($conn,$sql);
		echo "Bài viết đã thêm thành công";
	}
 
?>

        <div class="NenThemBaiViet">
	<form action="Post-Bai.php" method="post">
		<table>
			<tr>
			<h2 class="head">
<p style="text-align:center">Thêm bài viết</p>

        </h2>
			</tr>	
			<tr>
				<td nowrap="nowrap">Tiêu đề bài viết :</td>
				<td><input type="text" id="title" name="title"></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Nội dung :</td>
				<td><textarea name="content" id="content" rows="10" cols="150"></textarea></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Public bài viết ? :</td>
				<td><input type="checkbox" id="is_public" name="is_public" value="1"> public</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Thêm bài viết"></td>
			</tr>
 
		</table>
		
	</form>


</div>

<?php

};
include('Footer.php');

?>