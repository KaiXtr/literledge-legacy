<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='LEMINSKIpaulo'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['pt'].' - ';}
				else {$v = $i[$_COOKIE['lang']].' - ';}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'LEMINSKIpaulo'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Paulo Leminski Filho (Curitiba, 24 de agosto de 1944 — Curitiba, 7 de junho de 1989) foi um escritor, poeta, crítico literário, tradutor e professor brasileiro.[1]Tinha uma poesia marcante, pois inventou um jeito próprio de escrever, com trocadilhos, brincadeiras com ditados populares e influência do haicai, além de abusar de gírias e palavrões, tudo de forma bastante instigante.[2] Sob a influência da cultura japonesa, mais precisamente da forma do haicai, de Matsuo Basho, que significa  “hai = brincadeira, gracejo e kai = harmonia, realização”, há destaque para a concisão e objetividade, com seus textos curtos. Leminski era tão influenciado pela cultura japonesa que, além de ser faixa preta em judô, escreveu uma biografia de Basho.[3]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Paulo_Leminski' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Paulo Leminski Filho (Curitiba, 24 de agosto de 1944 — Curitiba, 7 de junho de 1989) foi um escritor, poeta, crítico literário, tradutor e professor brasileiro.[1]Tinha uma poesia marcante, pois inventou um jeito próprio de escrever, com trocadilhos, brincadeiras com ditados populares e influência do haicai, além de abusar de gírias e palavrões, tudo de forma bastante instigante.[2] Sob a influência da cultura japonesa, mais precisamente da forma do haicai, de Matsuo Basho, que significa  “hai = brincadeira, gracejo e kai = harmonia, realização”, há destaque para a concisão e objetividade, com seus textos curtos. Leminski era tão influenciado pela cultura japonesa que, além de ser faixa preta em judô, escreveu uma biografia de Basho.[3]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Paulo_Leminski' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Paulo Leminski Filho (Curitiba, 24 de agosto de 1944 — Curitiba, 7 de junho de 1989) foi um escritor, poeta, crítico literário, tradutor e professor brasileiro.[1]Tinha uma poesia marcante, pois inventou um jeito próprio de escrever, com trocadilhos, brincadeiras com ditados populares e influência do haicai, além de abusar de gírias e palavrões, tudo de forma bastante instigante.[2] Sob a influência da cultura japonesa, mais precisamente da forma do haicai, de Matsuo Basho, que significa  “hai = brincadeira, gracejo e kai = harmonia, realização”, há destaque para a concisão e objetividade, com seus textos curtos. Leminski era tão influenciado pela cultura japonesa que, além de ser faixa preta em judô, escreveu uma biografia de Basho.[3]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Paulo_Leminski' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='LEMINSKIpaulo'; include '../design/poemfind.php'; ?>
		<?php $user = 'LEMINSKIpaulo'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>