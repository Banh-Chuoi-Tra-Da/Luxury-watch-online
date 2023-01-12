<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Document</title>

  <script src="registerValidation.js"></script>
  <style>
      form {
        width: 600px;
        margin: 15% auto;
        border-radius: 5px;
        background-color: black;
        padding: 10px;
        box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.4);
    }

    label {
        /* color:#98B4D4; //023e8a */
        color: white;
        font-weight: 470;

    }
        body {
          background-image: url('images/background.png');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
    }
</style>
</head>

<body>
  <form id="reg_form" action="thuc_hien_dang_ky.php" method="POST">
    <div class="form-group">
      <span class="signup-error" id="errorusername" style="color: red">...</span>
      <input type="text" class="form-control" id="form_username" placeholder="Tên đăng nhập/Tên người dùng" name="username">
      <span class="signup-error" id="errorusername2" style="color: red"></span>
    </div>
    <div class="form-group">
      <span class="signup-error" id="erroremail" style="color: red">...</span>
      <input type="email" class="form-control" id="form_email" placeholder="Email" name="email">
      <span class="signup-error" id="erroremail2" style="color: red"></span>
    </div>
    <div class="form-group">
      <span class="signup-error" id="errorpass" style="color: red">...</span>
      <input type="password" class="form-control" id="form_pwd" placeholder="Mật khẩu" name="pass">
    </div>
    <div class="form-group">
      <span class="signup-error" id="errorconpass" style="color: red">...</span>
      <input type="password" class="form-control" id="form_conpwd" placeholder="Xác nhận mật khẩu">
    </div>
    <!-- Thêm SDT, Dia Chi -->
<!--     <div class="form-group">
      <label for="exampleInputPassword1">Số điện thoại</label>
      <input type="text" name="phone_number" class="form-control" id="exampleInputPassword1" placeholder="Số điện thoại">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Địa chỉ</label>
      <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Địa chỉ">
    </div> -->
    <button type="submit" class="btn btn-default" name="submit">Đăng ký</button>
    <br>
    <a href="Features/github-login/index.php"><img src="Features/github-login/images/github-login.jpg" style="width: 190px; height: auto;"></a>

  </form>
</body>

</html>