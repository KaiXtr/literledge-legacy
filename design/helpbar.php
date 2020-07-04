<div id='lateralbar' class='sidebar'>
	<ul>
		<li> <h1>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Ajuda";}
				if ($_COOKIE['lang'] == 'en') {echo "Help";}
				if ($_COOKIE['lang'] == 'es') {echo "Ayuda";}
			?>
		</h1> </li>
		<li> <a href='help/summary.php'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Sumário";}
				if ($_COOKIE['lang'] == 'en') {echo "Summary";}
				if ($_COOKIE['lang'] == 'es') {echo "Sumário";}
			?>
		</a> </li>
	</ul>
</div>