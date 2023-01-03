<?php
function current_url() //Lấy địa chỉ hiện tại 
{
    $url      = "http://" . $_SERVER['HTTP_HOST'];
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
require('connect.php');
$sql = "SELECT id,names
FROM `tbl_nguoi_dung`
WHERE `email` = '" . $email. "'
";
// die($sql);
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)===1){
    $each=mysqli_fetch_array($result);
    // print_r($each);
    // die();
    $id=$each['id'];
    $name=$each['names'];
    // $sql="DELETE from forgot_password WHERE customer_id='".$id."'";
    $sql = "DELETE from `forgot_password` WHERE customer_id=" . $id;
    mysqli_query($con,$sql);
    $token=uniqid();
    $sql="INSERT INTO `forgot_password`(`customer_id`, `token`)
    VALUES ('" . $id . "','" . $token . "')";
    mysqli_query($con,$sql);
    $link = current_url().'/luxury watch/change_new_password.php?token='.$token;
    // echo $link;
    // die($link);
    require('sendmail.php');
    $title="Đổi mật khẩu";
    $content="Bấm vào link để đổi mật khẩu <a href='$link'>Đổi mật khẩu</a>";
    send_mail($email,$name,$title,$content);
    
}
