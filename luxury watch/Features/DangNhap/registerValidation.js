$(function(){
      $('#form_username').focus();
      $('#errorusername').hide();
      $('#errorpass').hide();

      $(':button[type="submit"]').prop('disabled', true);
      var error_username = false;
      var error_pass = false;
      
      $('#form_username').focusout(function(){
        checkUserName();
      });
      $('#form_pwd').focusout(function(){
        checkPass();
      });

      // Check username
      function checkUserName(){
        var username = $('#form_username').val(); 
        var pattern = new RegExp(/^[a-zA-Z0-9._]{6,20}$/);

        if (username.length == 0) {
          $('#errorusername').html('Bạn chưa nhập tên người dùng');
          $('#errorusername').show(300);
          $('#form_username').focus();
          $(':button[type="submit"]').prop('disabled', true);
          error_username = true;
        }
        else if (!pattern.test(username)) {
          $('#errorusername').html('Tên người dùng chưa đúng định dạng');
          $('#errorusername').show(300);
          $('#form_username').focus()
          $(':button[type="submit"]').prop('disabled', true);
          error_username = true;
        }
        else {
            $('#errorusername').hide(400);
        }
      }

    
      // Check password
      function checkPass(){
        var password = $('#form_pwd').val();
        var pattern = new RegExp(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/);

        if (password.length == 0) {
          $('#errorpass').html('Bạn chưa nhập mật khẩu');
          $('#errorpass').show(300);
          $('#form_pwd').focus();
          $(':button[type="submit"]').prop('disabled', true);
          error_pass = true;
        }

        else if (!pattern.test(password)) {
          $('#errorpass').html('Mật khẩu không đúng định dạng');
          $('#errorpass').show(300);
          $('#form_pwd').focus();
          $(':button[type="submit"]').prop('disabled', true);
          error_pass = true;
        }
        else {
            $(':button[type="submit"]').prop('disabled', false);
            $('#errorpass').hide(400);
        }
      }
    
      // Form submit
      $('#reg_form').submit(function(){
        error_username = false;
        error_pass = false;
        checkUserName();
        checkPass();
    
        if (error_username == false && error_pass == false) {
          return true;
        }
        else {
          return false;
        }
      });
    
    });