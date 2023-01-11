<?php
ob_start();
session_start();

if (!isset($_SESSION['login'])) {
    echo "<script type='text/javascript'>
            window.alert('Bạn phải đăng nhập tài khoản');
            window.location.href='login.php';
        </script>";
}; ?>


<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Luxury Watches Online</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/vendor/fontawesome.css">
    <link rel="stylesheet" href="assets/css/vendor/plaza-icon.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Plugin CSS Files -->
    <link rel="stylesheet" href="assets/css/plugin/slick.css">
    <link rel="stylesheet" href="assets/css/plugin/material-scrolltop.css">
    <link rel="stylesheet" href="assets/css/plugin/price_range_style.css">
    <link rel="stylesheet" href="assets/css/plugin/in-number.css">
    <link rel="stylesheet" href="assets/css/plugin/venobox.min.css">
    <link rel="stylesheet" href="assets/css/plugin/jquery.lineProgressbar.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css"/>
    <link rel="stylesheet" href="assets/css/plugin/plugins.min.css"/>
    <link rel="stylesheet" href="assets/css/main.min.css"> -->

    <!-- Main Style CSS File -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Thư viện này để hiển thị đc modal tương úng với masanpham -->
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="index.php">Trang chủ</a></li>
                        <li class="page-breadcrumb__nav active">Tài khoản</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- :::::::::: Start My Account Section :::::::::: -->
                    <div class="my-account-area">
                        <div class="row">
                            <div class="col-xl-3 col-md-4">
                                <div class="my-account-menu">
                                    <ul class="nav account-menu-list flex-column nav-pills" id="pills-tab" role="tablist">

                                        <li>
                                            <a id="pills-account-tab" class="link--icon-left" data-bs-toggle="pill" href="#pills-account" role="tab" aria-controls="pills-account" aria-selected="false"><i class="fas fa-user"></i>
                                                Thông tin tài khoản </a>
                                        </li>
                                        <li>
                                            <a class="link--icon-left" href="signout.php"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-8">
                                <div class="tab-content my-account-tab" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel" aria-labelledby="pills-dashboard-tab">
                                        <div class="my-account-dashboard account-wrapper">

                                            <?php
                                            include("connect.php");

                                            $id = $_SESSION['id'];
                                            $sql = "SELECT * FROM tbl_nguoi_dung WHERE id=" . $id;
                                            // echo $sql;die();

                                            $khachhang = mysqli_query($con, $sql);
                                            $row = mysqli_fetch_array($khachhang);
                                            ?>

                                            <h4 class="account-title">Thông tin tài khoản </h4>
                                            <form action="alter-info.php" method="post">
                                                <div class="account-details">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-box__single-group">
                                                                <span>Họ tên</span>
                                                                <input type="text" placeholder="Họ tên" name="Hoten" value="<?php echo $row["names"]; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-box__single-group">
                                                                <span>Email</span>
                                                                <input type="text" placeholder="Email" name="Email" value="<?php echo $row["email"]; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-box__single-group">
                                                                <span>Địa chỉ</span>
                                                                <input type="text" placeholder="Địa chỉ" name="Diachi" value="<?php echo $row["address"]; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-box__single-group">
                                                                <span>Số điện thoại</span>
                                                                <input type="text" placeholder="Số điện thoại" name="Sdt" value="<?php echo $row["phone_number"]; ?>">
                                                            </div>
                                                        </div>

                                            </form>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- :::::::::: End My Account Section :::::::::: -->
        </div>

    </main> <!-- ::::::  End  Main Container Section  ::::::  -->




</body>

</html>