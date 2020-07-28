<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00002C'");
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
			<?php $book = '00002C'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Pride and Prejudice (br/pt: Orgulho e Preconceito) é um romance da escritora britânica Jane Austen. Publicado pela primeira vez em 1813, na verdade havia sido terminado em 1797, antes de ela completar 21 anos, em Steventon, Hampshire, onde Jane morava com os pais. Originalmente denominado First Impressions, nunca foi publicado sob aquele título; ao fazer a revisão dos escritos, Jane intitulou a obra e a publicou como Pride and Prejudice. Austen pode ter tido em mente o capítulo final do romance de Fanny Burney, Cecilia, chamado \"Pride and Prejudice\".

					A história mostra a maneira com que a personagem Elizabeth Bennet lida com os problemas relacionados à educação, cultura, moral e casamento na sociedade aristocrática do início do século XIX, na Inglaterra. Elizabeth é a segunda de 5 filhas de um proprietário rural na cidade fictícia de Meryton, em Hertfordshire, não muito longe de Londres.

					Apesar de a história se ambientar no século XIX, tem exercido fascínio mesmo nos leitores modernos, continuando no topo da lista dos livros preferidos e sob a consideração da crítica literária. O interesse atual é resultado de um grande número de adaptações e até de pretensas imitações dos temas e personagens abordados por Austen.

					Atualmente, acredita-se que o livro tenha cerca de 2,3 milhões de cópias ao redor do mundo.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Pride and Prejudice (br/pt: Orgulho e Preconceito) é um romance da escritora britânica Jane Austen. Publicado pela primeira vez em 1813, na verdade havia sido terminado em 1797, antes de ela completar 21 anos, em Steventon, Hampshire, onde Jane morava com os pais. Originalmente denominado First Impressions, nunca foi publicado sob aquele título; ao fazer a revisão dos escritos, Jane intitulou a obra e a publicou como Pride and Prejudice. Austen pode ter tido em mente o capítulo final do romance de Fanny Burney, Cecilia, chamado \"Pride and Prejudice\".

					A história mostra a maneira com que a personagem Elizabeth Bennet lida com os problemas relacionados à educação, cultura, moral e casamento na sociedade aristocrática do início do século XIX, na Inglaterra. Elizabeth é a segunda de 5 filhas de um proprietário rural na cidade fictícia de Meryton, em Hertfordshire, não muito longe de Londres.

					Apesar de a história se ambientar no século XIX, tem exercido fascínio mesmo nos leitores modernos, continuando no topo da lista dos livros preferidos e sob a consideração da crítica literária. O interesse atual é resultado de um grande número de adaptações e até de pretensas imitações dos temas e personagens abordados por Austen.

					Atualmente, acredita-se que o livro tenha cerca de 2,3 milhões de cópias ao redor do mundo.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Pride and Prejudice (br/pt: Orgulho e Preconceito) é um romance da escritora britânica Jane Austen. Publicado pela primeira vez em 1813, na verdade havia sido terminado em 1797, antes de ela completar 21 anos, em Steventon, Hampshire, onde Jane morava com os pais. Originalmente denominado First Impressions, nunca foi publicado sob aquele título; ao fazer a revisão dos escritos, Jane intitulou a obra e a publicou como Pride and Prejudice. Austen pode ter tido em mente o capítulo final do romance de Fanny Burney, Cecilia, chamado \"Pride and Prejudice\".

					A história mostra a maneira com que a personagem Elizabeth Bennet lida com os problemas relacionados à educação, cultura, moral e casamento na sociedade aristocrática do início do século XIX, na Inglaterra. Elizabeth é a segunda de 5 filhas de um proprietário rural na cidade fictícia de Meryton, em Hertfordshire, não muito longe de Londres.

					Apesar de a história se ambientar no século XIX, tem exercido fascínio mesmo nos leitores modernos, continuando no topo da lista dos livros preferidos e sob a consideração da crítica literária. O interesse atual é resultado de um grande número de adaptações e até de pretensas imitações dos temas e personagens abordados por Austen.

					Atualmente, acredita-se que o livro tenha cerca de 2,3 milhões de cópias ao redor do mundo.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00002C'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'AUSTENjane'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>