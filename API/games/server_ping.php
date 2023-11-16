<?php
	include('../../site/config.php');
	if(isset($_GET['active']) && isset($_GET['id'])) {
		$active = mysqli_real_escape_string($conn,intval($_GET['active']));
		$gameID = mysqli_real_escape_string($conn,$_GET['id']);
		if($active >= 0 && $active <= 1) {
			$pingSQL = "UPDATE `games` SET `active`='$active' WHERE `uid`='$gameID'";
			$ping = $conn->query($pingSQL);
		}
	}
?>