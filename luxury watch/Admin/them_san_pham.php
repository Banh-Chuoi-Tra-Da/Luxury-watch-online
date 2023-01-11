<html>

<head>
    <title>Thêm mới sản phẩm</title>
    <meta charset="utf-8" http-equiv="content-type" />
    <!-- <script src="jquery-3.2.1.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<style>
    form {
        width: 600px;
        margin: 20px auto;
        border-radius: 5px;
        background-color: #92A8D1;
        padding: 10px;
        box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.4);
    }

    label {
        /* color:#98B4D4; //023e8a */
        color: #264653;
        font-weight: 470;

    }
    h2{
        text-align: center;
        margin-top: 30px;
    }
</style>

<body>
    <div class="container">

        <h2>Thêm mới sản phẩm</h2>
        <form class="form form-horizontal" action="thuc_hien_them_san_pham.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-4">Tên sản phẩm</label>
                <div class="col-sm-10">
                <input name="tensanpham" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Mô tả</label>
                <div class="col-sm-10">
                <input name="mota" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Số lượng</label>
                <div class="col-sm-10">
                <input name="soluong" type="text">
                </div>
            </div>    <div class="form-group">
                <label class="control-label col-sm-4">Đơn giá</label>
                <div class="col-sm-10">
                <input name="dongia" type="text">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Ảnh</label>
                <div class="col-sm-10">
                <input name="anh" type="text">
                </div>
            </div>
            <input type="hidden" name="id" value="<?= $id ?>" />
                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <input class="btn btn-success" type="submit" value="Lưu" />
                    </div>

                </div>
           
          
            <!-- <label>Số lượng</label>
            <br>
            <label>Đơn giá</label>
            <input name="dongia" type="text">
            <br>
            <label>Ảnh</label>
            <input name="anh" type="text">
            <br>
            <input value="Lưu" type="submit"> -->


        </form>
        <!-- <form class="form form-horizontal" method="post" action="thuc_hien_update.php" enctype="multipart/form-data">

            <div class="form-group">
                <label class="control-label col-sm-4">Tên sản phẩm</label>
                <div class="col-sm-10">
                    <input type="text" name="tensanpham" name="hinh_anh" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4">Mô tả/label>
                <div class="col-sm-10">
                    <input type="text" name="mota" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Số lượng</label>
                <div class="col-sm-10">
                    <input type="text" name="soluong" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Đơn giá</label>
                <div class="col-sm-10">
                    <input type="text" name="dongia" >
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4">Ảnh</label>
                <div class="col-sm-10">
                    <input type="text" name="anh">
                </div>
            </div>
        </form> -->
</body>

</html>