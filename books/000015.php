<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000015'");
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
			<?php $book = '000015'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Canaã[1] é um livro de Graça Aranha publicado no Brasil pela primeira vez em 1902. O romance-novela aborda a imigração alemã no estado do Espírito Santo, por intermédio do conflito entre dois personagens principais, Milkau e Lentz, que representam diferentes linhas filosóficas.[2]

					Temas como opressão feminina, imperialismo germânico, militarismo, corrupção dos administradores públicos, ostracismo, conflito de adaptação à nova terra são tratados nesse romance.[3]
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>Milkau: </b>.</li>
					<li><b>Lentz: </b>.</li>
					<li><b>Maria: </b>.</li>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Canaã[1] é um livro de Graça Aranha publicado no Brasil pela primeira vez em 1902. O romance-novela aborda a imigração alemã no estado do Espírito Santo, por intermédio do conflito entre dois personagens principais, Milkau e Lentz, que representam diferentes linhas filosóficas.[2]

					Temas como opressão feminina, imperialismo germânico, militarismo, corrupção dos administradores públicos, ostracismo, conflito de adaptação à nova terra são tratados nesse romance.[3]
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>Milkau: </b>.</li>
					<li><b>Lentz: </b>.</li>
					<li><b>Maria: </b>.</li>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Canaã[1] é um livro de Graça Aranha publicado no Brasil pela primeira vez em 1902. O romance-novela aborda a imigração alemã no estado do Espírito Santo, por intermédio do conflito entre dois personagens principais, Milkau e Lentz, que representam diferentes linhas filosóficas.[2]

					Temas como opressão feminina, imperialismo germânico, militarismo, corrupção dos administradores públicos, ostracismo, conflito de adaptação à nova terra são tratados nesse romance.[3]
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>Milkau: </b>.</li>
					<li><b>Lentz: </b>.</li>
					<li><b>Maria: </b>.</li>
					</ul>
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '000015'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'GRACAaranha'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>