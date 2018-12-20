

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
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="mvc-vukhi.php">Trang Bị</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="mvc-vukhiC.php">Sát Thương</a><a class="dropdown-item" role="presentation" href="mvc-vukhiP.php">Phòng Thủ</a><a class="dropdown-item" role="presentation" href="mvc-vukhiD.php">Đa Dụng</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="DanhSachBaiPost.php">Bài Viết</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field" /></div>
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
