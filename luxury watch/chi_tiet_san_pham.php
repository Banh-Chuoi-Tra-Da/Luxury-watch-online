<!DOCTYPE html>
<html lang="en">
<?php require('header.php');

require('chi_tiet_san_pham_data.php');


?>


<body>
    <div class="single contact">
        <div class="container">
            <div class="single-main">
                <div class="col-md-9 single-main-left">
                    <div class="sngl-top">
                        <div class="col-md-5 single-top-left">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li data-thumb="<?= $anh[$sp_hien_thi] ?>">
                                        <div class="thumb-image"> <img src="<?= $anh[$sp_hien_thi] ?>"
                                                data-imagezoom="true" class="img-responsive" alt="" /> </div>
                                    </li>
                                    <li data-thumb="<?= $anh1[$sp_hien_thi] ?>">
                                        <div class="thumb-image"> <img src="<?= $anh1[$sp_hien_thi] ?>"
                                                data-imagezoom="true" class="img-responsive" alt="" /> </div>
                                    </li>
                                    <li data-thumb="<?= $anh2[$sp_hien_thi] ?>">
                                        <div class="thumb-image"> <img src="<?= $anh2[$sp_hien_thi] ?>"
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
                                <div id="soluong">
                                    <form action="xu_ly_them_gh.php" method="get">
                                        <label style="font-size: 15px;">số lượng:</label>
                                        <button type="button" style="font-size: 20px;"
                                            class="btn btn-secondary">+</button>
                                        <input type="text" name="soluong" value="<?= $soluong_them ?>" readonly
                                            style="width: 30px; display: inline-block;  font-size: 25px; padding-left: 5px; border: none;">
                                        <input type="hidden" name="id" value="<?=$masanpham[$sp_hien_thi]?>">
                                        <button style="font-size: 20px;" type="button" class="btn btn-secondary"
                                            style="border: none;">-</button>
                                        <br>
                                        <button id="themvaogh" type="submit"
                                            style="font-size: 20px;background-color: black;color: white;">thêm
                                            vào
                                            giỏ
                                            hàng</button>

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
                            for ($i = 0; $i < count($masanpham);$i++){
                                if($manhacungcap[$i]==$manhacungcap[$i]){
                                    $so_sp_tt++;
                                }

                            }
                            if($so_sp_tt>=3){
                                $col = 4;
                            }
                            else{
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
                                                      <a href='chi_tiet_san_pham.php?id=$masanpham[$sp_tt]' class='mask'><img src='$anh[$sp_tt]' height='200px' alt='' /></a>
                                                    <div class='product-bottom'>
                                                        <h3>$tensanpham[$sp_tt]</h3>
                                                         <p>Explore Now</p>
                                                        <h4><a class='item_add' href='chi_tiet_san_pham.php?id=$masanpham[$sp_tt]'><i></i></a> <span class=' item_price'>$dongia[$sp_tt]</span></h4>
                                                    </div>
                                           </div>
                                        </div>
                                                ";
                                    
                                }
                                if($ban_ghi==3){
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
                                        $disable = '';
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
        <h2 style="font-weight: bold;">bình luận(<?=$so_bl?>)</h2>
        <?php 
        if($da_binh_luan==true){
            $display = 'none';
        }
        else{
            $display = 'block';
        }
        ?>
        <form action="xu_ly_cmt.php" id="form_cmt" method="get" style="display:<?=$display?>;">
            <label for="comment">để lại bình luận của bạn:</label>
            <textarea class="form-control" rows="3" id="text_comment" maxlength="200" required="required"
                name="noi_dung_bl_them"></textarea>
            <input type="hidden" name='id_sp_bl_them' value="<?=$sp_chi_tiet?>">
            <button class="btn btn-success">bình luận</button>
        </form>
        <?php 
        if($so_bl>0){
            for($cmt=0;$cmt<count($id_binh_luan);$cmt++){
                ?>
        <div class="flex">
            <div id="thong_tin_ng_dung">
                <img id="avatar" src="../luxury watch/images/avt.jpg" height="55" width="55">
                <p id="tennguoidung"><?=$tennguoidung[$cmt]?></p>
            </div>
            <p id="noidung"><?=$noi_dung_binh_luan[$cmt]?>
                <button id="sua_xoa" class="btn btn-link">...
                    <ul>
                        <li><a href="">sửa</a></li>
                        <?php echo" <li><a href='xu_ly_cmt.php?id_sp_xoa_bl=$id_binh_luan[$cmt]&&id_sp=$sp_chi_tiet'>xóa</a></li> "?>
                    </ul>
                </button>
            </p>
        </div>
        <?php }
            } else {
            echo "<h3>chưa có bình luận nào</h3>";
        }?>


    </div>
    <script src="../luxury watch/js/bl.js"></script>
</body>

</html>
<?php require('footer.php') ?>