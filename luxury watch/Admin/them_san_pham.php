<html>
    <head>
        <title>Thêm mới sản phẩm</title>
        <meta charset= "utf-8" http-equiv="content-type" />
        <script src="jquery-3.2.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    </head>
    <body>
    <div class="container">

        <h2>Thêm mới sản phẩm</h2>
        <form  action="thuc_hien_them_san_pham.php" method="post">
            <label>Tên sản phẩm</label>
            <input name="tensanpham" type="text">
            <br>
            <label>Mô tả</label>
            <input name="mota" type="text">
            <br>
            <label>Số lượng</label>
            <input name="soluong" type="text">
            <br>
            <label>Đơn giá</label>
            <input name="dongia" type="text">
            <br>
            <label>Ảnh</label>
            <input name="anh" type="text">
            <br>
            <input value="Lưu" type="submit">
            
        </form>
    </body>
</html>