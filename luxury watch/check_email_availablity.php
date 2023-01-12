<?php
	require('connect.php');
	sleep(5);
	$email = (string)$_POST['email'];
	if (isset($_POST)) {
		$result = $con->query(
		'SELECT * FROM tbl_nguoi_dung WHERE email = "'.strtolower($email).'"'
		);

		if ($result->num_rows > 0) {
		echo '<div class="alert alert-danger"><b>Haizz!</b> Email này cũng đã có òi bạn ơii </div>';
		echo "<script>$('#form_email').val('')</script>";
		} 
		else {
		echo '<div class="alert alert-success"><b>Chà,</b> Cuối cùng bạn cũng có thể sử dụng email này.</div>';
		}
	}
?>