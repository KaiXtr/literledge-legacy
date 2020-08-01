<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='FREYREgilberto'");
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
		<?php $user = 'FREYREgilberto'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Gilberto de Mello Freyre[1] KBE • GCC • GCSE (Recife, 15 de março de 1900 — Recife, 18 de julho de 1987) foi um polímata brasileiro. Como escritor, dedicou-se à ensaística da interpretação do Brasil sob ângulos da sociologia, antropologia e história. Foi também autor de ficção, jornalista, poeta e pintor. É considerado um dos mais importantes sociólogos do século XX.[2][3]

Gilberto Freyre foi o intelectual mais premiado da história do país. Foi laureado com o Prêmio Aspen, honraria que consagra \"indivíduos notáveis por contribuições excepcionalmente valiosas para a cultura humana”. Recebeu ainda o prêmio italiano La Madonnina.[4] Dentre outros prêmios e honrarias, recebeu a Ordem do Império Britânico, o Prêmio Jabuti de Literatura, o Prêmio Machado de Assis da Academia Brasileira de Letras, o Prêmio de Excelência Literária da Academia Paulistana de Letras, medalhas de Portugal e da Espanha e a Ordem Nacional da Legião de Honra da França. Sagrou-se ainda imortal da Academia Pernambucana de Letras.[5]

Sobre Freyre, falou Monteiro Lobato: \"O Brasil do futuro não vai ser o que os velhos historiadores disserem e os de hoje repetem. Vai ser o que Gilberto Freyre disser. Freyre é um dos gênios de paleta mais rica e iluminante que estas terras antárticas ainda produziram\".[6]";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Gilberto de Mello Freyre KBE (March 15, 1900 – July 18, 1987) was a Brazilian sociologist, anthropologist, historian, writer, painter, journalist and congressman, born in Recife, Northeast Brazil. He is commonly associated with other major Brazilian cultural interpreters of the first half of the 20th century, such as Sérgio Buarque de Holanda and Caio Prado Júnior. His best-known work is a sociological treatise named Casa-Grande & Senzala (variously translated, but roughly The Main House and the Slave Quarters, as on a traditional plantation). Two sequels followed, The Mansions & the Shanties: The Making of Modern Brazil and Order & Progress: Brazil from Monarchy to Republic. The trilogy is generally considered a classic of modern cultural anthropology and social history, although it is not without its critics.";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Gilberto de Mello Freyre (Recife, 15 de marzo de 1900 — Recife, 18 de julio de 1987) fue un sociólogo, antropólogo y escritor brasileño, autor de Casa-grande y senzala, influyente ensayo sobre la formación de la sociedad brasileña.";
				}
			?>
		</div>
		<?php $auctor='FREYREgilberto'; include '../design/poemfind.php'; ?>
		<?php $user = 'FREYREgilberto'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>