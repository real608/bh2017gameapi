<?php 
	include('../../site/config.php');
	if (isset($_GET['id'])) {
		$GameID = mysqli_real_escape_string($conn,intval($_GET['id']));
		$findGameSQL = "SELECT * FROM `games` WHERE `id` = $GameID";
		$findGame = $conn->query($findGameSQL);
		
		$gameRow = $findGame->fetch_assoc();
		$title = $gameRow['name'];
		
		echo $title;
	}
?>