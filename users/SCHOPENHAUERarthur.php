<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='SCHOPENHAUERarthur'");
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

		<?php $user = 'SCHOPENHAUERarthur'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Arthur Schopenhauer (Danzig, 22 de fevereiro de 1788 — Frankfurt, 21 de setembro de 1860) foi um filósofo alemão do século XIX. Ele é mais conhecido pela sua obra principal \"O mundo como vontade e representação\" (1818), em que ele caracteriza o mundo fenomenal como o produto de uma cega, insaciável e maligna vontade metafísica. A partir do idealismo transcendental de Imannuel Kant, Schopenhauer desenvolveu um sistema metafísico ateu e ético que tem sido descrito como uma manifestação exemplar de pessimismo filosófico. Schopenhauer foi o filósofo que introduziu o pensamento indiano e alguns dos conceitos budistas na metafísica alemã. Foi fortemente influenciado pela leitura das Upanishads, que foram traduzidas pela primeira vez para o latim por Abraham Hyacinthe Anquetil-Duperron, no início do século XIX.

			Schopenhauer acreditava no amor como meta na vida, mas não acreditava que ele tivesse algo a ver com a felicidade. Era apenas a vontade cega e irracional que todos os seres têm de se reproduzirem, dando assim continuidade à vida e, por conseguinte, ao sofrimento. A sensação de felicidade que o amor traz é apenas o interrompimento temporário do querer, a fuga de uma dor imposta pela vontade. Para Schopenhauer, somente o sofrimento é positivo, pois se faz sentir com facilidade, enquanto que aquilo ao qual chamamos felicidade é negativo, pois é a mera interrupção momentânea da dor ou tédio, sendo estes últimos a condição inerente à existência. Considerava esse impulso de reprodução, esse \"gênio da espécie\", tão forte como o medo da morte, daí que muitos amantes arriscam a vida e a perdem obedecendo a este desejo. Apesar de ser, nos tempos contemporâneos, mais conhecido pela sua obra magna (O Mundo como Vontade e Representação), foi apenas com a publicação de \"Parerga e Paralipomena\", no final de 1851, que ficou amplamente conhecido e famoso ainda em vida. Nesta obra o filósofo discorre sobre uma multitude de assuntos que vão desde temas relacionados ao ensino universitário, à escrita, à sociedade em que vive, revê conceitos que outrora defendia e providencia inúmeros conselhos aos leitores sobre como levar uma vida o mais isente de sofrimento possível.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Arthur_Schopenhauer' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Arthur Schopenhauer (Danzig, 22 de fevereiro de 1788 — Frankfurt, 21 de setembro de 1860) foi um filósofo alemão do século XIX. Ele é mais conhecido pela sua obra principal \"O mundo como vontade e representação\" (1818), em que ele caracteriza o mundo fenomenal como o produto de uma cega, insaciável e maligna vontade metafísica. A partir do idealismo transcendental de Imannuel Kant, Schopenhauer desenvolveu um sistema metafísico ateu e ético que tem sido descrito como uma manifestação exemplar de pessimismo filosófico. Schopenhauer foi o filósofo que introduziu o pensamento indiano e alguns dos conceitos budistas na metafísica alemã. Foi fortemente influenciado pela leitura das Upanishads, que foram traduzidas pela primeira vez para o latim por Abraham Hyacinthe Anquetil-Duperron, no início do século XIX.

			Schopenhauer acreditava no amor como meta na vida, mas não acreditava que ele tivesse algo a ver com a felicidade. Era apenas a vontade cega e irracional que todos os seres têm de se reproduzirem, dando assim continuidade à vida e, por conseguinte, ao sofrimento. A sensação de felicidade que o amor traz é apenas o interrompimento temporário do querer, a fuga de uma dor imposta pela vontade. Para Schopenhauer, somente o sofrimento é positivo, pois se faz sentir com facilidade, enquanto que aquilo ao qual chamamos felicidade é negativo, pois é a mera interrupção momentânea da dor ou tédio, sendo estes últimos a condição inerente à existência. Considerava esse impulso de reprodução, esse \"gênio da espécie\", tão forte como o medo da morte, daí que muitos amantes arriscam a vida e a perdem obedecendo a este desejo. Apesar de ser, nos tempos contemporâneos, mais conhecido pela sua obra magna (O Mundo como Vontade e Representação), foi apenas com a publicação de \"Parerga e Paralipomena\", no final de 1851, que ficou amplamente conhecido e famoso ainda em vida. Nesta obra o filósofo discorre sobre uma multitude de assuntos que vão desde temas relacionados ao ensino universitário, à escrita, à sociedade em que vive, revê conceitos que outrora defendia e providencia inúmeros conselhos aos leitores sobre como levar uma vida o mais isente de sofrimento possível.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Arthur_Schopenhauer' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Arthur Schopenhauer (Danzig, 22 de fevereiro de 1788 — Frankfurt, 21 de setembro de 1860) foi um filósofo alemão do século XIX. Ele é mais conhecido pela sua obra principal \"O mundo como vontade e representação\" (1818), em que ele caracteriza o mundo fenomenal como o produto de uma cega, insaciável e maligna vontade metafísica. A partir do idealismo transcendental de Imannuel Kant, Schopenhauer desenvolveu um sistema metafísico ateu e ético que tem sido descrito como uma manifestação exemplar de pessimismo filosófico. Schopenhauer foi o filósofo que introduziu o pensamento indiano e alguns dos conceitos budistas na metafísica alemã. Foi fortemente influenciado pela leitura das Upanishads, que foram traduzidas pela primeira vez para o latim por Abraham Hyacinthe Anquetil-Duperron, no início do século XIX.

			Schopenhauer acreditava no amor como meta na vida, mas não acreditava que ele tivesse algo a ver com a felicidade. Era apenas a vontade cega e irracional que todos os seres têm de se reproduzirem, dando assim continuidade à vida e, por conseguinte, ao sofrimento. A sensação de felicidade que o amor traz é apenas o interrompimento temporário do querer, a fuga de uma dor imposta pela vontade. Para Schopenhauer, somente o sofrimento é positivo, pois se faz sentir com facilidade, enquanto que aquilo ao qual chamamos felicidade é negativo, pois é a mera interrupção momentânea da dor ou tédio, sendo estes últimos a condição inerente à existência. Considerava esse impulso de reprodução, esse \"gênio da espécie\", tão forte como o medo da morte, daí que muitos amantes arriscam a vida e a perdem obedecendo a este desejo. Apesar de ser, nos tempos contemporâneos, mais conhecido pela sua obra magna (O Mundo como Vontade e Representação), foi apenas com a publicação de \"Parerga e Paralipomena\", no final de 1851, que ficou amplamente conhecido e famoso ainda em vida. Nesta obra o filósofo discorre sobre uma multitude de assuntos que vão desde temas relacionados ao ensino universitário, à escrita, à sociedade em que vive, revê conceitos que outrora defendia e providencia inúmeros conselhos aos leitores sobre como levar uma vida o mais isente de sofrimento possível.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Arthur_Schopenhauer' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='SCHOPENHAUERarthur'; include '../design/poemfind.php'; ?>
		<?php $user = 'SCHOPENHAUERarthur'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>