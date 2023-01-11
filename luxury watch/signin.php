<?php
session_start();
if (isset($_COOKIE['remember'])) {
  $token = $_COOKIE['remember'];
  require('connect.php');
  $sql = "SELECT * from tbl_nguoi_dung
  WHERE token='$token' limit 1";
  $result = mysqli_query($con, $sql);
  $number_rows = mysqli_num_rows($result);
  if ($number_rows == 1) {
    $each = mysqli_fetch_array($result);
    $_SESSION['id'] = $each['id'];
    $_SESSION['name'] = $each['names'];
  }
}
// if (isset($_SESSION['id'])) {
//   header('location:index.php');
//   exit;
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <title>Document</title>

  <script src="registerValidationSignin.js"></script>
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
  <form action="thuc_hien_dang_nhap.php" method="POST">
    <div class="form-group">
      <span class="signup-error" id="errorusername" style="color: red">...</span>
      <input type="text" class="form-control" id="form_username" placeholder="Tên đăng nhập/Tên người dùng" name="username">
    </div>
    <div class="form-group">
      <span class="signup-error" id="errorpass" style="color: red">...</span>
      <input type="password" class="form-control" id="form_pwd" placeholder="Mật khẩu" name="pass">
      <label for="remember">Ghi nhớ đăng nhập </label>
      <input type="checkbox" name="remember" id="">
      <a href="forgot_password.php">Quên mật khẩu</a>
    </div>
    <button type="submit" class="btn btn-default" name="submit">Đăng nhập</button>
  </form>
</body>

</html>