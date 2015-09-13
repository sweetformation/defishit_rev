<?php

/************************************************************************
*                         FORMULAIRE ESPACE CLIENT                      *
*************************************************************************/
	// Initialisation des variables
		// contiendra nos éventuels messages d'erreur de validation du formulaire
	$errors = array();
	$title = "";
	$reponse = array();

	// si le formulaire a été soumis...
	if (!empty($_POST)) {

		// récupère les données dans variable
		$title = trim( strip_tags( $_POST["title"] ) );

		/*_________________ Début de la validation ____________________*/
		// ---------------- TITLE ----------------
		if (empty($title)) {
			$errors[] = "Tapez un titre de film !";
		}
		/*__________________ Fin de la validation ____________________*/
		
		// si le formulaire est valide
		if (empty($errors)) {
			$json_url = "http://www.omdbapi.com/?t=$title";
			echo $json_url;
			$json = file_get_contents($json_url);
			/*$curl_handle=curl_init();
			curl_setopt($curl_handle, CURLOPT_URL,'http://www.omdbapi.com/?t='.$title);
			curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
			curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl_handle, CURLOPT_USERAGENT, 'movie');
			$query = curl_exec($curl_handle);
			curl_close($curl_handle);

			$json=$query;*/
			$reponse = json_decode($json, TRUE);
			print_r($reponse);
		}


	} // fin du if formulaire soumis ?

?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf8" />
		<title>MOVIE</title>
		<meta name="description" content="">
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<main id="main" class="container">
			<h1>Titre du film à chercher</h1>
				<form id="formTitre" method="POST" novalidate>
					<div>
						<label for="title">Titre du film :</label>
						<input type="text" name="title" id="title" value="<?php echo $title; ?>"/>
					</div>
					<div>
						<input type="submit" id="sub" value="Chercher !"/>
					</div>
					<div class="errors">
						<ul>
						<?php 
							foreach($errors as $error) {
								echo '<li>' . $error . '</li>'; 
							}
						?>
						</ul>
					</div>
				</form>
				<?php if (!empty($reponse)) { ?>
				<div id="results">
					<h2>Résultats</h2>
					<div>
						<p>Titre : <?= $reponse['Title']; ?></p>
						<p>Année : <?= $reponse['Year']; ?></p>
						<p>Durée : <?= $reponse['Runtime']; ?></p>
						<p>Genre : <?= $reponse['Genre']; ?></p>
						<p>Directeur : <?= $reponse['Director']; ?></p>
						<p>Réalisateur : <?= $reponse['Writer']; ?></p>
						<p><span>Couverture :</span><a href="<?= $reponse['Poster']; ?>" title="couv"><img src="<?= $reponse['Poster']; ?>" alt"poster"/></a></p>

					</div>
				</div>
				<?php } ?>
		</main>
	</body>
</html>


