<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='DESCARTESrene'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['name'].' - ';}
				else {$v = $i[$_COOKIE['lang']].' - ';}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'DESCARTESrene'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				René Descartes (La Haye en Touraine, 31 de março de 1596 – Estocolmo, 11 de fevereiro de 1650) foi um filósofo, físico e matemático francês.[1] Durante a Idade Moderna, também era conhecido por seu nome latino Renatus Cartesius.

				Notabilizou-se sobretudo por seu trabalho revolucionário na filosofia e na ciência, mas também obteve reconhecimento matemático por sugerir a fusão da álgebra com a geometria - fato que gerou a geometria analítica e o sistema de coordenadas que hoje leva o seu nome. Por fim, foi também uma das figuras-chave na Revolução Científica.

				Descartes, por vezes chamado de "o fundador da filosofia moderna" e o "pai da matemática moderna", é considerado um dos pensadores mais importantes e influentes da História do Pensamento Ocidental. Inspirou contemporâneos e várias gerações de filósofos posteriores; boa parte da filosofia escrita a partir de então foi uma reação às suas obras ou a autores supostamente influenciados por ele. Muitos especialistas afirmam que, a partir de Descartes, inaugurou-se o racionalismo da Idade Moderna.[2] Décadas mais tarde, surgiria nas Ilhas Britânicas um movimento filosófico que, de certa forma, seria o seu oposto - o empirismo, com John Locke e David Hume.
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Ren%C3%A9_Descartes' > Wikipedia </a>
			</div>
			<div class='manlan' lang='en'>
				Hot dog yea trup united states uhuuuu rockn roll <br />
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Esopo' > Wikipedia </a>
			</div>
		</div>
		<?php $auctor='DESCARTESrene'; include '../design/poemfind.php'; ?>
		<?php $user = 'DESCARTESrene'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>