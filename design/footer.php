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
				echo "Contatos";
			?>
		</a> </li>
		<li> <a href='https://twitter.com/KaiXtr' target='_blank'> Twitter </a> </li>
		<li> <a href='https://github.com/KaiXtr' target='_blank'> GitHub </a> </li>
	</ul>
	<ul class='lowerbarinfo'>
		<li> <a href='about.php'>
			<?php
				echo "Sobre";
			?>
		</a> </li>
		<li> <a href='terms.php'>
			<?php
				echo "Termos e Condições";
			?>
		</a> </li>
		<li> <a href='privacy.php'>
			<?php
				echo "Política de Privacidade";
			?>
		</a> </li>
		<li> <a href='sitemap.php'>Sitemap</a> </li>
		<li> <a href='help/summary.php'>
			<?php
				echo "Ajuda";
			?>
		</a> </li>
	</ul>
</footer>
<footer class='disclaimer'>
	Matt Kai 2020
</footer>