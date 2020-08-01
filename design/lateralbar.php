<?php include 'array_lists.php'; ?>
<div id='lateralbar' class='sidebar' style='visibility: hidden;'>
	<ul>
		<li> <h1>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Categoria";}
				if ($_COOKIE['lang'] == 'en') {echo "Categories";}
				if ($_COOKIE['lang'] == 'es') {echo "Categoría";}
			?>
		</h1> </li>
		<li> <a href='search.php?q=$books'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Tudo";}
				if ($_COOKIE['lang'] == 'en') {echo "All";}
				if ($_COOKIE['lang'] == 'es') {echo "Tudo";}
			?>
		</a> </li>
		<!--<li> <a >
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Populares";}
				if ($_COOKIE['lang'] == 'en') {echo "Popular";}
				if ($_COOKIE['lang'] == 'es') {echo "Popular";}
			?>
		</a> </li>
		<li> <a >
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Novos";}
				if ($_COOKIE['lang'] == 'en') {echo "New";}
				if ($_COOKIE['lang'] == 'es') {echo "Nuevos";}
			?>
		</a> </li>
		<li> <a >
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Favoritos";}
				if ($_COOKIE['lang'] == 'en') {echo "Favorite";}
				if ($_COOKIE['lang'] == 'es') {echo "Favoritos";}
			?>
		</a> </li>-->
		<li> <a href='search.php?q=$auctors'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Autores";}
				if ($_COOKIE['lang'] == 'en') {echo "Auctors";}
				if ($_COOKIE['lang'] == 'es') {echo "Autores";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$century'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Séculos";}
				if ($_COOKIE['lang'] == 'en') {echo "Centuries";}
				if ($_COOKIE['lang'] == 'es') {echo "Siglos";}
			?>
		</a> </li>
		<li> <a href='search.php?q=$schools'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Escolas Literárias";}
				if ($_COOKIE['lang'] == 'en') {echo "Literary Schools";}
				if ($_COOKIE['lang'] == 'es') {echo "Escuelas Literarias";}
			?>
		</a> </li>
		<li> <hr> </li>
		<li> <h1>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Escolas Literárias";}
				if ($_COOKIE['lang'] == 'en') {echo "Literary Schools";}
				if ($_COOKIE['lang'] == 'es') {echo "Escuelas Literarias";}
			?>
		</h1> </li>
		<?php
			foreach ($ltslst as $x => $v) {
				echo "<li><a href='schools/".strtolower($x).".php'> ".$v." </li></a>";
			}
		?>
		<li> <hr> </li>
		<?php
			echo "<li><h1>".$gnrlst['N']."</h1></li>";
			foreach ($gnrlst as $x => $v) {
				if (($x[0] == 'N')&&($x != 'N')) {echo '<li><a href="search.php?q=$all&g='.strtolower($x).'"> '.$v.' </li></a>';}
			}
			echo "<li> <hr> </li>";
			echo "<li><h1>".$gnrlst['L']."</h1></li>";
			foreach ($gnrlst as $x => $v) {
				if (($x[0] == 'L')&&($x != 'L')) {echo '<li><a href="search.php?q=$all&g='.strtolower($x).'"> '.$v.' </li></a>';}
			}
			echo "<li> <hr> </li>";
			echo "<li><h1>".$gnrlst['D']."</h1></li>";
			foreach ($gnrlst as $x => $v) {
				if (($x[0] == 'D')&&($x != 'D')) {echo '<li><a href="search.php?q=$all&g='.strtolower($x).'"> '.$v.' </li></a>';}
			}
			echo "<li> <hr> </li>";
		?>
		<li> <h1>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Academias";}
				if ($_COOKIE['lang'] == 'en') {echo "Academies";}
				if ($_COOKIE['lang'] == 'es') {echo "Academias";}
			?>
		</h1> </li>
		<?php
			foreach ($acalst as $x => $v) {
				if (($x != '00')&&($x != '01')) {echo '<li><a href="academies/'.$x.'"> '.$v.' </li></a>';}
			}
		?>
		<li><hr></li>
		<li> <h1>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Premiações";}
				if ($_COOKIE['lang'] == 'en') {echo "Awards";}
				if ($_COOKIE['lang'] == 'es') {echo "Premios";}
			?>
		</h1> </li>
		<?php
			foreach ($przlst as $x => $v) {
				if (($x != '00')&&($x != '01')) {echo '<li><a href="prizes/'.$x.'"> '.$v.' </li></a>';}
			}
		?>
		<li><br /></li>
		<li><br /></li>
		<li><br /></li>
		<li><br /></li>
	</ul>
</div>