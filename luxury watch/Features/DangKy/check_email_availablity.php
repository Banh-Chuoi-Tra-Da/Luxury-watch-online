<?php 
	require('../../connect.php');
	sleep(5);
	$email = (string)$_POST['email'];
	if (isset($_POST)) {
		$result = $con->query(
		'SELECT * FROM nguoidung WHERE email = "'.strtolower($email).'"'
		);

		if ($result->num_rows > 0) {
		echo '<div class="alert alert-danger"><b>Haizz!</b> Email này cũng đã có òi bạn ơii </div>';
		} 
		else {
		echo '<div class="alert alert-success"><b>Chà,</b> Cuối cùng bạn cũng có thể sử dụng email này.</div>';
		}
	}
?>