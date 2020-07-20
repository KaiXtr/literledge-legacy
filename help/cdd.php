<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Classificação Decimal de Dewey - ';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'Dewey Decimal Classification - ';}
		else if ($_COOKIE['lang'] == 'es')
			{$v = 'Sistema Dewey de clasificación - ';}
		include '../design/metadata.php'; ?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/helpbar.php' ?>
		<?php include '../design/array_lists.php' ?>

		<div class='infocontent help'>
			<h1>
			<?php
				if ($_COOKIE['lang'] == 'pt') {echo "Classificação Decimal de Dewey";}
				if ($_COOKIE['lang'] == 'en') {echo "Dewey Decimal Classification";}
				if ($_COOKIE['lang'] == 'es') {echo "Sistema Dewey de clasificación";}
			?>
			</h1>
			<br />
			<ul>
			<li><a href='help/cdd#000'>Generalidades</a></li>
			<li><a href='help/cdd#100'>Filosofia</a></li>
			<li><a href='help/cdd#200'>Religião</a></li>
			<li><a href='help/cdd#300'>Ciências Sociais</a></li>
			<li><a href='help/cdd#400'>Línguas</a></li>
			<li><a href='help/cdd#500'>Ciências Puras</a></li>
			<li><a href='help/cdd#600'>Ciências Aplicadas</a></li>
			<li><a href='help/cdd#700'>Artes</a></li>
			<li><a href='help/cdd#800'>Literatura</a></li>
			<li><a href='help/cdd#900'>História & Geografia</a></li>
			</ul>
			<br />
			<hr>
			<br />
			<a name='000'></a>
			<h1>Generalidades</h1>
			<br />
			<?php
				foreach ($cddlst as $key => $value) {
					if (strval($key)[0] == '0') {
						echo $key." – ".$value."<br />";
					}
				}
			?>
			<br />
			<hr>
			<br />
			<a name='100'></a>
			<h1>Filosofia</h1>
			<br />
			<?php
				foreach ($cddlst as $key => $value) {
					if (strval($key)[0] == '1') {
						echo $key." – ".$value."<br />";
					}
				}
			?>
			<br />
			<hr>
			<br />
			<a name='200'></a>
			<h1>Religião</h1>
			<br />
			<?php
				foreach ($cddlst as $key => $value) {
					if (strval($key)[0] == '2') {
						echo $key." – ".$value."<br />";
					}
				}
			?>
			<br />
			<hr>
			<br />
			<a name='300'></a>
			<h1>Ciências Sociais</h1>
			<br />
			<?php
				foreach ($cddlst as $key => $value) {
					if (strval($key)[0] == '3') {
						echo $key." – ".$value."<br />";
					}
				}
			?>
			<br />
			<hr>
			<br />
			<a name='400'></a>
			<h1>Línguas</h1>
			<br />
			<?php
				foreach ($cddlst as $key => $value) {
					if (strval($key)[0] == '4') {
						echo $key." – ".$value."<br />";
					}
				}
			?>
			<br />
			<hr>
			<br />
			<a name='500'></a>
			<h1>Ciências Puras</h1>
			<br />
			<?php
				foreach ($cddlst as $key => $value) {
					if (strval($key)[0] == '5') {
						echo $key." – ".$value."<br />";
					}
				}
			?>
			<br />
			<hr>
			<br />
			<a name='600'></a>
			<h1>Ciências Aplicadas</h1>
			<br />
			<?php
				foreach ($cddlst as $key => $value) {
					if (strval($key)[0] == '6') {
						echo $key." – ".$value."<br />";
					}
				}
			?>
			<br />
			<hr>
			<br />
			<a name='700'></a>
			<h1>Artes</h1>
			<br />
			<?php
				foreach ($cddlst as $key => $value) {
					if (strval($key)[0] == '7') {
						echo $key." – ".$value."<br />";
					}
				}
			?>
			<br />
			<hr>
			<br />
			<a name='800'></a>
			<h1>Literatura</h1>
			<br />
			<?php
				foreach ($cddlst as $key => $value) {
					if (strval($key)[0] == '8') {
						echo $key." – ".$value."<br />";
					}
				}
			?>
			<br />
			<hr>
			<br />
			<a name='900'></a>
			<h1>História & Geografia</h1>
			<br />
			<?php
				foreach ($cddlst as $key => $value) {
					if (strval($key)[0] == '9') {
						echo $key." – ".$value."<br />";
					}
				}
			?>
			<br />
			<div class='manlan' lang='pt'> <button class='btpress' onClick='top_scroll()'> Voltar ao topo </button> </div>
			<div class='manlan' lang='en'> <button class='btpress' onClick='top_scroll()'> Go back to top </button> </div>

		</div>

		<?php include '../design/footer.php' ?>
	</body>
</html>
