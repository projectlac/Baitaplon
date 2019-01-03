<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Admin</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/Font.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
         <link rel="stylesheet" href="style.css">
</head>

<body>
    <div><div class="header-dark">
    <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="../TrangChu.php">
            <img src="assets/img/k.png" alt="" height="50px" width="50px">
        </a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Thông Báo</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../ThucThan.php">Thức Thần</a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="../mvc-vukhi.php">Trang Bị</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../mvc-vukhiC.php">Sát Thương</a><a class="dropdown-item" role="presentation" href="../mvc-vukhiP.php">Phòng Thủ</a><a class="dropdown-item" role="presentation" href="../mvc-vukhiD.php">Đa Dụng</a></div>
                    </li>
                     <li class="nav-item" role="presentation"><a class="nav-link" href="DanhSachBaiPost.php">Bài Viết</a></li>
                </ul>
                                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form>
                
                
            </div>
            </div>
            </div>
                

     <script language="javascript">
     function xacnhan(){
         if (confirm("Bạn muốn xóa không?")){
             return true;
         }
         else{
             return false;
         }
     }
     </script>
</head>
<body>
<div class="Ad">
    <div id ="top"> <h3> <p>Chào Admin</p> <a href="../DangXuat.php">Log out </a></h3></div>
    <div id="menu"> 
    <ul>
    <li><a href="list_user.php"> Thành Viên</a></li>
    <li><a href="list_tc.php"> Trang Chủ</a></li>
    <li><a href="list_tt.php">Thức Thần</a></li>
    <li><a href="list_tb.php">Trang Bị</a></li>
    <li><a href="list_post.php"> Bài Viết</a></li>
    <li><a href="list_cmt.php"> Bình Luận</a></li>
    </ul></div>

