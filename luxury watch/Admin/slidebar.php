<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1000px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 105%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
    button{
        float: right;
    }
    img{
        width: 10%;
        height: 10%;
        float: left;
    }
    span{
        padding-right: 10px;
    }
    a{
        color: white;
    }
   </style> 
</head>
<body>
<div class="container-fluid">
    <div class="row content">
    <div class="col-sm-3 sidenav" style="background-image: url('../images/background2.png');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 50%;">
        <h4 style="color: white">TRANG CHỦ QUẢN TRỊ</h4>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="danh_sach_loai_san_pham.php"><img src="Icons/type.png"><span></span>Danh sách loại sản phẩm</a></li>
        <li><a href="danh_sach_san_pham.php"><img src="Icons/product.png"><span></span>Danh sách sản phẩm</a></li>
        <li><a href="danh_sach_nha_cung_cap.php"><img src="Icons/provide.png"><span></span>Danh sách nhà cung cấp</a></li>
        <li><a href="thong_ke.php"><img src="Icons/provide.png"><span></span>Thống kê doanh thu</a></li>
      </ul><br>
  </div>
</body>
</html>
