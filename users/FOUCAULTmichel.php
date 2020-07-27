<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='FOUCAULTmichel'");
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

		<?php $user = 'FOUCAULTmichel'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Michel Foucault (pronúncia francesa:IPA: [miʃɛl fuko]); Poitiers, 15 de outubro de 1926 — Paris, 25 de junho de 1984) foi um filósofo, historiador das ideias, teórico social, filólogo, crítico literário e professor da cátedra História dos Sistemas do Pensamento, no célebre Collège de France, de 1970 até 1984 (ano da sua morte)[1]. Suas teorias abordam a relação entre poder e conhecimento e como eles são usados ​​como uma forma de controle social por meio de instituições sociais. Embora muitas vezes seja citado como um pós-estruturalista e pós-modernista, Foucault acabou rejeitando esses rótulos, preferindo classificar seu pensamento como uma história crítica da modernidade. Seu pensamento foi muito influente tanto para grupos acadêmicos, quanto para ativistas.[2]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Michel_Foucault' > Wikipedia </a>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Michel Foucault (pronúncia francesa:IPA: [miʃɛl fuko]); Poitiers, 15 de outubro de 1926 — Paris, 25 de junho de 1984) foi um filósofo, historiador das ideias, teórico social, filólogo, crítico literário e professor da cátedra História dos Sistemas do Pensamento, no célebre Collège de France, de 1970 até 1984 (ano da sua morte)[1]. Suas teorias abordam a relação entre poder e conhecimento e como eles são usados ​​como uma forma de controle social por meio de instituições sociais. Embora muitas vezes seja citado como um pós-estruturalista e pós-modernista, Foucault acabou rejeitando esses rótulos, preferindo classificar seu pensamento como uma história crítica da modernidade. Seu pensamento foi muito influente tanto para grupos acadêmicos, quanto para ativistas.[2]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Michel_Foucault' > Wikipedia </a>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Michel Foucault (pronúncia francesa:IPA: [miʃɛl fuko]); Poitiers, 15 de outubro de 1926 — Paris, 25 de junho de 1984) foi um filósofo, historiador das ideias, teórico social, filólogo, crítico literário e professor da cátedra História dos Sistemas do Pensamento, no célebre Collège de France, de 1970 até 1984 (ano da sua morte)[1]. Suas teorias abordam a relação entre poder e conhecimento e como eles são usados ​​como uma forma de controle social por meio de instituições sociais. Embora muitas vezes seja citado como um pós-estruturalista e pós-modernista, Foucault acabou rejeitando esses rótulos, preferindo classificar seu pensamento como uma história crítica da modernidade. Seu pensamento foi muito influente tanto para grupos acadêmicos, quanto para ativistas.[2]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Michel_Foucault' > Wikipedia </a>
			<br />
					";
				}
			?>
		</div>
		<?php $auctor='FOUCAULTmichel'; include '../design/poemfind.php'; ?>
		<?php $user = 'FOUCAULTmichel'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>