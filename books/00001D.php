<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001D'");
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
			<?php $book = '00001D'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Ubirajara é um livro de romance do escritor brasileiro José de Alencar publicado em 1874.

					Caracteriza-se pelo enredo que mostra o \"primeiro termo\" da tríade indianista de José de Alencar, onde sua personagem principal é um índio brasileiro puro, que ainda não se corrompeu perante à cultura europeia.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>Ubirajara: </b>personagem protagonista, é o herói do livro. Aparece nos capítulos iniciais com o nome de Jaguarê, guerreiro da tribo dos araguaias, antes de se tornar \"o senhor da lança\", Ubirajara e chefe de sua tribo em substituição ao pai, depois de ter vencido Pojucã. Quando vai servir Itaquê para obter como esposa Araci, o nome adotado por ele entre os tocantins é Jurandir.</li>
					<li><b>Jandira: </b>virgem Araguaia, da tribo de Jaguaré, filha de Magé, uma das mais belas virgens da tribo de nosso herói, e a ele prometida em casamento. Ubirajara a despreza, apaixonado por Araci e, após surpreende-la tentando matar a amada, transforma-a em escrava dela.</li>
					<li><b>Araci: </b>a estrela do dia, filha do chefe dos Tocantins, Itaquê. Os guerreiros da tribo servem ao pai para que este escolha a um deles como marido de Araci. Ela se apaixona por Ubirajara.</li>
					<li><b>Pojucã: </b>Em tupi, seu nome significa \"eu mato gente\"; é um forte guerreiro tocantim e irmão de Araci. É através dele que Jaguaré torna-se Ubirajara, pois na luta que ambos têm, Ubirajara saiu-se vencedor absoluto, deixando de ser caçador para tornar-se líder de sua gente.</li>
					<li><b>Itaquê: </b>chefe tocantim, pai de Araci, homem honrado e leal aos princípios de sua gente.</li>
					<li><b>Jacamim: </b>mãe de Araci e Pojucan. Ela, como todas as mulheres da tribo, encarrega-se do plantio da terra e, segundo a tradição tocantim, transmite sua fertilidade à terra. Não exige a fidelidade do marido, que tem outras mulheres.</li>
					<li><b>Camacã: </b>pai de Ubirajara, chefe da tribo Araguaia, que transmitirá ao filho a sua função.</li>
					<li><b>Canicran: </b>chefe dos tapuias; Itaquê o vence numa luta e abre sua cabeça em duas metades.</li>
					<li><b>Pahã: </b>É o filho mais novo de Canicran, vinga o pai e cega Itaquê a flechadas. É importante para a trama porque vai permitir que os Tocantins fiquem sem chefe, o que faz com que Ubirajara possa impor-se como chefe e unir as duas tribos.</li>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Ubirajara é um livro de romance do escritor brasileiro José de Alencar publicado em 1874.

					Caracteriza-se pelo enredo que mostra o \"primeiro termo\" da tríade indianista de José de Alencar, onde sua personagem principal é um índio brasileiro puro, que ainda não se corrompeu perante à cultura europeia.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>Ubirajara: </b>personagem protagonista, é o herói do livro. Aparece nos capítulos iniciais com o nome de Jaguarê, guerreiro da tribo dos araguaias, antes de se tornar \"o senhor da lança\", Ubirajara e chefe de sua tribo em substituição ao pai, depois de ter vencido Pojucã. Quando vai servir Itaquê para obter como esposa Araci, o nome adotado por ele entre os tocantins é Jurandir.</li>
					<li><b>Jandira: </b>virgem Araguaia, da tribo de Jaguaré, filha de Magé, uma das mais belas virgens da tribo de nosso herói, e a ele prometida em casamento. Ubirajara a despreza, apaixonado por Araci e, após surpreende-la tentando matar a amada, transforma-a em escrava dela.</li>
					<li><b>Araci: </b>a estrela do dia, filha do chefe dos Tocantins, Itaquê. Os guerreiros da tribo servem ao pai para que este escolha a um deles como marido de Araci. Ela se apaixona por Ubirajara.</li>
					<li><b>Pojucã: </b>Em tupi, seu nome significa \"eu mato gente\"; é um forte guerreiro tocantim e irmão de Araci. É através dele que Jaguaré torna-se Ubirajara, pois na luta que ambos têm, Ubirajara saiu-se vencedor absoluto, deixando de ser caçador para tornar-se líder de sua gente.</li>
					<li><b>Itaquê: </b>chefe tocantim, pai de Araci, homem honrado e leal aos princípios de sua gente.</li>
					<li><b>Jacamim: </b>mãe de Araci e Pojucan. Ela, como todas as mulheres da tribo, encarrega-se do plantio da terra e, segundo a tradição tocantim, transmite sua fertilidade à terra. Não exige a fidelidade do marido, que tem outras mulheres.</li>
					<li><b>Camacã: </b>pai de Ubirajara, chefe da tribo Araguaia, que transmitirá ao filho a sua função.</li>
					<li><b>Canicran: </b>chefe dos tapuias; Itaquê o vence numa luta e abre sua cabeça em duas metades.</li>
					<li><b>Pahã: </b>É o filho mais novo de Canicran, vinga o pai e cega Itaquê a flechadas. É importante para a trama porque vai permitir que os Tocantins fiquem sem chefe, o que faz com que Ubirajara possa impor-se como chefe e unir as duas tribos.</li>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Ubirajara é um livro de romance do escritor brasileiro José de Alencar publicado em 1874.

					Caracteriza-se pelo enredo que mostra o \"primeiro termo\" da tríade indianista de José de Alencar, onde sua personagem principal é um índio brasileiro puro, que ainda não se corrompeu perante à cultura europeia.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>Ubirajara: </b>personagem protagonista, é o herói do livro. Aparece nos capítulos iniciais com o nome de Jaguarê, guerreiro da tribo dos araguaias, antes de se tornar \"o senhor da lança\", Ubirajara e chefe de sua tribo em substituição ao pai, depois de ter vencido Pojucã. Quando vai servir Itaquê para obter como esposa Araci, o nome adotado por ele entre os tocantins é Jurandir.</li>
					<li><b>Jandira: </b>virgem Araguaia, da tribo de Jaguaré, filha de Magé, uma das mais belas virgens da tribo de nosso herói, e a ele prometida em casamento. Ubirajara a despreza, apaixonado por Araci e, após surpreende-la tentando matar a amada, transforma-a em escrava dela.</li>
					<li><b>Araci: </b>a estrela do dia, filha do chefe dos Tocantins, Itaquê. Os guerreiros da tribo servem ao pai para que este escolha a um deles como marido de Araci. Ela se apaixona por Ubirajara.</li>
					<li><b>Pojucã: </b>Em tupi, seu nome significa \"eu mato gente\"; é um forte guerreiro tocantim e irmão de Araci. É através dele que Jaguaré torna-se Ubirajara, pois na luta que ambos têm, Ubirajara saiu-se vencedor absoluto, deixando de ser caçador para tornar-se líder de sua gente.</li>
					<li><b>Itaquê: </b>chefe tocantim, pai de Araci, homem honrado e leal aos princípios de sua gente.</li>
					<li><b>Jacamim: </b>mãe de Araci e Pojucan. Ela, como todas as mulheres da tribo, encarrega-se do plantio da terra e, segundo a tradição tocantim, transmite sua fertilidade à terra. Não exige a fidelidade do marido, que tem outras mulheres.</li>
					<li><b>Camacã: </b>pai de Ubirajara, chefe da tribo Araguaia, que transmitirá ao filho a sua função.</li>
					<li><b>Canicran: </b>chefe dos tapuias; Itaquê o vence numa luta e abre sua cabeça em duas metades.</li>
					<li><b>Pahã: </b>É o filho mais novo de Canicran, vinga o pai e cega Itaquê a flechadas. É importante para a trama porque vai permitir que os Tocantins fiquem sem chefe, o que faz com que Ubirajara possa impor-se como chefe e unir as duas tribos.</li>
					</ul>
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00001D'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'ALENCARjose'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>