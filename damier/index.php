<?php
	
	$nbcase = 9;
	$classe="";

?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf8" />
		<title>DAMIER</title>
		<meta name="description" content="">
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<main id="main" class="container">
			<table id="damier">
				<tbody>
				<?php for ($i=0; $i<$nbcase; $i++) { ?>
					<tr>
					<?php for ($j=0; $j<$nbcase; $j++) { 
						if (($j%2) == 1 && ($i%2) == 1) { $classe = "c0"; }
						if (($j%2) == 1 && ($i%2) == 0) { $classe = "c1"; }
						if (($j%2) == 0 && ($i%2) == 1) { $classe = "c1"; }
						if (($j%2) == 0 && ($i%2) == 0) { $classe = "c0"; }
					?>
						<td class="<?= $classe; ?>"></td>
					<?php } ?>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</main>
	</body>
</html>


