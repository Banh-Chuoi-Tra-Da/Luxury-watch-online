<?php
    $token = $_GET['token'];
    require('database/connect.php');
    $sql = "SELECT customer_id
FROM forgot_password
WHERE token = '" . $token . "'
";
    // die($sql);
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)===0){
        header('locaton:index.php');
    }

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="process_change_new_password.php" method="POST">
        <input type="hidden" name="token" value="<?php echo $token ?>">
        Mật khẩu mới 
        <input type="password" name="password">
        <br>
        <button>Đổi mật khẩu</button>
    </form>

</body>

</html>