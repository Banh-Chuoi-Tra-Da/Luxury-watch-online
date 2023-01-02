
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
</head>

<body>
  <form id="reg_form" action="noti.php" method="POST">
  <div class="form-group">
  <span class="signup-error" id="errorusername" style="color: red">...</span>
  <input type="text" class="form-control" id="form_username" placeholder="Tên đăng nhập/Tên người dùng" name="username">
  </div>
  <div class="form-group">
  <span class="signup-error" id="erroremail" style="color: red">...</span>
  <input type="email" class="form-control" id="form_email" placeholder="Email" name="email">
  </div>
  <div class="form-group">
  <span class="signup-error" id="errorpass" style="color: red">...</span>
  <input type="password" class="form-control" id="form_pwd" placeholder="Mật khẩu" name="pass">
  </div>
  <div class="form-group">
  <span class="signup-error" id="errorconpass" style="color: red">...</span>
  <input type="password" class="form-control" id="form_conpwd" placeholder="Xác nhận mật khẩu">
  </div>
  <button type="submit" class="btn btn-default" name="submit">Đăng ký</button>
</form>
</body>
</html>

