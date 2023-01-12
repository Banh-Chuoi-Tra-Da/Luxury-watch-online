<?php
// require('danhmuc_data.php');

require('header.php');


?>


<div class="prdt">
    <div class="container">
        <div class="prdt-top">
            <div class="col-md-9 prdt-left">
                <!-- <div class="product-one">
                    <div class="col-md-4 product-left p-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-1.png"
                                    alt="" /></a>
                            <div class="product-bottom">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                            </div>
                            <div class="srch srch1">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 product-left p-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-2.png"
                                    alt="" /></a>
                            <div class="product-bottom">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                            </div>
                            <div class="srch srch1">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 product-left p-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-3.png"
                                    alt="" /></a>
                            <div class="product-bottom">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                            </div>
                            <div class="srch srch1">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="product-one">
                    <div class="col-md-4 product-left p-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-4.png"
                                    alt="" /></a>
                            <div class="product-bottom">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                            </div>
                            <div class="srch srch1">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 product-left p-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-5.png"
                                    alt="" /></a>
                            <div class="product-bottom">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                            </div>
                            <div class="srch srch1">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 product-left p-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-6.png"
                                    alt="" /></a>
                            <div class="product-bottom">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                            </div>
                            <div class="srch srch1">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div> -->
                <?php
                if(isset($_GET['id_tuoi'])){
                    for ($sp = 0; $sp < count($masanpham);$sp++){
                        if($ma_sp_theo_gt[$sp]==$_GET['id_tuoi']){?>
                <div class="col-md-4 product-left p-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="chi_tiet_san_pham.php?id=<?=$masanpham[$sp]?>" class="mask"><img
                                class="img-responsive zoom-img" src="images/<?=$anh[$sp]?>" alt="" /></a>
                        <div class="product-bottom">
                            <h3><?=$tensanpham[$sp]?></h3>
                            <p>Explore Now</p>
                            <h4><a class="item_add" href="chi_tiet_san_pham.php?id=<?=$masanpham[$sp]?>"><i></i></a>
                                <span class=" item_price"><?=$dongia[$sp]?></span>
                            </h4>
                        </div>
                    </div>
                </div>
                <?php   }

                    }
                }
                ?>
                <!-- theo hãng -->
                <?php
                if(isset($_GET['id_ncc'])){
                    for ($sp_1 = 0; $sp_1 < count($masanpham);$sp_1++){
                        if($manhacungcap[$sp_1]==$_GET['id_ncc']){?>
                <div class="col-md-4 product-left p-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="chi_tiet_san_pham.php?id=<?=$masanpham[$sp_1]?>" class="mask"><img
                                class="img-responsive zoom-img" src="images/<?=$anh[$sp_1]?>" alt="" /></a>
                        <div class="product-bottom">
                            <h3><?=$tensanpham[$sp_1]?></h3>
                            <p>Explore Now</p>
                            <h4><a class="item_add" href="chi_tiet_san_pham.php?id=<?=$masanpham[$sp_1]?>"><i></i></a>
                                <span class=" item_price"><?=$dongia[$sp_1]?></span>
                            </h4>
                        </div>
                    </div>
                </div>
                <?php   }

                    }
                }
                ?>
                <!-- theo loại sản phẩm -->
                <?php
                if(isset($_GET['id_loai'])){
                    for ($sp_2 = 0; $sp_2 < count($masanpham);$sp_2++){
                        if($maloaisanpham[$sp_2]==$_GET['id_loai']){?>
                <div class="col-md-4 product-left p-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="chi_tiet_san_pham.php?id=<?=$masanpham[$sp_2]?>" class="mask"><img
                                class="img-responsive zoom-img" src="images/<?=$anh[$sp_2]?>" alt="" /></a>
                        <div class="product-bottom">
                            <h3><?=$tensanpham[$sp_2]?></h3>
                            <p>Explore Now</p>
                            <h4><a class="item_add" href="chi_tiet_san_pham.php?id=<?=$masanpham[$sp_2]?>"><i></i></a>
                                <span class=" item_price"><?=$dongia[$sp_2]?></span>
                            </h4>
                        </div>
                    </div>
                </div>
                <?php   }

                    }
                }
                ?>
            </div>
            <div class="col-md-3 prdt-right">
                <div class="w_sidebar">
                    <section class="sky-form">
                        <h4>Tuổi</h4>
                        <div class="row1 scroll-pane">
                            <?php
                        for($tuoi_1=0;$tuoi_1<count($ma_sp_theo_gt_full);$tuoi_1++){
                            if(isset($_GET['id_tuoi'])&&$ma_sp_theo_gt_full[$tuoi_1]==$_GET['id_tuoi']){
                                    $color = 'blue';
                            }
                            else{
                                $color = '';
                            }
    
                            echo "
                            <li class='li_danh_muc'><a class='a_danh_muc' style='color:$color;' style href='danhmuc.php?id_tuoi=$ma_sp_theo_gt_full[$tuoi_1]'>$ten_sp_theo_gt_full[$tuoi_1]</a></li>";
                                } ?>
                        </div>
                    </section>
                    <section class="sky-form">
                        <h4>Hãng</h4>
                        <div class="row1 row2 scroll-pane">
                            <?php
                        for($ncc_1=0;$ncc_1<count($ma_ncc_full);$ncc_1++){
                            if( isset($_GET['id_ncc'])&&$ma_ncc_full[$ncc_1]==$_GET['id_ncc']){
                                    $color = 'blue';
                            }
                            else{
                                $color = '';
                            }
    
                            echo "
                            <li class='li_danh_muc'><a class='a_danh_muc' style='color:$color;' style href='danhmuc.php?id_ncc=$ma_ncc_full[$ncc_1]'>$ten_ncc_full[$ncc_1]</a></li>";
                                } ?>
                        </div>
                    </section>


                    <section class="sky-form">
                        <h4>Loại đồng hồ</h4>
                        <div class="row1 row2 scroll-pane">
                            <?php
                        for($loai_1=0;$loai_1<count($ten_lh_full);$loai_1++){
                            if( isset($_GET['id_loai'])&&$ma_ncc_full[$loai_1]==$_GET['id_loai']){
                                    $color = 'blue';
                            }
                            else{
                                $color = '';
                            }
    
                            echo "
                            <li class='li_danh_muc'><a class='a_danh_muc' style='color:$color;' style href='danhmuc.php?id_loai=$ma_lh_full[$loai_1]'>$ten_lh_full[$loai_1]</a></li>";
                                } ?>
                        </div>
                    </section>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php require('footer.php');