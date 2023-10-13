<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000019'");
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
			<?php $book = '000019'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Suicídio é um livro que foi um dos pilares no campo da sociologia. Escrito pelo sociólogo Francês Émile Durkheim e publicado em 1897, foi um estudo de caso sobre o suicídio, publicação única em sua época, que trouxe um exemplo de como uma monografia sociológica deveria ser escrita.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>: </b>.</li>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Suicídio é um livro que foi um dos pilares no campo da sociologia. Escrito pelo sociólogo Francês Émile Durkheim e publicado em 1897, foi um estudo de caso sobre o suicídio, publicação única em sua época, que trouxe um exemplo de como uma monografia sociológica deveria ser escrita.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>: </b>.</li>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Suicídio é um livro que foi um dos pilares no campo da sociologia. Escrito pelo sociólogo Francês Émile Durkheim e publicado em 1897, foi um estudo de caso sobre o suicídio, publicação única em sua época, que trouxe um exemplo de como uma monografia sociológica deveria ser escrita.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>: </b>.</li>
					</ul>
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '000019'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'DURKHEIMemile'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>