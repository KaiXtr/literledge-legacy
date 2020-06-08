<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000011'");
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
			<?php $book = '000011'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Viagem ao Centro Da Terra (em língua francesa: Voyage au Centre de la Terre) é um livro de ficção científica, de autoria do escritor francês Júlio Verne, lançado em 1864 e considerado como um dos clássicos do gênero.[1] Uma obra que leva o leitor dentro de uma emocionante aventura narrada em primeira pessoa por Axel, um garoto que participa do percurso ao centro da terra, realizado graças a um manuscrito decifrado pelo próprio.[1] O volume é um exemplo de como um escritor pode transitar pelo real e pelo ficcional de forma muito bem estruturada e, com isso, deixar solto para o leitor pensar no que pode acontecer na realidade. O trabalho de Verne foi digno por discutir em seus livros certos assuntos científicos, os quais ainda não se sabiam em sua época.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li>Professor Otto Lidenbrock: Cientista alemão, corajoso, curioso, bravo e impaciente</li>
					<li>Axel: sobrinho de Otto Lidenbrock</li>
					<li>Grauben: amada de Axel e afilhada do professor</li>
					<li>Hans: Guia e acompanha Axel e Prof. Lidenbrock em sua jornada</li>
					<li>Marthe: empregada da casa do professor</li>
					</ul>
					<hr>
					<a name='goto3'></a>
					<h1> Adaptações </h1>
					<ul>
					<li>O filme de 1959 Journey to the Center of the Earth foi dirigido por Henry Levin.</li>
					<li>Em 2008, o livro foi adaptado para o cinema, com James Mason e os atores Brendan Fraser, Josh Hutcherson, Anita Briem, Seth Meyers.</li>
					</ul>
					<hr>
				</div>
			</div>
			<?php $book = '000011'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'VERNEjules'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>