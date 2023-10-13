<div id='helpbar' class='sidebar'>
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
		<li> <a href='help/cdd.php'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Classificação Decimal de Dewey";}
				if ($_COOKIE['lang'] == 'en') {echo "Dewey Decimal Classification";}
				if ($_COOKIE['lang'] == 'es') {echo "Sistema Dewey de clasificación";}
			?>
		</a> </li>
	</ul>
</div>

