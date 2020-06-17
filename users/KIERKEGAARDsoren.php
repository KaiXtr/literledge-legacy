<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='KIERKEGAARDsoren'");
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

		<?php $user = 'KIERKEGAARDsoren'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				Sören Aabye Kierkegaard ( /ˈsɒrən ˈkɪərkəɡɑːrd/ pronúncia SORR-ən KEER-kə-gard; Copenhague, 5 de maio de 1813 — Copenhague, 11 de novembro de 1855) foi um filósofo, teólogo, poeta e crítico social dinamarquês, amplamente considerado o primeiro filósofo existencialista.[1] Durante sua carreira ele escreveu textos críticos sobre religião organizada, cristianismo, moralidade, ética, psicologia, e filosofia da religião, mostrando um gosto particular por figuras de linguagem como a metáfora, a ironia e a alegoria. Grande parte do seu trabalho filosófico aborda as questões de como alguém vive sendo um "único indivíduo", priorizando a realidade humana concreta sobre o pensamento abstrato e destacando a importância da escolha e do comprometimento pessoal.[2] Ele se posicionou contra os críticos literários chamados de idealistas e contra filósofos de seu tempo. Para ele, intelectuais como Swedenborg,[3] Hegel,[4] Goethe, Fichte, Schelling, August Schlegel e Hans Christian Andersen foram todos considerados "scholars" prematuramente.[5]

				O trabalho teológico de Kierkegaard centra-se na ética cristã, na instituição da igreja, nas diferenças entre provas puramente objetivas do cristianismo, na distinção qualitativa infinita entre o homem, Deus (a finitude e temporalidade do homem em contraste com a infinitude e eternidade de Deus), e a relação subjetiva do indivíduo com o Deus-homem Jesus Cristo,[6] que veio por meio da fé.[7][8] Grande parte de seu trabalho trata do amor cristão. Ele foi extremamente crítico com a prática do cristianismo como uma religião de Estado, sobretudo com a posição da Igreja da Dinamarca. O seu trabalho psicológico explorou as emoções e os sentimentos dos indivíduos diante das escolhas da vida.[9]

				O trabalho inicial de Kierkegaard foi escrito sob diversos pseudônimos que ele usava para apresentar pontos de vista distintos e interagir uns com os outros em um diálogo complexo.[10] Ele explorou problemas particularmente complexos a partir de diferentes pontos de vista, cada um sob um pseudônimo diferente. Ele escreveu muitos de seus Discursos de Edificação sob seu próprio nome e os dedicou ao "indivíduo único" que pode querer descobrir o significado de suas obras. Notavelmente, ele escreveu: "A ciência[11] e o método escolar querem ensinar que o objetivo é o caminho. O cristianismo ensina que o caminho é tornar-se subjetivo, tornar-se um sujeito".[12] Embora os cientistas possam aprender sobre o mundo pela observação, Kierkegaard negou enfaticamente que essa observação poderia revelar o funcionamento interno do mundo do espírito.[13]

				Algumas das idéias-chave de Kierkegaard incluem o conceito de "verdades subjetivas e objetivas", o cavaleiro da fé, a dicotomia de recordação e repetição, a Angst (angústia), a infinita distinção qualitativa, a fé como paixão, e as três etapas do caminho da vida. Kierkegaard escreveu em dinamarquês, e a recepção de seu trabalho foi inicialmente limitada à Escandinávia, mas, no final do século XX, seus escritos foram traduzidos para o francês, o alemão e outras grandes línguas européias. Em meados do século XX, seu pensamento passou a exercer uma influência substancial sobre a filosofia,[14] teologia[15] e toda a cultura ocidental.[16] De acordo com Ludwig Wittgenstein, Kierkegaard foi o filósofo mais profundo do século XIX.[17]
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/S%C3%B6ren_Kierkegaard' > Wikipedia </a>
			</div>
		</div>
		<?php $auctor='KIERKEGAARDsoren'; include '../design/poemfind.php'; ?>
		<?php $user = 'KIERKEGAARDsoren'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>