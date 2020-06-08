<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='ANDERSENhans'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['name'].' - ';}
				else {$v = $i[$_COOKIE['lang']].' - ';}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<?php $user = 'ANDERSENhans'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Hans Christian Andersen (também conhecido na Escandinávia por H. C. Andersen ou pelo acrônimo H. C. A.) (Odense, 2 de abril de 1805 — Copenhaga, 4 de agosto de 1875)  <br />
			foi um escritor e poeta dinamarquês de histórias infantis.[1] <br />
			 <br />
			Em vida, escreveu peças de teatro, canções patrióticas, contos, histórias, e, principalmente, contos de fadas, pelos quais é mundialmente conhecido.[2] <br />
			Desde o século XIX, seus contos já foram traduzidos para mais de 125 idiomas[3] e inspiraram inúmeras peças de dramaturgia, óperas, sinfonias e filmes. <br />
			 <br />
			Desde 1956, a organização não-governamental suíça International Board on Books for Young People (IBBY) concede o Hans Christian Andersen Award,[4]  <br />
			um prêmio literário batizado em homenagem ao autor, e que é considerado o "Prêmio Nobel da literatura infanto-juvenil". <br />
			 <br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Hans_Christian_Andersen' > Wikipedia </a>
		</div>
		<?php $auctor='ANDERSENhans'; include '../design/poemfind.php'; ?>
		<?php $user = 'ANDERSENhans'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>