<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000008'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']];
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '000008'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "<a name='goto1'></a>
						<h1> Resenha </h1>
						Cemitério dos Vivos é um romance de Lima Barreto, embora tenha personagens ficcionais, a obra tem alto teor autobiográfico, pois o próprio autor está
						representado no protagonista, por isso muitas confissões do personagem podem ser palavras vindas do próprio Lima Barreto. O livro foi escrito
						em um período de internação do escritor no Hospital Nacional de Alienados no Rio de Janeiro, entre 1919 e 1920, devido ao seus problemas com
						o alcoolismo. Naquele tempo, não havia muita distinção entre um indivíduo com problemas mentais e um simples alcóolatra lúcido de seus atos,
						todos paravam no mesmo local: o hospício. Na obra, Vicente Mascarenhas/Lima Barreto conta como é a vida no hospício, como todos os
						internados são maltratados e humilhados, e conta sua história de vida, marcada por preconceitos, injustiças e tragédias, num tom de revolta.
						<hr>";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<a name='goto1'></a>
						<h1> Review </h1>
						Cemetery of the Living is a novel by Lima Barreto, although it has fictional characters, the work has a high autobiographical content, as the author himself 
						is represented in the protagonist, so many confessions of the character can be words coming from Lima Barreto himself. The book was written
						during a period of hospitalization of the writer at the Hospital Nacional de Alienados in Rio de Janeiro, between 1919 and 1920, due to his problems with
						alcoholism. At that time, there was not much distinction between an individual with mental problems and a simple alcoholic lucid of his actions,
						everyone stopped at the same place: the madhouse. In the work, Vicente Mascarenhas / Lima Barreto tells what life is like in the hospice, like all
						interned are mistreated and humiliated, and tells his life story, marked by prejudices, injustices and tragedies, in a tone of revolt.
						<hr>";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "<a name='goto1'></a>
						<h1> Revisión </h1>
						Cementerio de los Vivos es una novela de Lima Barreto, aunque tiene personajes ficticios, la obra tiene un alto contenido autobiográfico, ya que el propio 
						autor es representado en el protagonista, muchas confesiones del personaje pueden ser palabras que provienen del propio Lima Barreto. El libro fue escrito
						durante un período de hospitalización del escritor en el Hospital Nacional de Alienados en Río de Janeiro, entre 1919 y 1920, debido a sus problemas con
						alcoholismo. En ese momento, no había mucha distinción entre un individuo con problemas mentales y un simple alcohólico lúcido de sus acciones,
						todos se detuvieron en el mismo lugar: el manicomio. En el trabajo, Vicente Mascarenhas / Lima Barreto cuenta cómo es la vida en el hospicio, como todos
						Los internos son maltratados y humillados, y cuenta la historia de su vida, marcada por prejuicios, injusticias y tragedias, en un tono de revuelta.
						<hr>";
					}
				?>
			</div>
			<?php $book = '000008'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'BARRETOlima'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>