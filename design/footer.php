<footer class='lowerbar'>
	<form action='design/cookieset.php' method='post'>
		<select id='langbox' name='lang' onchange='this.form.submit();lang_set()'>
			<?php
				#$lv = array('pt','en','es','fr','it','de','ru','jp');
				$lv = array('pt','en','es');
				$lb = array('Português','English','Español','Français','Italiano','Deutsch','русский','日本語');
				for ($x=0;$x<sizeof($lv);$x++) {
					if ((isset($_COOKIE['lang']))&&($lv[$x] == $_COOKIE['lang'])) {
						echo "<option class='langboxit' value='".$lv[$x]."' selected> ".$lb[$x]." </option>";
					}
					else {echo "<option class='langboxit' value='".$lv[$x]."'> ".$lb[$x]." </option>";}
				}
			?>
		</select>
	</form>
	<ul class='lowerbarinfo'>
		<li> <a href='contacts'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Contatos";}
				if ($_COOKIE['lang'] == 'en') {echo "Contacts";}
				if ($_COOKIE['lang'] == 'es') {echo "Contactos";}
			?>
		</a> </li>
		<li> <a href='https://twitter.com/KaiXtr' target='_blank'> Twitter </a> </li>
		<li> <a href='https://github.com/KaiXtr' target='_blank'> GitHub </a> </li>
	</ul>
	<ul class='lowerbarinfo'>
		<li> <a href='about.php'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Sobre";}
				if ($_COOKIE['lang'] == 'en') {echo "About";}
				if ($_COOKIE['lang'] == 'es') {echo "Sobre";}
			?>
		</a> </li>
		<li> <a href='terms.php'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Termos e Condições";}
				if ($_COOKIE['lang'] == 'en') {echo "Terms of Service";}
				if ($_COOKIE['lang'] == 'es') {echo "Términos y Condiciones";}
			?>
		</a> </li>
		<li> <a href='privacy.php'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Política de Privacidade";}
				if ($_COOKIE['lang'] == 'en') {echo "Privacy Police";}
				if ($_COOKIE['lang'] == 'es') {echo "Política de Privacidad";}
			?>
		</a> </li>
		<li> <a href='sitemap.php'>Sitemap</a> </li>
		<li> <a href='help/summary.php'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Ajuda";}
				if ($_COOKIE['lang'] == 'en') {echo "Help";}
				if ($_COOKIE['lang'] == 'es') {echo "Ayuda";}
			?>
		</a> </li>
	</ul>
</footer>
<footer class='disclaimer'>
	Matt Kai 2020
</footer>