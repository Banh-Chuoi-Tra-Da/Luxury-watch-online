<?php
session_start();
require('danhmuc_data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Luxury Watches Online</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
    <script src="js/jquery-1.11.0.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"> -->
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!--start-menu-->
    <script src="js/simpleCart.min.js"> </script>
    <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/bl.css">
    <link rel="stylesheet" href="css/danhmuc.css">
    <script type="text/javascript" src="js/memenu.js"></script>
    <script src="js/binhluan.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
    <script>
    $(document).ready(function() {
        $(".memenu").memenu();
    });
    </script>
    <!--dropdown-->
    <script src="js/jquery.easydropdown.js"></script>
</head>


<body>
    <?php
    // Ket noi CSDL
    require('connect.php');
    // Ket noi CSDL
    //Tim kiem san pham
    $tim_kiem = '';
    if (isset($_GET['tim_kiem'])) {
        $tim_kiem = $_GET['tim_kiem'];
    }

    ?>
    <div class="top-header">
        <div class="container">
            <div class="top-header-main">
                <div class="col-md-6 top-header-left">
                    <div class="drop">
                        <div class="box">
                            <select tabindex="4" class="dropdown drop">
                                <option value="" class="label">Dollar :</option>
                                <option value="1">Dollar</option>
                                <option value="2">Euro</option>
                            </select>
                        </div>
                        <div class="box1">
                            <select tabindex="4" class="dropdown">
                                <option value="" class="label">English :</option>
                                <option value="1">English</option>
                                <option value="2">French</option>
                                <option value="3">German</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 top-header-left">
                    <!-- <div class="cart box_1">
                    <a href="checkout.html">
                        <div class="total">
                            <span class="simpleCart_total"></span>
                        </div>
                        <img src="images/cart-1.png" alt="" />
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                    <div class="clearfix"> </div>
                </div> -->
                    <div class="cart box_1">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span class="glyphicon glyphicon-user"></span>
                                    <?php
                                    
                                    if (isset($_SESSION["ten_dang_nhap"])) {
                                        echo "Xin chào " . $_SESSION['ten_dang_nhap'];
                                    } else {
                                        echo "Tài khoản";
                                    }
                                    // if (empty($_SESSION['ten_dang_nhap'])) {
                                    //     header('location:signin.php?error=Please log in');
                                    // }
                                    ?>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php
                                    if (isset($_SESSION["ten_dang_nhap"])) {
                                    ?>
                                        <li><a href="thong_tin_tai_khoan.php">Thông tin tài khoản</a></li>
                                        <li><a href="don_hang.php">Lịch sử đơn hàng</a></li>
                                        <li><a href="signout.php">Đăng Xuất</a></li>
                                        <!-- <li><a href="dang_xuat.php">Đăng xuất</a></li> -->
                                    <?php
                                    } else {
                                    ?>
                                        <li><a href="signin.php">Đăng nhập</a></li>
                                        <li><a href="register.php">Đăng ký</a></li>
                                        
                                    <?php
                                    }
                                    ?>
                                </ul>


                            </li>
                            <li>
                                <a href="gio_hang.php">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng
                                </a>
                            </li>
                        </ul>
                        <!-- <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p> -->
                        <div class="clearfix"> </div>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--top-header-->
    <!--start-logo-->
    <div class="logo">
        <a href="index.html">
            <h1>Luxury Watches</h1>
        </a>
    </div>
    <!--start-logo-->
    <!--bottom-header-->
    <div class="header-bottom">
        <div class="container">
            <div class="header">
                <div class="col-md-9 header-left">
                    <div class="top-nav">
                        <ul class="memenu skyblue">
                        <li class="active"><a href="index.php">Home</a></li>
                            <li class="grid"><a href="danhmuc.php?id_tuoi=<?=$ma_sp_theo_gt_full[0]?>">Danh mục sản
                                    phẩm</a>
                            </li>
                            <li class="grid"><a href="danhmuc.php?id_ncc=<?=$ma_ncc_full[0]?>">Hãng</a>

                            </li>
                            <!-- <li class="grid"><a href="#">
                                    loại</a>

                            </li> -->
                            <li class="grid"><a href="frequent_question.php">Blog</a>
                            </li>
                            <li class="grid"><a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-3 header-right">
                    <div class="search-bar">
                        <!-- <input type="text"  value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value=""> -->
                        <form action="">
                            <input type="search" name="tim_kiem" value="<?php echo $tim_kiem; ?>">
                            <input type="submit" value="<?php echo $tim_kiem; ?>">

                        </form>


                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--bottom-header-->
</body>

</html>
<!--top-header-->
