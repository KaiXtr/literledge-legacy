<footer class='lowerbar'>
	<form action='design/langset.php' method='post'>
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
	<script type='text/javascript'> lang_set(); </script>

	<ul class='lowerbarinfo'>
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
		<?php /*<li> <a href='about.php'>
			<div class='manlan' lang='pt'> Termos e Condições </div>
			<div class='manlan' lang='en'> Terms of Service </div>
			<div class='manlan' lang='es'> Términos y Condiciones </div>
		</a> </li>
		<li> <a href='about.php'>
			<div class='manlan' lang='pt'> Política de Privacidade </div>
			<div class='manlan' lang='en'> Privacy and security </div>
			<div class='manlan' lang='es'> Política de Privacidad </div>
		</a> </li>*/ ?>
		<li> <a href='help.php'>
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