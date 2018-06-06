<?php
	require_once 'assets/functions.php';
	require_once 'assets/header.php';
	require_once 'assets/search.php';

	echo "			<div id='main'>";
			
		$sql = 'SELECT * FROM hats;';
		$result = $pdo->query($sql);
		echo "\n				<ul>\n";
		while ($hat = $result->fetch()) {
			echo "					<li><strong>".$hat['name']."</strong><br>".
										"<strong>Style:</strong> ".$hat['style']." ".
										"<strong>from</strong> ".$hat['label']."<br>".
										"<strong>Crown height:</strong> ".$hat['crown']." ".
										"<strong>Brim width:</strong> ".$hat['brim']."<br>".
										"<strong>Description:</strong><br>".$hat['description']."</li><br>\n";
		}
		echo "				</ul>\n";
		
	echo "			</div>\n";
			
	require_once 'assets/footer.php';
?>