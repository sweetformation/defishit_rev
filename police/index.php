<?php
		
	session_start();

	$polices = array('Comic', 'Verdana');
	//$rand = rand(0, 1);
	//$police = $polices[$rand];

	if (!isset($_SESSION['police'])) {
		$_SESSION['police'] = 0;
		$police = $polices[0];
	}
	else {
		if ($_SESSION['police'] == 0) {
			$police = $polices[0];
			//echo $police;
			$_SESSION['police'] = 1;
		}
		elseif ($_SESSION['police'] == 1) {
			$police = $polices[1];
			//echo $police;
			$_SESSION['police'] = 0;
		}
	}

?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf8" />
		<title>POLICE</title>
		<meta name="description" content="">
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<main id="main" class="container <?php echo $police; ?>">
			<h1>Changement de police</h1>
			<p><?php echo $police; ?></p>
			<div id="texte">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</main>
	</body>
</html>


