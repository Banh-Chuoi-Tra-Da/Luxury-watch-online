<?php
require('header.php');
// die();
require('chi_tiet_san_pham_data.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Luxury Watches A Ecommerce Category Flat Bootstarp Resposive Website Template | Single :: w3layouts</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
    <script src="js/jquery-1.11.0.min.js"></script>
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
    <script type="text/javascript" src="js/memenu.js"></script>
    <script>
    $(document).ready(function() {
        $(".memenu").memenu();
    });
    </script>
    <!--dropdown-->
    <script src="js/jquery.easydropdown.js"></script>
    <script type="text/javascript">
    $(function() {

        var menu_ul = $('.menu_drop > li > ul'),
            menu_a = $('.menu_drop > li > a');

        menu_ul.hide();

        menu_a.click(function(e) {
            e.preventDefault();
            if (!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true, true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true, true).slideUp('normal');
            }
        });

    });
    </script>
</head>

<body>
    <div class="single contact">
        <div class="container">
            <div class="single-main">
                <div class="col-md-9 single-main-left">
                    <div class="sngl-top">
                        <div class="col-md-5 single-top-left">
                            <div class="flexslider">
                                <ul class="slides">

                                    <li data-thumb="images/<?= $anh[$sp_hien_thi] ?>">
                                        <div class="thumb-image"> <img src="images/<?= $anh[$sp_hien_thi] ?>"
                                                data-imagezoom="true" class="img-responsive" alt="" /> </div>
                                    </li>
                                    <li data-thumb="images/<?= $anh1[$sp_hien_thi] ?>">
                                        <div class="thumb-image"> <img src="images/<?= $anh1[$sp_hien_thi] ?> ?>"
                                                data-imagezoom="true" class="img-responsive" alt="" /> </div>
                                    </li>
                                    <li data-thumb="images/<?= $anh2[$sp_hien_thi] ?>">
                                        <div class="thumb-image"> <img src="images/<?= $anh2[$sp_hien_thi] ?>"
                                                data-imagezoom="true" class="img-responsive" alt="" /> </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- FlexSlider -->
                            <script src="js/imagezoom.js"></script>
                            <script defer src="js/jquery.flexslider.js"></script>
                            <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

                            <script>
                            // Can also be used with $(document).ready()
                            $(window).load(function() {
                                $('.flexslider').flexslider({
                                    animation: "slide",
                                    controlNav: "thumbnails"
                                });
                            });
                            </script>
                        </div>
                        <div class="col-md-7 single-top-right">
                            <div class="single-para simpleCart_shelfItem">
                                <h2>
                                    <?php echo $tensanpham[$sp_hien_thi]; ?>
                                </h2>
                                <div class="star-on">
                                    <ul class="star-footer">
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#"> 1 đánh giá </a>

                                    </div>
                                    <div class="clearfix"> </div>
                                </div>

                                <h5 class="item_price"><?= $dongia[$sp_hien_thi] ?>đ</h5>
                                <p><?= $mota[$sp_hien_thi] ?></p>

                                <ul class="tag-men">
                                    <li><span>TAG</span>
                                        <span class="women1"
                                            style="padding-left: 8px;">:<?= $ten_sp_theo_gt[$sp_hien_thi] ?></span>
                                    </li>
                                    <li><span>Hãng</span>
                                        <span class="women1">:<?= $tennhacungcap[$sp_hien_thi] ?></span>
                                    </li>
                                </ul>
                                <div>
                                    <form action="them_gio_hang.php" method="get">
                                        <!-- <label style="font-size: 15px;">số lượng:</label>
                                        <button type="button" style="font-size: 20px;" class="btn btn-secondary">+</button>
                                        <input type="text" name="soluong" value="<?= $soluong_them ?>" readonly style="width: 30px; display: inline-block;  font-size: 25px; padding-left: 5px; border: none;">
                                        <input type="hidden" name="id" value="<?= $masanpham[$sp_hien_thi] ?>">
                                        <button style="font-size: 20px;" type="button" class="btn btn-secondary" style="border: none;">-</button>
                                        <br> -->
                                        <!-- <button id="themvaogh" type="submit" style="font-size: 20px;background-color: black;color: white;">thêm
                                            vào
                                            giỏ
                                            hàng</button> -->
                                        <button data-id="<?= $masanpham[$sp_hien_thi] ?>"
                                            class="btn-add-to-cart btn-primary">Thêm giỏ hàng</button>

                                        <input type="hidden" name="id" value="<?= $masanpham[$sp_hien_thi] ?>">

                                    </form>
                                </div>


                            </div>
                        </div>
                        <div class="clearfix">

                        </div>
                    </div>

                    <div class="latestproducts">
                        <div class="product-one">
                            <h2>sản phẩm cùng loại</h2>
                            <?php
                            $so_sp_tt = 0;
                            for ($i = 0; $i < count($masanpham); $i++) {
                                if ($manhacungcap[$i] == $manhacungcap[$i]) {
                                    $so_sp_tt++;
                                }
                            }
                            if ($so_sp_tt >= 3) {
                                $col = 4;
                            } else {
                                $col = 6;
                            }
                            $ban_ghi = 0;
                            for ($sp_tt = 0; $sp_tt < count($masanpham); $sp_tt++) {
                                if ($masanpham[$sp_tt] == $masanpham[$sp_hien_thi]) {
                                    continue;
                                }

                                if ($manhacungcap[$sp_tt] == $manhacungcap[$sp_hien_thi]) {
                                    $ban_ghi++;
                                    echo "
                                        <div class='col-md-$col product-left p-left'>
                                             <div class='product-main simpleCart_shelfItem'>
                                                      <a href='chi_tiet_san_pham.php?id=$masanpham[$sp_tt]' class='mask'><img src='images/$anh[$sp_tt]' height='200px' alt='' /></a>
                                                    <div class='product-bottom'>
                                                        <h3>$tensanpham[$sp_tt]</h3>
                                                         <p>Explore Now</p>
                                                        <h4><a class='item_add' href='chi_tiet_san_pham.php?id=$masanpham[$sp_tt]'><i></i></a> <span class=' item_price'>$dongia[$sp_tt]</span></h4>
                                                    </div>
                                           </div>
                                        </div>
                                                ";
                                }
                                if ($ban_ghi == 3) {
                                    break;
                                }
                            }

                            ?>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 single-right">
                    <div class="w_sidebar">
                        <section class="sky-form">
                            <h4>Lứa tuổi</h4>

                            <div class="row1 scroll-pane">
                                <?php
                                for ($sp_danh_cho = 0; $sp_danh_cho < count($ma_sp_theo_gt_full); $sp_danh_cho++) {
                                    if ($ma_sp_theo_gt_full[$sp_danh_cho] == $ma_sp_theo_gt[$sp_hien_thi]) {
                                        $checked = 'checked';
                                        $disabled = '';
                                    } else {
                                        $checked = '';
                                        $disabled = 'disabled';
                                    }
                                    echo " <div class='col col-4'>
                                    <label class='checkbox'><input type='checkbox' $disabled $checked name='checkbox'
                                            ><i></i>$ten_sp_theo_gt_full[$sp_danh_cho]</label>'
                                </div>";
                                }

                                ?>
                            </div>
                        </section>
                        <section class="sky-form">
                            <h4>HÃNG</h4>
                            <div class="row1 row2 scroll-pane">
                                <div class="col col-4">
                                    <?php
                                    for ($ncc = 0; $ncc < count($ma_ncc_full); $ncc++) {
                                        if ($ma_ncc_full[$ncc] == $manhacungcap[$sp_hien_thi]) {
                                            $checked_1 = 'checked';
                                            $disable_1 = '';
                                        } else {
                                            $checked_1 = '';
                                            $disable_1 = 'disabled';
                                        }
                                        echo " <label class='checkbox'><input type='checkbox'  $disable_1 $checked_1  name='checkbox'
                                    ><i></i>$ten_ncc_full[$ncc]</label>";
                                    }
                                    ?>
                                </div>

                            </div>
                        </section>

                        <section class="sky-form">
                            <h4>Loại Đồng Hồ</h4>
                            <div class="row1 row2 scroll-pane">
                                <div class="col col-4">
                                    <?php
                                    for ($lh = 0; $lh < count($ma_lh_full); $lh++) {
                                        if ($ma_lh_full[$lh] == $maloaisanpham[$sp_hien_thi]) {
                                            $checked_2 = 'checked';
                                            $disabled_2 = '';
                                        } else {
                                            $checked_2 = '';
                                            $disabled_2 = 'disabled';
                                        }
                                        echo " <label class='checkbox'><input type='checkbox'  $disabled_2 $checked_2  name='checkbox'
                                    ><i></i>$ten_lh_full[$lh]</label>";
                                    }

                                    ?>

                                </div>

                            </div>
                        </section>
                    </div>
                </div>
                <div class="clearfix">

                </div>
            </div>

        </div>
    </div>
    <div class="container" id="binhluan">
        <h2 style="font-weight: bold;">bình luận(<?= $so_bl ?>)</h2>
        <?php
        if (isset($_SESSION['login'])) {
            if ( isset($cho_binh_luan)&& $cho_binh_luan==true) {
                $display = 'block';
            } else {
                $display = 'none';
            }
        } else {
            $display = 'none';
            echo " <a href='signin.php'>đăng nhập để bình luận</a> ";
        }
        // if(isset($_SESSION['login'])&&$cho_binh_luan==true){
        //     $display = 'block';
        // }
        // else{
        //     $display = 'none';
        // }

        ?>
        <form action="xu_ly_cmt.php" method="get" id="sua_binh_luan">
            <label for="comment">sửa bình luận:</label>
            <textarea class="form-control" rows="3" id="text_comment_sua" maxlength="200" required="required"
                name="noi_dung_bl_sua"><?= $data_bl_sua['noi_dung_binh_luan'] ?></textarea>
            <input type="hidden" name='id_sp_bl_sua' value="<?= $sp_chi_tiet ?>">
            <button class="btn btn-success">sửa bình luận</button>
        </form>


        <form action="xu_ly_cmt.php" id="form_cmt" method="get" style="display:<?= $display ?>;">
            <label for="comment">để lại bình luận của bạn:</label>
            <textarea class="form-control" rows="3" id="text_comment" maxlength="200" required="required"
                name="noi_dung_bl_them"></textarea>
            <input type="hidden" name='id_sp_bl_them' value="<?= $sp_chi_tiet ?>">
            <button class="btn btn-success">bình luận</button>
        </form>
        <?php
        if ($so_bl > 0) {
            for ($cmt = 0; $cmt < count($id_binh_luan); $cmt++) {
                if (isset($_SESSION['login']) && $email_bl[$cmt] == $_SESSION['login']['email']) {
                    $display_1 = 'inline';
                } else {
                    $display_1 = 'none';
                } //&& $tennguoidung[$cmt] == $_SESSION['login']['tennguoidung'])
        ?>
        <div class="flex">
            <div id="thong_tin_ng_dung">
                <img id="avatar" src="images/avt.jpg" height="55" width="55">
                <p id="tennguoidung"><?= $email_bl[$cmt] ?></p>
            </div>
            <p id="noidung"><?= $noi_dung_binh_luan[$cmt] ?>
                <?php if ($email_bl[$cmt] == isset($_SESSION['login']['email'])) {; ?>

                <button id="sua_xoa" style="display:<?= $display_1 ?>;">...</button>
            <ul id="ul_sua_xoa" style="display: none;">
                <li id="click_sua_binh_luan" class="btn btn-link"><span>Sửa</span></li>

                <?php echo " <li><a href='xu_ly_cmt.php?id_sp_xoa_bl=$id_binh_luan[$cmt]&&id_sp=$sp_chi_tiet'>xóa</a></li> " ?>
                <?php } ?>
            </ul>
            </p>
        </div>
        <?php }
        } else {
            echo "<h3>chưa có bình luận nào</h3>";
        } ?>


    </div>
    <script src="js/binhluan.js"></script>
    <!-- Dùng Ajax xử lý bất đồng bộ -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".btn-add-to-cart").click(function() {
            // alert("Nút đã bấm");
            let id = $(this).data('id');
            $.ajax({
                type: "GET",
                url: "them_gio_hang.php",
                data: {
                    id
                },
                // dataType: "dataType",
                success: function(response) {
                    if (response == 1) {
                        // alert("Thêm giỏ hàng thành công");
                        // header('location:index.php');

                        window.alert('Thêm giỏ hàng thành công');
                        window.location.href = 'index.php';



                    } else {
                        alert(response);
                    }

                }
            });


            // alert("bn đã bấm id: "+id);



        });
    });
    </script>
</body>

</html>
<?php require('footer.php') ?>