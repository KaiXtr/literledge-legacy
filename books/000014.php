<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000014'");
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
			<?php $book = '000014'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Cartas Chilenas são poemas satíricos, em versos decassílabos brancos (sem rimas), que circularam em Vila Rica em manuscritos, poucos anos antes da Inconfidência Mineira, em 1789. Revelando seu lado satírico, num tom mordaz, agressivo, jocoso, pleno de alusões e máscaras, o poeta satiriza ferinamente a mediocridade administrativa, os desmandos dos componentes do governo, o governador de Minas e a Independência do Brasil.

					Critilo é um habitante de Santiago do Chile (na verdade Vila Rica) que narra ao amigo Doroteu os desmandos despóticos e narcisistas do governador chileno Fanfarrão Minésio (na realidade, Luís da Cunha Meneses, governador de Minas até a Inconfidência Mineira). São conhecidas treze cartas, sendo que sete foram impressas pela primeira vez em 1845, por iniciativa do escritor chileno Santiago Nunes Ribeiro. A totalidade das cartas teve a publicação em 1863, por Luís Francisco da Veiga, seguindo um manuscrito de seu pai, Saturnino da Veiga, que fora contemporâneo dos Inconfidentes[1].

					Por bastante tempo discutiu-se a autoria das Cartas Chilenas. A dúvida só acabou após estudos de Afonso Arinos (1940) e, principalmente, de Rodrigues Lapa, comparando a obra com cada um dos elementos do \"Grupo Mineiro\", possíveis autores, quando se concluiu que o verdadeiro autor é Tomás Antônio Gonzaga, que ocupara o cargo de Ouvidor e que sofrera contrariedades pelos atos do governador. Assim,Critilo é ele mesmo e Doroteu, Cláudio Manuel da Costa. Manoel Bandeira também apontou Gonzaga como autor, em trabalho publicado no número 22, de abril de 1940, da Revista do Brasil[1]. Especula-se que a obra tenha sido influenciada por Cartas Persas, de Montesquieu.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>Critilo: </b>.</li>
					<li><b>Doroteu: </b>.</li>
					<li><b>Fanfarrão Minésio: </b>.</li>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Cartas Chilenas são poemas satíricos, em versos decassílabos brancos (sem rimas), que circularam em Vila Rica em manuscritos, poucos anos antes da Inconfidência Mineira, em 1789. Revelando seu lado satírico, num tom mordaz, agressivo, jocoso, pleno de alusões e máscaras, o poeta satiriza ferinamente a mediocridade administrativa, os desmandos dos componentes do governo, o governador de Minas e a Independência do Brasil.

					Critilo é um habitante de Santiago do Chile (na verdade Vila Rica) que narra ao amigo Doroteu os desmandos despóticos e narcisistas do governador chileno Fanfarrão Minésio (na realidade, Luís da Cunha Meneses, governador de Minas até a Inconfidência Mineira). São conhecidas treze cartas, sendo que sete foram impressas pela primeira vez em 1845, por iniciativa do escritor chileno Santiago Nunes Ribeiro. A totalidade das cartas teve a publicação em 1863, por Luís Francisco da Veiga, seguindo um manuscrito de seu pai, Saturnino da Veiga, que fora contemporâneo dos Inconfidentes[1].

					Por bastante tempo discutiu-se a autoria das Cartas Chilenas. A dúvida só acabou após estudos de Afonso Arinos (1940) e, principalmente, de Rodrigues Lapa, comparando a obra com cada um dos elementos do \"Grupo Mineiro\", possíveis autores, quando se concluiu que o verdadeiro autor é Tomás Antônio Gonzaga, que ocupara o cargo de Ouvidor e que sofrera contrariedades pelos atos do governador. Assim,Critilo é ele mesmo e Doroteu, Cláudio Manuel da Costa. Manoel Bandeira também apontou Gonzaga como autor, em trabalho publicado no número 22, de abril de 1940, da Revista do Brasil[1]. Especula-se que a obra tenha sido influenciada por Cartas Persas, de Montesquieu.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>Critilo: </b>.</li>
					<li><b>Doroteu: </b>.</li>
					<li><b>Fanfarrão Minésio: </b>.</li>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Cartas Chilenas são poemas satíricos, em versos decassílabos brancos (sem rimas), que circularam em Vila Rica em manuscritos, poucos anos antes da Inconfidência Mineira, em 1789. Revelando seu lado satírico, num tom mordaz, agressivo, jocoso, pleno de alusões e máscaras, o poeta satiriza ferinamente a mediocridade administrativa, os desmandos dos componentes do governo, o governador de Minas e a Independência do Brasil.

					Critilo é um habitante de Santiago do Chile (na verdade Vila Rica) que narra ao amigo Doroteu os desmandos despóticos e narcisistas do governador chileno Fanfarrão Minésio (na realidade, Luís da Cunha Meneses, governador de Minas até a Inconfidência Mineira). São conhecidas treze cartas, sendo que sete foram impressas pela primeira vez em 1845, por iniciativa do escritor chileno Santiago Nunes Ribeiro. A totalidade das cartas teve a publicação em 1863, por Luís Francisco da Veiga, seguindo um manuscrito de seu pai, Saturnino da Veiga, que fora contemporâneo dos Inconfidentes[1].

					Por bastante tempo discutiu-se a autoria das Cartas Chilenas. A dúvida só acabou após estudos de Afonso Arinos (1940) e, principalmente, de Rodrigues Lapa, comparando a obra com cada um dos elementos do \"Grupo Mineiro\", possíveis autores, quando se concluiu que o verdadeiro autor é Tomás Antônio Gonzaga, que ocupara o cargo de Ouvidor e que sofrera contrariedades pelos atos do governador. Assim,Critilo é ele mesmo e Doroteu, Cláudio Manuel da Costa. Manoel Bandeira também apontou Gonzaga como autor, em trabalho publicado no número 22, de abril de 1940, da Revista do Brasil[1]. Especula-se que a obra tenha sido influenciada por Cartas Persas, de Montesquieu.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>Critilo: </b>.</li>
					<li><b>Doroteu: </b>.</li>
					<li><b>Fanfarrão Minésio: </b>.</li>
					</ul>
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '000014'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'ANTONIOgonzaga'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>