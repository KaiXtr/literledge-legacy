<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000006'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']].' - ';
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '000006'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "<a name='goto1'></a>
						<h1> Resenha </h1>
						O Homem que Sabia Javanês é um conto de humor escrito por Lima Barreto, publicado pela primeira vez em 28 de abril de 1911,
						no jornal Gazeta da Tarde do Rio de Janeiro. Mais tarde este e outros contos de Lima Barreto seriam incluídos na coletânea
						\"O Homem que Sabia Javanês e outros contos\". O conto critica a postura de muitos intelectuais e diplomáticos da época, retratados no conto através do 
						protagonista Castelo, um oportunista que engana os outros para se auto promover.
						<hr>
						<a name='goto2'></a>
						<h1> Adaptações </h1>
						<ul>
						<li>O Homem que Sabia Javanês (1988) - Maurício Buffa.</li>
						<li>1994: Especial de televisão exibido no programa Terça Nobre da Rede Globo.</li>
						<li><a href='https://filmow.com/o-homem-que-sabia-javanes-t38348/'>O Homem que Sabia Javanês (2004) - Xavier de Oliveira
						</a></li>
						</ul>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<a name='goto1'></a>
						<h1> Review </h1>
						The Man Who Spoke Javanese is a humor tale written by Lima Barreto, first published on April 28, 1911,
						in the Gazeta da Tarde newspaper in Rio de Janeiro. Later this and other stories by Lima Barreto would be included in the collection
						\"The Man Who Spoke Javanese and other stories\". The tale criticizes the posture of many intellectuals and diplomats of the time, portrayed in the tale 
						through the protagonist Castelo, an opportunist who deceives others to promote himself.
						<hr>
						<a name='goto2'> </a>
						<h1> Adaptations </h1>
						<ul>
						<li>O Homem que Sabia Javanês (1988) - Maurício Buffa. </li>
						<li>1994: Television special shown on Rede Globo's Tuesday Nobre program. </li>
						<li><a href='https://filmow.com/o-homem-que-sabia-javanes-t38348/'> O Homem que Sabia Javanês (2004) - Xavier de Oliveira
						</a></li>
						</ul>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "<a name='goto1'></a>
						<h1> Revisión </h1>
						O Homem que Hablava Javanés es una historia de humor escrita por Lima Barreto, publicada por primera vez el 28 de abril de 1911.
						en el periódico Gazeta da Tarde en Río de Janeiro. Más tarde, esta y otras historias de Lima Barreto se incluirían en la colección.
						\"O Homem que Hablava Javanés y otras historias\". El cuento critica la postura de muchos intelectuales y diplomáticos de la época, retratada en el cuento a 
						través del protagonista Castelo, un oportunista que engaña a otros para promocionarse.
						<hr>
						<a name='goto2'> </a>
						<h1> Adaptaciones </h1>
						<ul>
						<li>O Homem que Sabia Javanês (1988) - Maurício Buffa. </li>
						<li>1994: Se muestra un especial de televisión en el programa Tuesday Nobre de Rede Globo. </li>
						<li><a href='https://filmow.com/o-homem-que-sabia-javanes-t38348/'> O Homem que Sabia Javanês (2004) - Xavier de Oliveira
						</a> </li>
						</ul>
						<hr>";
					}
				?>
			</div>
			<?php $book = '000006'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'BARRETOlima'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>