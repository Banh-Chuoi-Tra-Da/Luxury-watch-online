<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                                    
                                    if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
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
                                    if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
                                    ?>
                                        <li><a href="#">Thông tin tài khoản</a></li>
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
                            <li class="active"><a href="index.html">Home</a></li>
                            <li class="grid"><a href="#">Men</a>
                                <div class="mepanel">
                                    <div class="row">
                                        <div class="col1 me-one">
                                            <h4>Shop</h4>
                                            <ul>
                                                <li><a href="products.html">New Arrivals</a></li>
                                                <li><a href="products.html">Blazers</a></li>
                                                <li><a href="products.html">Swem Wear</a></li>
                                                <li><a href="products.html">Accessories</a></li>
                                                <li><a href="products.html">Handbags</a></li>
                                                <li><a href="products.html">T-Shirts</a></li>
                                                <li><a href="products.html">Watches</a></li>
                                                <li><a href="products.html">My Shopping Bag</a></li>
                                            </ul>
                                        </div>
                                        <div class="col1 me-one">
                                            <h4>Style Zone</h4>
                                            <ul>
                                                <li><a href="products.html">Shoes</a></li>
                                                <li><a href="products.html">Watches</a></li>
                                                <li><a href="products.html">Brands</a></li>
                                                <li><a href="products.html">Coats</a></li>
                                                <li><a href="products.html">Accessories</a></li>
                                                <li><a href="products.html">Trousers</a></li>
                                            </ul>
                                        </div>
                                        <div class="col1 me-one">
                                            <h4>Popular Brands</h4>
                                            <ul>
                                                <li><a href="products.html">499 Store</a></li>
                                                <li><a href="products.html">Fastrack</a></li>
                                                <li><a href="products.html">Casio</a></li>
                                                <li><a href="products.html">Fossil</a></li>
                                                <li><a href="products.html">Maxima</a></li>
                                                <li><a href="products.html">Timex</a></li>
                                                <li><a href="products.html">TomTom</a></li>
                                                <li><a href="products.html">Titan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="grid"><a href="#">Women</a>
                                <div class="mepanel">
                                    <div class="row">
                                        <div class="col1 me-one">
                                            <h4>Shop</h4>
                                            <ul>
                                                <li><a href="products.html">New Arrivals</a></li>
                                                <li><a href="products.html">Blazers</a></li>
                                                <li><a href="products.html">Swem Wear</a></li>
                                                <li><a href="products.html">Accessories</a></li>
                                                <li><a href="products.html">Handbags</a></li>
                                                <li><a href="products.html">T-Shirts</a></li>
                                                <li><a href="products.html">Watches</a></li>
                                                <li><a href="products.html">My Shopping Bag</a></li>
                                            </ul>
                                        </div>
                                        <div class="col1 me-one">
                                            <h4>Style Zone</h4>
                                            <ul>
                                                <li><a href="products.html">Shoes</a></li>
                                                <li><a href="products.html">Watches</a></li>
                                                <li><a href="products.html">Brands</a></li>
                                                <li><a href="products.html">Coats</a></li>
                                                <li><a href="products.html">Accessories</a></li>
                                                <li><a href="products.html">Trousers</a></li>
                                            </ul>
                                        </div>
                                        <div class="col1 me-one">
                                            <h4>Popular Brands</h4>
                                            <ul>
                                                <li><a href="products.html">499 Store</a></li>
                                                <li><a href="products.html">Fastrack</a></li>
                                                <li><a href="products.html">Casio</a></li>
                                                <li><a href="products.html">Fossil</a></li>
                                                <li><a href="products.html">Maxima</a></li>
                                                <li><a href="products.html">Timex</a></li>
                                                <li><a href="products.html">TomTom</a></li>
                                                <li><a href="products.html">Titan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="grid"><a href="#">Kids</a>
                                <div class="mepanel">
                                    <div class="row">
                                        <div class="col1 me-one">
                                            <h4>Shop</h4>
                                            <ul>
                                                <li><a href="products.html">New Arrivals</a></li>
                                                <li><a href="products.html">Blazers</a></li>
                                                <li><a href="products.html">Swem Wear</a></li>
                                                <li><a href="products.html">Accessories</a></li>
                                                <li><a href="products.html">Handbags</a></li>
                                                <li><a href="products.html">T-Shirts</a></li>
                                                <li><a href="products.html">Watches</a></li>
                                                <li><a href="products.html">My Shopping Bag</a></li>
                                            </ul>
                                        </div>
                                        <div class="col1 me-one">
                                            <h4>Style Zone</h4>
                                            <ul>
                                                <li><a href="products.html">Shoes</a></li>
                                                <li><a href="products.html">Watches</a></li>
                                                <li><a href="products.html">Brands</a></li>
                                                <li><a href="products.html">Coats</a></li>
                                                <li><a href="products.html">Accessories</a></li>
                                                <li><a href="products.html">Trousers</a></li>
                                            </ul>
                                        </div>
                                        <div class="col1 me-one">
                                            <h4>Popular Brands</h4>
                                            <ul>
                                                <li><a href="products.html">499 Store</a></li>
                                                <li><a href="products.html">Fastrack</a></li>
                                                <li><a href="products.html">Casio</a></li>
                                                <li><a href="products.html">Fossil</a></li>
                                                <li><a href="products.html">Maxima</a></li>
                                                <li><a href="products.html">Timex</a></li>
                                                <li><a href="products.html">TomTom</a></li>
                                                <li><a href="products.html">Titan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="grid"><a href="typo.html">Blog</a>
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