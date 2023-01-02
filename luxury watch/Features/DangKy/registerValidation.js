// |----Nguồn tham khảo: https://github.com/aumtuhin/Jquery-form-validaion-------------|
// |                        Luật xử lý của Form Đăng ký:                               |
// | - Username (id) có độ dài từ 6-20 chỉ bao gồm chữ, số và '.', '_'                 |
// | - Kiểm tra dạng của Email                                                         |
// | - Mật khẩu có ít nhất một chữ hoa, chữ thường, số, kí tự đặc biệt và 8 kí tự      |
// | - Kiểm tra lại mật khẩu đã nhập                                                   |

    // Kiểm tra các trường dữ liệu trực tiếp tại thời điểm nhập của Form Đăng ký với Jquery Framework và Regular Expression
    // Basic syntax is: $(selector).action(...)

$(function(){
    // $(function() {...}) là hàm trong Jquery, viết tắt của $(document).ready(function() {...})
    // hàm này dùng để chạy tất cả các hàm được định nghĩa ở bên trong hoặc lệnh / sau khi trang load xong tất cả các phần tử như hình ảnh, đoạn lệnh, tập lệnh CSS, v.v
    // vì bản chất của ngôn ngữ lập trình hay JavaScript là biên dịch từ trên xuống dưới, từ trái qua phải, khá giống Form Load trong lập trình Form C#
    // Trong thẻ <body>, cũng có một thuộc tính tương tự là onload, vì vậy, chúng ta không nên dùng chung

      // Sử dụng selector để tìm các phần tử có id tương ứng và ẩn chúng đi (ở đây là các thông báo lỗi)
      $('#form_username').focus();
      $('#errorusername').hide();
      $('#erroremail').hide();
      $('#errorpass').hide();
      $('#errorconpass').hide();
    
      // Khai báo trạng thái
      var error_username = false;
      var error_email = false;
      var error_pass = false;
      var error_conpass = false;
      
      // The focusout event occurs when an element (or any elements inside it) loses focus.
      // The focusout() method attaches a function to run when a focusout event occurs on the element, or any elements inside it.
      // Tạo hiệu ứng ẩn 
      $('#form_username').focusout(function(){
        checkUserName();
      });
      $('#form_email').focusout(function(){
        checkEmail();
      });
      $('#form_pwd').focusout(function(){
        checkPass();
      });
      $('#form_conpwd').focusout(function(){
        checkConPass();
      });

      // Check username
      function checkUserName(){
        // The val() method returns or sets the value attribute of the selected elements.
        // When used to return value: This method returns the value of the value attribute of the FIRST matched element.
        var username = $('#form_username').val(); 

        // ^: bắt đầu của chuỗi
        // $: kết thúc của chuỗi
        // [...]: khớp với
        // {...}: khoảng độ dài
        // [a-zA-z0-9._]: khớp với 1 trong các kí tự từ a-z hoặc A-Z hoặc . hoặc _
        var pattern = new RegExp(/^[a-zA-Z0-9._]{6,20}$/);

        // if () luôn hiểu là return true, nên cần thêm dấu '!' thay cho phủ định
        // Hàm test sẽ kiểm tra chuỗi được cho có khớp với Regular Expression đã khai báo không
        if (!pattern.test(username)) {

          // The html() method sets or returns the content (innerHTML) of the selected elements.
          // When this method is used to return content, it returns the content of the FIRST matched element.
          // When this method is used to set content, it overwrites the content of ALL matched elements.
          // Tip: To set or return only the text content of the selected elements, use the text() method.
          $('#errorusername').html('Tên người dùng có độ dài từ 6-20 ký tự, chỉ bao gồm chữ số, dấu chấm và gạch dưới');

          // The optional speed parameter specifies the speed of the hiding/showing, and can take the following values: "slow", "fast", or milliseconds.
          $('#errorusername').show(300);
          error_username = true;
        }
        else {
            $('#errorusername').hide(400);
        }
      }
    
      // Check email
      function checkEmail(){
        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
        if (pattern.test($("#form_email").val())) {
          $('#erroremail').hide(400);
        }
        else {
            $('#erroremail').html('Email bạn nhập không hợp lệ');
            $('#erroremail').show(300);
            error_email = true;
        }
      }
    
      // Check password
      function checkPass(){
        var password = $('#form_pwd').val();
        var pattern = new RegExp(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/);
    
        if (!pattern.test(password)) {
          $('#errorpass').html('Mật khẩu phải có ít nhất một chữ hoa, chữ thường, số, ký tự đặc biệt và có độ dài ít nhất là 8 ký tự');
          $('#errorpass').show(300);
          error_pass = true;
        }
        else {
            $('#errorpass').hide(400);
        }
      }
    
      // Check confirm password
      function checkConPass(){
        var password = $('#form_pwd').val();
        var con_pass = $('#form_conpwd').val();
        if (password != con_pass) {
          $('#errorconpass').html('Mật khẩu bạn nhập lại chưa khớp');
          $('#errorconpass').show(300);
          error_conpass = true;
        }
        else {
            $('#errorconpass').hide(400);
        }
      }
    
      // Form submit
      $('#reg_form').submit(function(){
        error_name = false;
        error_username = false;
        error_email = false;
        error_pass = false;
        error_conpass = false;
        checkUserName();
        checkEmail();
        checkPass();
        checkConPass();
    
        if (error_name == false && error_username == false && error_email==false && error_pass == false && error_conpass == false) {
          return true;
        }
        else {
          return false;
        }
      });
    
    });