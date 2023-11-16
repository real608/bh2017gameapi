<?php                                                           //should be fine
	include('../../site/config.php');			
	if(isset($_GET['active']) && isset($_GET['id'])) {
		$active = mysqli_real_escape_string($conn,$_GET['active']);
	        if($active == 1){
		$gameID = mysqli_real_escape_string($conn,intval($_GET['id']));
		$pingSQL = "UPDATE `games` SET `active`='1' WHERE `id`='$gameID'";
		$ping = $conn->query($pingSQL);
		    }
	}
?>