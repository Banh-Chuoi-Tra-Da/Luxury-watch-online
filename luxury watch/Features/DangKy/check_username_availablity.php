<?php 
	require('../../connect.php');
	sleep(5);
	if (isset($_POST)) {
	$username = (string)$_POST['username'];

	$result = $con->query(
	'SELECT * FROM nguoidung WHERE tennguoidung = "'.strtolower($username).'"'
	);

	if ($result->num_rows > 0) {
	echo '<div class="alert alert-danger"><b>Oh no!</b> Tên người dùng đã có òi </div>';
	} 
	else {
	echo '<div class="alert alert-success"><b>Tuyệt vời</b> Bạn có thể sử dụng tên người dùng này.</div>';
	}
	}
?>