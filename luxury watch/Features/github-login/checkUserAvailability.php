<?php 
	// Thêm người dùng từ OAuth2 sang tbl_nguoi_dung để database có thống nhất username
	function checkUserAvailability($data = array()){
		$sql = "SELECT * FROM tbl_nguoi_dung WHERE names = '".$data['username']."'";
		require("../../connect.php");
		$ketQuaTruyVan = $con->query($sql);

		if ($ketQuaTruyVan->num_rows == 0) {
			// code...
			$sql = "INSERT INTO tbl_nguoi_dung(names, email, login_type) VALUES ('".$data['username']."', '".$data['email']."', 'github')";
			$con->query($sql);
		}
	}
 ?>