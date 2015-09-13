<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf8" />
		<title>DAMIER-MC</title>
		<meta name="description" content="">
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<div id="container">
			<h1>Damier</h1>
			<table id="damier">
				<tbody>
				<?php 
					// Définition des variables utiles
					$nb_cases = 10;
					// une ligne du damier = array de nb_cases
					$ligne = array();
					for ($i=0; $i<$nb_cases+0; $i++) {
						$ligne[$i] = $i;
					}
					// damier = array de nb_cases x nb_cases -> dans chaque clé on met un array ligne
					$damier = array();
					for ($i=0; $i<$nb_cases+0; $i++) {
						$damier[$i] = $ligne;
					}
						//echo '<pre>';
						//print_r($damier);
						//echo '</pre>';

					foreach ($damier as $key_col => $case) { ?>
						<tr>
							<?php 	
							foreach ($ligne as $key_ligne => $case) {
								$i = $key_ligne % 2;
								$j = $key_col % 2;  ?>
								<!-- Affichage de case avec classes couleur (00 ou 11 = noir, 01 ou 10 = blanc -->
								<td class='case_<?= $i.$j; ?>'></td>  
							<?php } ?>
						<tr>
				<?php }	?>
				</tbody>
			</table>
		</div>
	</body>
</html>
