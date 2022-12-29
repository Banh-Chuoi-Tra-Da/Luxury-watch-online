<?php
function current_url()
{
    $url      = "http://" . $_SERVER['HTTP_HOST'];
    // $validURL = str_replace("&", "&amp;", $url);
    return $url;
}
// function current_url()
// {
//     $url      = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//     $validURL = str_replace("&", "&amp;", $url);
//     return $validURL;
// }
// echo current_url();
// die();

$email=$_POST['email'];
// print_r($email);
// die();
require('database/connect.php');
$sql = "SELECT id,ten_nguoi_dung
FROM mis_nguoi_dung
WHERE email = '" . $email. "'
";
// die($sql);
$result=mysqli_query($con,$sql);
// while($row = mysqli_fetch_array($result)) {

//     // If you want to display all results from the query at once:
//     print_r($row);
//     die();



// }

if(mysqli_num_rows($result)===1){
    $each=mysqli_fetch_array($result);
    // print_r($each);
    // die();
    $id=$each['id'];
    $name=$each['ten_nguoi_dung'];
    // $sql="DELETE from forgot_password WHERE customer_id='".$id."'";
    $sql = "DELETE from `forgot_password` WHERE customer_id=" . $id;
    mysqli_query($con,$sql);
    $token=uniqid();
    $sql="INSERT INTO `forgot_password`(`customer_id`, `token`)
    VALUES ('" . $id . "','" . $token . "')";
    mysqli_query($con,$sql);
    $link = current_url().'/MIS Cua hang/change_new_password.php?token='.$token;
    // echo $link;
    // die($link);
    require('sendmail.php');
    $title="Đổi mật khẩu";
    $content="Bấm vào link để đổi mật khẩu <a href='$link'>Đổi mật khẩu</a>";
    send_mail($email,$name,$title,$content);
    
}
?>