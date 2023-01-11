
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome Admin</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
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
  </style>
</head>
<body>
	<!--<p>Xin chào :<?php echo $_SESSION['dangnhap'] ?> <a href="?login=dangxuat">Đăng xuất</a></p> -->

	<button type="button" class="btn btn-warning"><a href="?login=dangxuat">Đăng xuất</a></button>
	<?php include("slidebar.php");?>
  <div class="col-sm-9">
      <h4><small>GIỚI THIỆU VỀ CHÚNG TÔI</small></h4>
      <hr>
      <h2>Bánh Chuối Trà Đá</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Hà Nội ngày 14 tháng 01 năm 2023</h5>
      <h5><span class="label label-danger">HVNH</span> <span class="label label-primary">MIS</span></h5><br>
      <p>Nhóm bánh chuối trà đá được thành lập từ môn học Lập Trình Web lớp 03 do giảng viên Vũ Trọng Sinh giảng dậy. Nhóm bao gồm những thành viên sau:
        
      </p>
    <br>
    - Hà Hữu Lương 
    <br />
    - Lê Hoàng Vũ
    <br />
    - Hà Huy Kiệt
    <br />
    - Cao Thị Chúc
    <br />
    - Bùi Thị Ngân
    <br />
</body>
</html>