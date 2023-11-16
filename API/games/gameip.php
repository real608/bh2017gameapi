<?php 
	include('../../site/config.php');
	
	if (isset($_GET['id'])) {
		$GameID = mysqli_real_escape_string($conn,intval($_GET['id']));
		$findGameSQL = "SELECT * FROM `games` WHERE `id` = $GameID";
		$findGame = $conn->query($findGameSQL);
		
		$gameRow = (object) $findGame->fetch_assoc();
		$address = $gameRow->{'address'};
		
		echo $address;
	}
?>