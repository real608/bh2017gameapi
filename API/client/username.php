<?php //WOOHOO, FIXED!!!!
	include('../../site/config.php');
	if (isset($_GET['id'])) {
		$UserID = mysqli_real_escape_string($conn,$_GET['id']);
		$findUserSQL = "SELECT * FROM `beta_users` WHERE `unique_key` = '$UserID'";
		$findUser = $conn->query($findUserSQL);
		
		/*$my_file = 'file.txt';
		$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
		$data = $UserID;
		fwrite($handle, $data);*/
		
		$userRow = $findUser->fetch_assoc();
		$username = $userRow['username'];
		
		echo $username;
	}
?>