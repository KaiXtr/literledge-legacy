<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			if ($_COOKIE['lang'] == 'pt') {$v = 'Em Manutenção';}
			if ($_COOKIE['lang'] == 'en') {$v = 'In Maintenance';}
			if ($_COOKIE['lang'] == 'es') {$v = 'En mantenimiento';}
			include 'design/metadata.php';
		?>
	</head>

	<body>
		<div class='content'>
			<div class='login'>
				<img src='media/images/icons/logo.png' />
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "<h1> Em Manutenção </h1>
						Este site está temporariamente em estado de manutenção, por favor, retorne ao site quando a manutenção terminar.";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<h1> In Maintenance </h1>
						This site is temporarily in a maintenance state, please return to the site when the maintenance is finished.";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "<h1> En mantenimiento </h1>
						Este sitio está temporalmente en un estado de mantenimiento, regrese al sitio cuando finalice el mantenimiento.";
					}
				?>
			</div>
		</div>
	</body>
</html>