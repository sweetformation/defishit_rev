<?php
		
	$rss = new DOMDocument();
	$rss->load('https://remixjobs.com/rss?for=php+junior&at=Paris%2C+France&lat=48.856614&lng=2.3522219000000177&dist=10&page=1&in=all');
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}

?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf8" />
		<title>RSS</title>
		<meta name="description" content="">
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<main id="main" class="container">
			<h1>Catch RSS</h1>
			<ul>
				<?php for ($i=0; $i<count($feed); $i++) { ?>
				<li><a href="<?= $feed[$i]['link']; ?>" title=""><?= $feed[$i]['title']; ?></a></li>
				<?php } ?>
			</ul>
		</main>
	</body>
</html>


