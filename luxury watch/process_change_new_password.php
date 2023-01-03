<?php
$token = $_POST['token'];
$password = $_POST['password'];
require('connect.php');
$sql = "SELECT customer_id
FROM forgot_password
WHERE token = '" . $token . "'
";

// die($sql);
$result = mysqli_query($con, $sql);
// while($row = mysqli_fetch_array($result)) {

//     // If you want to display all results from the query at once:
//     print_r($row);
//     die();



// }
if (mysqli_num_rows($result) === 0) {
    header('locaton:index.php');
    exit;
}
$customer_id = mysqli_fetch_array($result)['customer_id'];
$sql = "UPDATE `tbl_nguoi_dung` 
    set `passwords`='" .$password . "'
    WHERE `id`= " . $customer_id;
mysqli_query($con, $sql);
$sql = "DELETE FROM forgot_password
WHERE token = '" . $token . "'
";
if ($con->query($sql)) {
    echo "<script type='text/javascript'>
    window.alert('Đổi mật khẩu thành công');
    window.location.href='index.php';
</script>";
};

