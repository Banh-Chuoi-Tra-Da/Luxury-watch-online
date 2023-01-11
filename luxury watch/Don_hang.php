<!-- top Products -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Document</title>
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
</head>

<body>
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
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">

            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-9">
                    <div class="wrapper">
                        <!-- first section -->

                        <div class="row">
                            <?php
                            session_start();
                        

                            ?>
                            <div class="col-md-12">

                                <?php
                                $id = $_SESSION['id'];
                                require('connect.php');

                                $sql_select = mysqli_query($con, "SELECT * FROM tbl_hoa_don WHERE nguoi_dung_id='$id' GROUP BY id");
                                ?>
                                <table class="table table-striped table-bordered" >
                                    <div class="wrap" style="background-color: #003366;margin-bottom:30px;">
                                        <h2 style="color: aliceblue;">Lịch sử mua hàng của khách hàng: <?php echo $_SESSION['ten_dang_nhap'] ;?></h2>

                                    </div>
                                    <tr>
                                        <th>Thứ tự</th>
                                        <th>Mã hóa đơn</th>
                                        <th>Địa chỉ</th>

                                        <th>Ngày đặt</th>
                                        <th>Tổng tiền</th>

                                    </tr>
                                    <?php
                                    $i = 0;
                                    while ($row_donhang = mysqli_fetch_array($sql_select)) {
                                        $i++;
                                    ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>

                                            <td><?php echo $row_donhang['id']; ?></td>
                                            <td><?php echo $row_donhang['address']; ?></td>


                                            <td><?php echo $row_donhang['ngay_hoa_don'] ?></td>
                                            <td><?php echo $row_donhang['tong_tien'] ?></td>

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>



                        </div>


                        <!-- //first section -->
                    </div>
                </div>
                <!-- //product left -->
                <!-- product right -->

            </div>
        </div>
    </div>
    <!-- //top products -->
</body>

</html>