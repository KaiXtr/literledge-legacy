<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='JMBARIE'");
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

		<?php $user = 'JMBARIE'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Sir James Matthew Barrie, 1º baronete, OM (Kirriemuir, Escócia, 9 de maio de 1860 — Londres, Inglaterra, 19 de junho de 1937), muitas vezes referido como J. M. Barrie, foi um escritor e dramaturgo britânico nascido na Escócia. Nascido no pequeno condado escocês de Angus, Barrie frequentou a Glasgow Academy e a University of Edinburgh, até se mudar para Londres em 1885, para seguir carreira de dramaturgo e escritor. Escreveu diversas peças teatrais e livros durante quase toda a vida, em sua maioria voltada para o público adulto, inclusive a peça, ao contrário do como é referido comumente, The Boy Who Wouldn't Grow Up (O Menino Que Nunca Quis Crescer, em português), de 1904, que deu origem ao famoso personagem Peter Pan, sua mais célebre e famosa criação, um menino criado pelas fadas que conseguia voar e vivia em uma terra mágica chamada Neverland (ou Terra do Nunca, como é conhecido nos países lusófonos), onde não envelhecia jamais. Porém, só em 1911 o romance Peter and Wendy ou simplesmente Peter Pan, foi publicado em livro, narrando a clássica história dos irmãos Darling, Wendy, João e Miguel (Wendy, John e Michael, em inglês) que acompanham Peter Pan em uma jornada pela Terra do Nunca, onde enfrentam piratas, liderados pelo Capitão Gancho. Antes disso Barrie escreveu os romances Little White Bird (1902) e Peter Pan in Kensington Gardens (1906), ambos inspirados no personagem, narrando suas aventuras no Jardins de Kensington, em Londres.

Acredita-se que Barrie tenha se inspirado em sua amizade com os filhos de Sylvia Llewelyn Davies, uma dona de casa viúva a quem o escritor conheceu por acaso, para criar o mundo mágico de Peter Pan. De fato, Barrie se tornou tutor dos garotos depois da morte de Sylvia até sua morte em 1937, devido a uma forte pneumonia; Em vida, doou os direitos autorais da história de Peter Pan ao hospital pediátrico Great Ormond Street.";}
				if ($_COOKIE['lang'] == 'en') {
					echo "Sir James Matthew Barrie, 1st baronet, OM (Kirriemuir, Scotland, 9 May 1860 - London, England, 19 June 1937), often referred to as J. M. Barrie, was a Scottish-born British writer and playwright. Born in the small Scottish county of Angus, Barrie attended Glasgow Academy and the University of Edinburgh, until he moved to London in 1885 to pursue a career as a playwright and writer. He wrote several plays and books throughout most of his life, mostly aimed at the adult audience, including the play, contrary to what is commonly referred to, The Boy Who Wouldn't Grow Up, in Portuguese), from 1904, which gave rise to the famous character Peter Pan, his most celebrated and famous creation, a boy created by the fairies who managed to fly and lived in a magical land called Neverland (or Neverland, as it is known in Portuguese-speaking countries) ), where he never aged. However, it was not until 1911 that the novel Peter and Wendy or simply Peter Pan was published in a book, narrating the classic story of the Darling brothers, Wendy, João and Miguel (Wendy, John and Michael, in English) who accompany Peter Pan on a journey through Neverland, where they face pirates, led by Captain Hook. Before that Barrie wrote the novels Little White Bird (1902) and Peter Pan in Kensington Gardens (1906), both inspired by the character, narrating his adventures in London's Kensington Gardens.

Barrie is believed to have been inspired by his friendship with the children of Sylvia Llewelyn Davies, a widowed housewife whom the writer happened to meet, to create Peter Pan's magical world. In fact, Barrie became the boys' tutor after Sylvia's death until her death in 1937, due to severe pneumonia; In his lifetime, he donated the copyright to Peter Pan's story to the Great Ormond Street Children's Hospital.";}
				if ($_COOKIE['lang'] == 'es') {
					echo "Sir James Matthew Barrie, primer baronet, OM (Kirriemuir, Escocia, 9 de mayo de 1860 - Londres, Inglaterra, 19 de junio de 1937), conocido a menudo como J. M. Barrie, fue un escritor y dramaturgo británico nacido en Escocia. Nacido en el pequeño condado escocés de Angus, Barrie asistió a la Academia de Glasgow y la Universidad de Edimburgo, hasta que se mudó a Londres en 1885 para seguir una carrera como dramaturgo y escritor. Escribió varias obras de teatro y libros a lo largo de la mayor parte de su vida, principalmente dirigidos a la audiencia adulta, incluida la obra, al contrario de lo que comúnmente se conoce, El niño que no crecería, en Portugués), de 1904, que dio origen al famoso personaje Peter Pan, su creación más famosa y famosa, un niño creado por las hadas que logró volar y vivió en una tierra mágica llamada Neverland (o Neverland, como se le conoce en los países de habla portuguesa) ), donde nunca envejeció. Sin embargo, no fue hasta 1911 que la novela Peter and Wendy o simplemente Peter Pan se publicó en un libro, narrando la historia clásica de los hermanos Darling, Wendy, João y Miguel (Wendy, John y Michael, en inglés) que acompañan a Peter Pan en un viaje a través de Neverland, donde se enfrentan a piratas, liderados por el Capitán Garfio. Antes de eso, Barrie escribió las novelas Little White Bird (1902) y Peter Pan en Kensington Gardens (1906), ambas inspiradas en el personaje, narrando sus aventuras en los Kensington Gardens de Londres.

Se cree que Barrie se inspiró en su amistad con los hijos de Sylvia Llewelyn Davies, una ama de casa viuda a quien el escritor conoció, para crear el mundo mágico de Peter Pan. De hecho, Barrie se convirtió en el tutor de los niños. después de la muerte de Sylvia hasta su muerte en 1937, debido a una neumonía severa; En su vida, donó los derechos de autor de la historia de Peter Pan al Hospital de Niños Great Ormond Street.";}
			?>
		</div>
		<?php $auctor='JMBARIE'; include '../design/poemfind.php'; ?>
		<?php $user = 'JMBARIE'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>