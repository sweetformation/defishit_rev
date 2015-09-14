


<!DOCTYPE html>
<html>
	<head>
	  <meta charset="UTF-8" />
	  <title>Decollage</title>
	  <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	  <div id="main" class="container">
		<?php
		ob_start();
		// Using Chrome, many more bytes are required to by-pass the browser's buffer. Dans PHP.init output_buffering=4096 !
		echo str_repeat(' ', 4096);

		for ($i=10; $i>=0; $i--) {
			echo str_repeat(' ', 4096);
			echo '<p>'.$i.'</p>';
			sleep(1);
			ob_flush();
			flush();
		}

		echo str_repeat(' ', 4096);
		//echo 'decollage';
		?>
		<iframe width="853" height="480" src="//www.youtube-nocookie.com/embed/l0m_lGQxjKc?rel=0&amp;controls=0&amp;showinfo=0?&autoplay=1" frameborder="0" allowfullscreen></iframe>
		<?php

		sleep(1);
		ob_flush();
		flush();

		ob_end_flush();
		?></div>
	</body>
</html>

