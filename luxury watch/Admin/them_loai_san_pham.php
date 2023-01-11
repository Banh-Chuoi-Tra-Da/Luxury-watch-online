<html>

<head>
    <title>Thêm mới loại sản phẩm</title>

</head>

<style>
    form {
        width: 600px;
        margin: 20px auto;
        border-radius: 5px;
        background-color: #003366;
        padding: 10px;
        box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.4);
    }

    label {
        /* color:#98B4D4; //023e8a */
        color: white;
        font-weight: 470;

    }
</style>



<body>
    <h2>Thêm mới loại sản phẩm</h2>
    <form action="thuc_hien_them_loai_san_pham.php" method="POST">
        <label>Tên loại sản phẩm</label>
        <input name="tenloaisanpham" type="text">
        <br>
        <input value="Lưu" type="submit">
    </form>
</body>

</html>